<?php

namespace App\Http\Controllers\Admin;

use Str;
use Image;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class VolunteerController extends Controller
{
    public function index()
    {
        $volunteers = Volunteer::all();
        return view("admin.volunteers.index")->with(compact('volunteers'));
    }

    public function create()
    {
        return view("admin.volunteers.create");
    }

    public function store(Request $request)
    {

        $this->validate($request, array(
            'name' => 'required',
            'country' => 'required',
            'duration' => 'required',
            'expertise' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ));




        if($request->hasFile('image')) {

            $manager = new ImageManager(new Driver());

            $image       = $request->file('image');
            $filename    = 'volunteer'. "-". time().'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(2048, 1280);

            $img->save('uploads/volunteers/' .$filename);

        } else {
            $filename = 'avater.png';
        }

        $volunteer = new Volunteer();
        $volunteer->name = $request->name;
        $volunteer->country = $request->country;
        $volunteer->duration = $request->duration;
        $volunteer->expertise = $request->expertise;
        $volunteer->image = $filename;
        $volunteer->status = 1;
        $volunteer->save();

        Toastr::success(' Succesfully Added ', 'Success');
        return redirect()->route('admin.volunteers.index');

    }

    public function status($id)
    {
        $slider = Volunteer::find($id);

        if ($slider->status == 1) {
            $slider->status = 2;
        } else {
            $slider->status = 1;
        }

        $slider->save();

        Toastr::success("Successfully Saved");
        return redirect()->back();
    }

    public function destroy($id)
    {


        $volunteer = Volunteer::find($id);



        if( file_exists('uploads/volunteers/' .$volunteer->image) && $volunteer->image != 'avater.png'){
            unlink('uploads/volunteers/' .$volunteer->image);
        }

        $volunteer->delete();

        Toastr::success("Successfully Deleted");
        return redirect()->back();
    }
}
