<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function students()
    {
        return $this->belongsToMany(User::class, 'students');
    }

    public function lectors()
    {
        return $this->belongsToMany(User::class, 'lectors');
    }

    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }
}
