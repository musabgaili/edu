<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseApplication;
use Illuminate\Http\Request;

class CourseController extends Controller
{


    function search(Request $request)
    {
        $courses = Course::where("name->en", "like", "%" . $request->search . "%")
            ->orWhere("name->ar", "like", "%" . $request->search . "%")
            ->get();
        return view("main.courses", compact("courses"));
    }

    function applyToCourseForm(Request $request, Course $course)
    {
        return view("main.course_form_apply", compact("course"));
    }

    function applyToCourse(Request $request, Course $course)
    {
        $application = CourseApplication::create([
            'course_id' => $course->id,
            'course_name' => $course->name,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'type' => $request->type,
        ]);
        return redirect()->back()->with('success', '');
    }
}
