<?php

namespace App\Http\Controllers\App\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
        return view('app.student.exams.index');
    }
}
