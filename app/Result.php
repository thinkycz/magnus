<?php

namespace App;

use App\Types\BooleanQuestionType;
use App\Types\ChoiceQuestionType;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $guarded = [];

    protected $casts = [
        'questions' => 'object',
        'answers'   => 'object'
    ];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getTypesAttribute()
    {
        return collect($this->questions)->map(function ($question, $key) {
            $answer = $this->answers[$key] ?? null;

            switch ($question->layout) {
                case 'choice':
                    return new ChoiceQuestionType($question->attributes, $answer);
                case 'boolean':
                    return new BooleanQuestionType($question->attributes, $answer);
                default:
                    return null;
            }
        });
    }

    public function getScoreAttribute()
    {
        $results = collect($this->types)->map(function ($type) {
            return $type->evaluate();
        });

        $correct = $results->filter(function ($result) {
            return $result;
        });

        return round($correct->count() / $results->count() * 100);
    }
}
