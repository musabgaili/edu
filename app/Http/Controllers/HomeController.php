<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Course;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class HomeController extends Controller
{

    function home()
    {
        $courses = Course::where(['published'=>true , 'home_screen'=> true])->get();
        $services = Service::where('published',true)->get();
        // return $courses;
        // $html = Str::markdown($courses->last()->content);
        // return $html;
        $html = Str::markdown($courses->last()->content);

        return view('main.home',compact('courses','services'));
    }
    function about()
    {
        return view('main.about');
    }

    function contact()
    {
        return view('main.contact');
    }

    function store(Request $request)
    {

        $request->validate([
            'email'=> 'required|email',
            'phone'=> 'required',
            'name'=> 'required',
            'message'=> 'required'
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

    function courses() {

        return view('main.courses');
    }
}
