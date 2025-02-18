<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Gallery;
use App\Models\Message;
use App\Models\Volunteer;
use App\Models\Visitor;
use App\Models\News;
use Toastr;

use Mail;


class FrontendController extends Controller
{
    public function index()
    {

        $sliders = Slider::where('status', 1)->orderByDesc('piority')->get();
        return view('pages.index')->with(compact('sliders'));
    }

    //About Methods
    public function about()
    {

        //$sliders = Slider::where('status', 1)->orderByDesc('piority')->get();
        $volunteers = Volunteer::where('status', 1)->get();
        $visitors = Visitor::where('status', 1)->get();
        return view('pages.about')->with(compact('volunteers', 'visitors'));
    }

    public function registration()
    {
        return view('pages.about.registration');
    }

    public function operation()
    {
        return view('pages.about.operation');
    }

    public function do()
    {
        return view('pages.about.do');
    }

    public function history()
    {
        return view('pages.about.history');
    }

    public function success()
    {
        return view('pages.about.success');
    }


    public function involved()
    {
        return view('pages.involved');
    }



    public function contact()
    {
        return view('pages.contact');
    }

    public function postContact(Request $request)
    {
        $this->validate($request, array(
            'fname'     => 'required|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'lname'     => 'required|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'email'     => 'required|email',
            'phone'     => 'required',
            'message'     => 'required',
        ));

        $message = new Message();
        $message->fname     = $request->fname;
        $message->lname     = $request->lname;
        $message->email     = $request->email;
        $message->phone     = $request->phone;
        $message->message   = $request->message;

        $message->save();
        $input = $request->all();
        //  Send mail to admin
        \Mail::send('mail.contact', array(
            'fname' => $input['fname'],
            'lname' => $input['lname'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'subject' => 'Contact From Email',
            'message' => $input['message'],
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('admin@admin.com', 'Admin')->subject('Contact From Email');
        });

        Toastr::success(' Succesfully Send ', 'Success');
        return redirect()->back();

    }

    public function gallery()
    {
        $galleries = Gallery::paginate('21');
        return view('pages.gallery')->with(compact('galleries'));
    }
    public function videoGallery()
    {
        // $galleries = Gallery::paginate('21');
        return view('pages.video-gallery');//->with(compact('galleries'));
    }

    public function news()
    {
        $news = News::all();
        return view('pages.news')->with(compact('news'));
    }


}
