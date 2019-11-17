<?php

namespace App\Nova\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Laravel\Nova\Filters\BooleanFilter;

class PastLessons extends BooleanFilter
{
    /**
     * Apply the filter to the given query.
     *
     * @param Request $request
     * @param Builder $query
     * @param  mixed  $value
     * @return Builder
     */
    public function apply(Request $request, $query, $value)
    {
        return $query->when(!$value['show_past_lessons'], function (Builder $query) {
            return $query->whereDate('starts_at', '>=', today()->toDateTimeString());
        });
    }

    /**
     * Get the filter's available options.
     *
     * @param Request $request
     * @return array
     */
    public function options(Request $request)
    {
        return [
            'Show Past Lessons' => 'show_past_lessons'
        ];
    }
}
