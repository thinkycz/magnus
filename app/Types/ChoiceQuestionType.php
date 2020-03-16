<?php

namespace App\Types;

class ChoiceQuestionType extends AbstractQuestionType
{
    public $answers;

    public function __construct($attributes, $providedAnswer = null)
    {
        parent::__construct($attributes, $providedAnswer);

        $this->answers = $attributes->answers;
    }

    public function evaluate()
    {
        $correct = collect($this->answers)->filter(function ($answer) {
            return $answer->attributes->correct;
        })->pluck('key');

        $answered = collect($this->providedAnswer)->pluck('key');

        return $correct->diff($answered)->isEmpty();
    }

    public function render()
    {
        return view('app.elearning.results.types.choice', [
            'answers'        => $this->answers,
            'providedAnswer' => $this->providedAnswer
        ])->render();
    }
}
