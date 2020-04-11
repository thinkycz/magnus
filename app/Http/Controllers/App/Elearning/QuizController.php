<?php

namespace App\Http\Controllers\App\Elearning;

use App\Http\Controllers\Controller;
use App\Quiz;
use App\Result;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function __construct()
    {
        $this->middleware(function (Request $request, $next) {
            if ($request->route('quiz')->is_premium && !auth()->user()->has_premium) {
                return redirect()->route('elearning.premium-required');
            }

            return $next($request);
        });
    }

    public function show(Quiz $quiz)
    {
        return view('app.elearning.quizzes.show', compact('quiz'));
    }

    public function process(Quiz $quiz, Request $request)
    {
        $data = $request->validate([
            'answers' => 'required|array'
        ]);

        $result = Result::create([
            'questions' => $quiz->questions,
            'answers' => $data['answers'],
            'user_id' => auth()->user()->id,
            'quiz_id' => $quiz->id
        ]);

        return response([
            'redirect' => route('elearning.results.show', $result)
        ]);
    }
}
