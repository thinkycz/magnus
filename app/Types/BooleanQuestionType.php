<?php

namespace App\Types;

class BooleanQuestionType extends AbstractQuestionType
{
    public $correct;

    public function __construct($attributes, $providedAnswer = null)
    {
        parent::__construct($attributes, $providedAnswer);

        $this->correct = $attributes->correct;
    }

    public function evaluate()
    {
        return $this->correct === $this->providedAnswer;
    }

    public function render()
    {
        return view('app.elearning.results.types.boolean', [
            'correct'        => $this->correct,
            'providedAnswer' => $this->providedAnswer
        ])->render();
    }
}
