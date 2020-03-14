<?php

namespace App\Http\Controllers\App\Parent;

use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Http\Request;

class ChildController extends Controller
{
    public function index()
    {
        $children = auth()->user()->children;

        return view('app.parent.children.index', compact('children'));
    }

    public function show(Student $child)
    {
        return view('app.parent.children.show', compact('child'));
    }
}
