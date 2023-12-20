<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    function home()
    {

        $services = Service::where('published',true)->get();
        return view('main.home',compact('services'));
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
