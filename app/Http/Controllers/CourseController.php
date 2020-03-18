<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Course;

class CourseController extends Controller
{
    //
    public function index(){
        // mengambil data Course
        $courses = Course::all();

        // mengirim data courses ke view course
        return view('course', ['course' => $courses]);
    }
}
