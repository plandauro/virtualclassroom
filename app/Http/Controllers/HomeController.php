<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
    public function __invoke()
    {
        // $courses = Courses::all();
        // return $courses;
        return view('welcome');
    }
}
