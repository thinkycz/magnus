<?php

namespace App\Http\Controllers\App\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeworkController extends Controller
{
    public function index()
    {
        return view('app.student.courses');
    }
}
