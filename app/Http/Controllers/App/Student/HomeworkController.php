<?php

namespace App\Http\Controllers\App\Student;

use App\Homework;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class HomeworkController extends Controller
{
    public function index()
    {
        $homeworks = Homework::whereHas('lesson.course.students.user', function (Builder $query) {
            return $query->where('id', auth()->user()->id);
        })->get();

        return view('app.student.homeworks.index', compact('homeworks'));
    }
}
