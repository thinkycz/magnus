<?php

namespace App\Types;

abstract class AbstractQuestionType
{
    public $title;

    public $content;

    public $explanation;

    public $providedAnswer;

    public function __construct($attributes, $providedAnswer = null)
    {
        $this->title = $attributes->title;
        $this->content = $attributes->content;
        $this->explanation = $attributes->explanation;
        $this->providedAnswer = $providedAnswer;
    }

    abstract public function evaluate();

    abstract public function render();
}
