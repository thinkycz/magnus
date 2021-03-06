<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone', 'password', 'auth_type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'premium_until'     => 'date'
    ];

    public function lector()
    {
        return $this->hasOne(Lector::class);
    }

    public function student()
    {
        return $this->hasOne(Student::class);
    }

    public function notes()
    {
        return $this->morphMany(Note::class, 'notable');
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }

    public function children()
    {
        return $this->belongsToMany(Student::class, 'student_user');
    }

    public function canImpersonate()
    {
        return $this->is_admin;
    }

    public function canBeImpersonated()
    {
        return !$this->canImpersonate();
    }

    public function getHasPremiumAttribute()
    {
        return now()->lt($this->premium_until);
    }
}
