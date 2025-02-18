<?php

namespace App\Http\Controllers\Admin;

use Str;
use App\Models\Slider;
use Illuminate\Http\Request;
use Intervention\Image\Image;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;


class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view("admin.sliders.index")->with(compact('sliders'));
    }

    public function create()
    {
        return view("admin.sliders.create");
    }

    public function store(Request $request)
    {
        $this->validate($request, array(
            'title'         => '',
            'sub_title'     => '',
            'piority'       => '',
            'description'   => '',
            'image'         => 'required|image',
        ));




        $slider = new Slider();


        if($request->hasFile('image')) {
            $manager = new ImageManager(new Driver());

            $image       = $request->file('image');
            $filename    = 'slider'. "-". time().'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(2048, 1280);

            $img->save('uploads/sliders/' .$filename);

        }

        $slider->title          = $request->title;
        $slider->sub_title      = $request->sub_title;
        $slider->description    = $request->description;
        $slider->image          = $filename;
        $slider->status         = 1;
        $slider->piority        = $request->piority;
        $slider->save();

        Toastr::success(' Succesfully Added ', 'Success');
        return redirect()->route('admin.sliders.index');
    }
    public function edit($id)
    {
        $slider = Slider::find($id);
        return view("admin.sliders.edit")->with(compact('slider'));
    }
    public function update(Request $request, $id)
    {

        $slider = Slider::find($id);

        $this->validate($request, array(
            'title'         => '',
            'sub_title'     => '',
            'piority'       => '',
            'description'   => '',
            'image'         => '',
        ));





        if($request->hasFile('image')) {

            $manager = new ImageManager(new Driver());
            $image       = $request->file('image');
            $filename    = 'slider'. "-". time().'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img = $img->resize(2048, 1280);

            $img->save('uploads/sliders/' .$filename);

            if( file_exists('uploads/sliders/' .$slider->image) ){
                unlink('uploads/sliders/' .$slider->image);
            }

        } else {
            $filename = $slider->image;
        }



        $slider->title          = $request->title;
        $slider->sub_title      = $request->sub_title;
        $slider->description    = $request->description;
        $slider->image          = $filename;
        $slider->status         = 1;
        $slider->piority        = $request->piority;
        $slider->save();

        Toastr::success('Slider Succesfully Updated ', 'Success');
        return redirect()->route('admin.sliders.index');
    }

    public function status($id)
    {
        $slider = Slider::find($id);

        if ($slider->status == 1) {
            $slider->status = 2;
        } else {
            $slider->status = 1;
        }

        $slider->save();

        Toastr::success("Successfully Saved");
        return redirect()->back();
    }


    function destroy($id)
    {

        $slider = Slider::find($id);

        if( file_exists('uploads/sliders/' .$slider->image) ){
            unlink('uploads/sliders/' .$slider->image);
        }

        $slider->delete();

        Toastr::success("Successfully Deleted");
        return redirect()->back();
    }

}
