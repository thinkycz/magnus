<?php

namespace App\Http\Controllers\App\Elearning;

use App\Result;

class ResultController
{
    public function index()
    {
        $results = auth()->user()->results()->latest()->paginate();

        return view('app.elearning.results.index', compact('results'));
    }

    public function show(Result $result)
    {
        return view('app.elearning.results.show', compact('result'));
    }
}
