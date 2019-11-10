<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = ['starts_at', 'ends_at'];
    protected $dates = ['starts_at', 'ends_at'];

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }

    public function notes()
    {
        return $this->morphMany(Note::class, 'notable');
    }

    public function getTitleAttribute()
    {
        return $this->classroom->course->name . ' - ' . $this->starts_at->format('j.n.Y H:i');
    }
}
