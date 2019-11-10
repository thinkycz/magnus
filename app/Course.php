<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $dates = ['starts_at', 'ends_at'];

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }

    public function lectors()
    {
        return $this->belongsToMany(Lector::class);
    }

    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }

    public function lessons()
    {
        return $this->hasManyThrough(Lesson::class, Classroom::class);
    }
}
