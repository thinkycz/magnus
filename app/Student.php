<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $dates = ['birth_date'];

    protected $casts = ['is_active' => 'boolean'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class)->withPivot('paid_amount', 'status');
    }

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class);
    }

    public function exams()
    {
        return $this->hasMany(Exam::class);
    }

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }

    public function parents()
    {
        return $this->belongsToMany(User::class, 'student_user');
    }

    public function getFullNameAttribute()
    {
        if ($this->nickname) {
            return "{$this->first_name} ({$this->nickname}) {$this->last_name}";
        }

        return $this->first_name . ' ' . $this->last_name;
    }
}
