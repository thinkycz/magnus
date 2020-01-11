<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class StudyPlan extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $fillable = ['name'];

    public function registerMediaCollections()
    {
        $this->addMediaCollection('materials');
    }
}
