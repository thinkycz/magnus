<?php

namespace App\Http\Controllers\App\Quiz;

use App\Quiz;

class QuizController
{
    public function index()
    {
        $quizzes = Quiz::paginate();

        return view('app.elearning.quizzes.index', compact('quizzes'));
    }

    public function show(Quiz $quiz)
    {
        return view('app.elearning.quizzes.show', compact('quiz'));
    }
}
