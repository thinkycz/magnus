<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['name', 'content'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getShowRouteAttribute()
    {
        return route('article', $this);
    }

    public function getExcerptAttribute()
    {
        return str_limit(strip_tags($this->content), 240);
    }

    public function getReadTimeAttribute()
    {
        $time = read_time([
            'content' => $this->content,
            'omit_seconds' => true,
            'time_only' => true,
            'abbreviated' => true,
            'words_per_minute' => 230,
            'ltr' => true,
            'translation' => [
                'reads_left_to_right' => false,
                'min' => 'phút',
                'minute' => 'giây',
                'sec' => 'giây',
                'second' => 'giây',
                'read' => 'đọc'
            ]
        ]);

        return "Thời gian đọc {$time}";
    }
}
