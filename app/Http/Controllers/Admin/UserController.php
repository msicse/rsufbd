<?php

namespace App\Http\Controllers\Admin;

use Image;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view("admin.users.index")->with(compact('users'));
    }

    public function create()
    {
        return view("admin.users.add");
    }

    public function store(Request $request)
    {
        $this->validate($request, array(
            'name'  => 'required',
            'email'  => 'required|email|unique:users',
            'password'  => 'required|min:6',
            'description'  => '',
            'image'  => '',
        ));

        $slug  = Str::slug($request->name);
        $user = new User();

        if($request->hasFile('image')) {

            $manager = new ImageManager(new Driver());

            $image       = $request->file('image');
            $filename    = $slug. "-". time().'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(800, 800);
            $img->save('uploads/users/' .$filename);
        }else {
            $filename = 'avater.png';
        }

        $user->name         = $request->name;
        $user->email        = $request->email;
        $user->description  = $request->description;
        $user->type  = 2;
        $user->image        = $filename;
        $user->password     = bcrypt($request->password);
        $user->save();

        Toastr::success('User Succesfully Added ', 'Success');
        return redirect()->route('admin.users.index');

        return $request->all();
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view("admin.users.edit")->with(compact('user'));
    }
    public function update(Request $request, $id)
    {

        $user = User::find($id);
        $this->validate($request, array(
            'name'  => 'required',
            'email'  => 'required|email|unique:users,email,'.$user->id,
            //'password'  => 'min:6',
            'password' => 'sometimes|nullable|min:6',
            'description'  => '',
            'image'  => '',
        ));
//'email' => 'unique:users,email_address,'.$user->id
        $slug  = Str::slug($request->name);


        if($request->hasFile('image')) {

            $manager = new ImageManager(new Driver());

            $image       = $request->file('image');
            $filename    = $slug. "-". time().'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(800, 800);
            $img->save('uploads/users/' .$filename);


            if( $user->image != 'avater.png' ){
                if( file_exists('uploads/users/' .$user->image) ){
                    unlink('uploads/users/' .$user->image);
                }
            }


        }else {
            $filename = $user->image;
        }

        if($request->password == null){
            $password = $user->password;

        } else {
            $password = $request->password;
            //return $password;
        }

        $user->name         = $request->name;
        $user->email        = $request->email;
        $user->description  = $request->description;
        $user->image        = $filename;
        $user->password     = bcrypt($password);
        $user->save();

        Toastr::success('User Succesfully Updated ', 'Success');
        return redirect()->route('admin.users.index');
    }


    function destroy($id)
    {

        $user = User::find($id);
        if( $user->image != 'avater.png' ){
            if( file_exists('uploads/users/' .$user->image) ){
                unlink('uploads/users/' .$user->image);
            }
        }
        $user->delete();

        Toastr::success("Successfully Deleted");
        return redirect()->back();
    }
}
