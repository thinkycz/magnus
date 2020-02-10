<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    protected $fillable = ['title', 'description'];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
