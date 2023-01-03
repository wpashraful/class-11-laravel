<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function show($slug){
        $courses = Course::where('slug', $slug)->with(['platform', 'topics', 'authors', 'series', 'reviews'])->first();

//        return response()->json($courses);

        return  view('course.single', [
            'couresSingle' => $courses
        ]);
    }
}
