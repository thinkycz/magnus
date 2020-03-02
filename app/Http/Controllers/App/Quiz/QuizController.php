<?php

namespace App\Http\Controllers\App\Quiz;

class QuizController
{
    public function index()
    {
        return view('app.quizzes.index');
    }

    public function show()
    {
        return view('app.quizzes.show');
    }
}
