<?php

namespace App\Http\Controllers\App\Elearning;

use App\Section;
use Illuminate\Http\Request;

class SectionController
{
    public function index()
    {
        $sections = Section::whereHas('quizzes')->orderBy('position')->paginate();

        return view('app.elearning.sections.index', compact('sections'));
    }

    public function show(Section $section)
    {
        $quizzes = $section->quizzes()->paginate();

        return view('app.elearning.sections.show', compact('section', 'quizzes'));
    }
}
