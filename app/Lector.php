<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lector extends Model
{
    protected $dates = ['birth_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
}
