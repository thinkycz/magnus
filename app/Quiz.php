<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $casts = [
        'questions'  => 'json',
        'is_premium' => 'boolean'
    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
