<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $guarded = [];

    protected $casts = [
        'questions' => 'json',
        'answers'   => 'json'
    ];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getScoreAttribute()
    {
        $results = collect($this->questions)->map(function ($question, $key) {
            return $this->evaluate($question, $this->answers[$key] ?? null);
        });

        $correct = $results->filter(function ($result) {
            return $result;
        });

        return $correct->count() / $results->count() * 100;
    }

    public function evaluate(array $question, $answer)
    {
        switch ($question['layout']) {
            case 'choice':
                $correct = collect(array_get($question, 'attributes.answers', []))->filter(function ($answer) {
                    return array_get($answer, 'attributes.correct', false);
                })->pluck('key');

                $answered = collect($answer)->pluck('key');

                return $correct->diff($answered)->isEmpty();
            case 'boolean':
                $correct = array_get($question, 'attributes.correct', null);

                return $correct === $answer;
            default:
                return false;
        }
    }
}
