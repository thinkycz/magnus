<?php

namespace App\Types;

use Illuminate\Support\Str;

class ExactQuestionType extends AbstractQuestionType
{
    public $correct;

    public function __construct($attributes, $providedAnswer = null)
    {
        parent::__construct($attributes, $providedAnswer);

        $this->correct = $attributes->correct;
    }

    public function evaluate()
    {
        return Str::lower(trim($this->correct)) === Str::lower(trim($this->providedAnswer));
    }

    public function render()
    {
        return view('app.elearning.results.types.exact', [
            'correct'        => $this->correct,
            'providedAnswer' => $this->providedAnswer
        ])->render();
    }
}
