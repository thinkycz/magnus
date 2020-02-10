<?php

namespace App\Http\Controllers\App\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = auth()->user()->student->feedbacks()->latest()->paginate();

        return view('app.student.feedbacks.index', compact('feedbacks'));
    }
}
