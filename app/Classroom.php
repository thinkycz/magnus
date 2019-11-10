<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $dates = ['starts_at'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function getTitleAttribute()
    {
        return $this->course->name . ' - ' . $this->starts_at->englishDayOfWeek . ' ' . $this->starts_at->format('H:i');
    }
}
