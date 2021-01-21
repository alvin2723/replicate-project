<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        // Get Data Course from JSON Database
        $course = Http::get('https://raw.githubusercontent.com/alvin2723/apiTest/main/course.json')->json();
        $course_data = $course['data'];
        $course_length = count($course_data);


        return view('home', [
            "course_data" => $course_data,
            "course_length" => $course_length
        ]);
    }
}
