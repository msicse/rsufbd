<?php

namespace App\Http\Controllers\Admin;

use Str;
use Image;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view("admin.galleries.index")->with(compact('galleries'));
    }

    public function create()
    {
        return view("admin.galleries.create");
    }

    public function store(Request $request)
    {


        $request->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20480',
        ]);


        if($request->hasFile('images')) {
            $images = $request->file('images');

            foreach($images as $key => $image){

                $manager = new ImageManager(new Driver());
                $filename    = 'gallery'. "-". time().'.'.$image->getClientOriginalExtension();
                $img = $manager->read($image);
                $img = $img->resize(2048, 1280);
                $img->save('uploads/galleries/' .$filename);

                $gallery = new Gallery();
                $gallery->image = $filename;
                $gallery->status = 1;
                $gallery->save();

            }

        }

        Toastr::success(' Succesfully Added ', 'Success');
        return redirect()->route('admin.galleries.index');

    }

    public function status($id)
    {
        $slider = Gallery::find($id);

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


        $gallery = Gallery::find($id);

        if( file_exists('uploads/galleries/' .$gallery->image) ){
            unlink('uploads/galleries/' .$gallery->image);
        }

        $gallery->delete();

        Toastr::success("Successfully Deleted");
        return redirect()->back();
    }
}
