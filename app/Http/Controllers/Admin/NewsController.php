<?php

namespace App\Http\Controllers\Admin;

use Image;
use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view("admin.news.index")->with(compact('news'));
    }

    public function create()
    {
        return view("admin.news.create");
    }

    public function store(Request $request)
    {


        //return $request->all();
        $this->validate($request, array(
            'date' => 'required',
            'title' => 'required',
            'description' => 'required',
        ));



        if($request->hasFile('image')) {

            $manager = new ImageManager(new Driver());

            $image       = $request->file('image');
            $filename    = 'news'. "-". time().'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
           $img = $img->resize(2048, 1280);
            $img->save('uploads/news/' .$filename);

        } else {
            $filename = NULL;
        }





        $news = new News();
        $news->date = $request->date;
        $news->title = $request->title;
        $news->description = $request->description;
        $news->image = $filename;

        $news->save();

        Toastr::success(' Succesfully Added ', 'Success');
        return redirect()->route('admin.news.index');

    }



    public function destroy($id)
    {


        $news = News::find($id);


        $news->delete();

        Toastr::success("Successfully Deleted");
        return redirect()->back();
    }
}
