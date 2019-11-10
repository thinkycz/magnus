<?php

namespace App;

use Illuminate\Support\Str;
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

    public function getExcerptAttribute()
    {
        return Str::limit(strip_tags($this->content), 50);
    }
}
