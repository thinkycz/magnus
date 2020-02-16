<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __invoke()
    {
        $courses = Course::where('is_public', true)
            ->whereDate('ends_at', '>', now()->toDateTimeString())
            ->latest()
            ->paginate();

        return view('courses', compact('courses'));
    }
}
