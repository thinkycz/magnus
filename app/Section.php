<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }
}
