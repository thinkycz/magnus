<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = ['starts_at', 'ends_at', 'course_id'];
    protected $dates = ['starts_at', 'ends_at'];
    protected $appends = ['title', 'url'];

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }

    public function lectors()
    {
        return $this->belongsToMany(Lector::class);
    }

    public function notes()
    {
        return $this->morphMany(Note::class, 'notable');
    }

    public function getTitleAttribute()
    {
        if ($this->classroom && $this->classroom->course) {
            return $this->classroom->course->name . ' - ' . $this->starts_at->format('j.n.Y H:i');
        }

        return null;
    }

    public function getUrlAttribute()
    {
        return url('admin/resources/lessons/' . $this->id);
    }
}
