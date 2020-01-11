<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['name', 'content'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
