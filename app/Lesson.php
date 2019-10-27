<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $dates = ['starts_at', 'ends_at'];

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }

    public function attendees()
    {
        return $this->belongsToMany(User::class, 'attendances');
    }

    public function notes()
    {
        return $this->morphMany(Note::class, 'notable');
    }
}
