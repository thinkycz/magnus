<?php

namespace App\Http\Controllers\App\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
        $exams = auth()->user()->student->exams()->latest()->paginate();

        return view('app.student.exams.index', compact('exams'));
    }
}
