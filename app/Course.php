<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name', 'description', 'price', 'starts_at', 'ends_at', 'color', 'internal_name', 'is_public'];

    protected $dates = ['starts_at', 'ends_at'];

    public function students()
    {
        return $this->belongsToMany(Student::class)->withPivot('paid_amount', 'status');
    }

    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function getExcerptAttribute()
    {
        return str_limit(strip_tags($this->description), 240);
    }

    public function getNextLessonAttribute()
    {
        return $this->lessons()->whereDate('starts_at', '>=', now())->first();
    }
}
