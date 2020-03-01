<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = ['starts_at', 'duration_minutes', 'frequency_days'];

    protected $dates = ['starts_at'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function lectors()
    {
        return $this->belongsToMany(Lector::class);
    }

    public function getTitleAttribute()
    {
        if ($this->course) {
            return $this->course->name . ' - ' . $this->starts_at->englishDayOfWeek . ' ' . $this->starts_at->format('H:i');
        }

        return null;
    }
}
