<?php

namespace App\Http\Controllers\App\Student;

use App\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = auth()->user()->student->courses()->latest()->paginate();

        return view('app.student.courses.index', compact('courses'));
    }

    public function show(Course $course)
    {
        abort_if($course->students()->where('user_id', auth()->user()->id)->doesntExist(), 403);

        return view('app.student.courses.show', compact('course'));
    }
}
