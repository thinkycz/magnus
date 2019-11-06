<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function notable()
    {
        return $this->morphTo();
    }
}
