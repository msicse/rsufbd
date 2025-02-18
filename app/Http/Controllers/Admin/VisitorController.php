<?php

namespace App\Http\Controllers\Admin;

use Image;
use App\Models\Visitor;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class VisitorController extends Controller
{
    public function index()
    {
        $visitors = Visitor::all();
        return view("admin.visitors.index")->with(compact('visitors'));
    }

    public function create()
    {
        return view("admin.visitors.create");
    }

    public function store(Request $request)
    {


        //return $request->all();
        $this->validate($request, array(
            'date' => 'required',
            'name' => 'required',
            'country' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ));

        $slug  = Str::slug($request->name);

        if($request->hasFile('image')) {

            $manager = new ImageManager(new Driver());

            $image       = $request->file('image');
            $filename    = $slug. "-". time().'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(800, 800);
            $img->save('uploads/visitors/' .$filename);


        } else {
            $filename = 'avater.png';
        }



        $visitors = new Visitor();
        $visitors->name = $request->name;
        $visitors->country = $request->country;
        $visitors->date = $request->date;
        $visitors->image = $filename;
        $visitors->status = 1;

        $visitors->save();

        Toastr::success(' Succesfully Added ', 'Success');
        return redirect()->route('admin.visitors.index');

    }



    public function destroy($id)
    {


        $visitors = Visitor::find($id);

        if( file_exists('uploads/visitors/' .$visitors->image) && $visitors->image != 'avater.png'){
            unlink('uploads/visitors/' .$visitors->image);
        }

        $visitors->delete();

        Toastr::success("Successfully Deleted");
        return redirect()->back();
    }
}
