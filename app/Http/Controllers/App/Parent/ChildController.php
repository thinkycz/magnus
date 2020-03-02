<?php

namespace App\Http\Controllers\App\Parent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChildController extends Controller
{
    public function index()
    {
        $children = auth()->user()->children;

        return view('app.parent.children.index', compact('children'));
    }
}
