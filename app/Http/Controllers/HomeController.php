<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Content;
use App\Models\Course;
use App\Models\Gallery;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class HomeController extends Controller
{

    function home()
    {
        $courses = Course::where(['published' => true, 'home_screen' => true])->get();
        $services = Service::where('published', true)->get();

        $content = Content::all();

        // App::setLocale('ar');
        //   return  Str::markdown($content->where('name', 'slider-photo')->first()->content);

        return view('main.home', compact('courses', 'services', 'content'));
    }
    function about()
    {
        $content = Content::where('name', 'about-us')->first();
        $gallery = Gallery::where('published', true)->inRandomOrder()->get();
        // return $gallery;
        return view('main.about', compact('content', 'gallery'));
    }

    function contact()
    {
        return view('main.contact');
    }

    function store(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'phone' => 'required',
            'name' => 'required',
            'message' => 'required'
        ]);
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ]);


        Session::flash('success');

        return to_route('contact')->withFragment('contact_message');
    }

    function courses()
    {

        return view('main.courses');
    }

    function blog()
    {
        return 'blog';
    }


    function quote(Request $request)
    {
        return $request;
    }
}
