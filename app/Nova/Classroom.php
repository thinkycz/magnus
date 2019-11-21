<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Classroom extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Classroom::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    public static $displayInNavigation = false;

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            Text::make('Day of Week', function () {
                return $this->starts_at->englishDayOfWeek;
            })->onlyOnIndex(),

            Text::make('Time', function () {
                return $this->starts_at->format('H:i');
            })->onlyOnIndex(),

            DateTime::make('Starts At')
                ->rules('required')
                ->format('D.M.Y HH:mm')
                ->onlyOnForms(),

            Number::make('Duration Minutes')
                ->rules('required'),

            Number::make('Frequency Days')
                ->rules('required'),

            Text::make('Lessons', function () {
                return $this->lessons->count();
            })->onlyOnIndex(),

            Text::make('Lectors', function () {
                return $this->lectors->count();
            })->onlyOnIndex(),

            BelongsTo::make('Course'),

            BelongsToMany::make('Lectors')
                ->searchable(),

            HasMany::make('Lessons'),
        ];
    }

    public static function newModel()
    {
        $model = new static::$model;
        $model->setAttribute('starts_at', now());
        $model->setAttribute('duration_minutes', 90);
        $model->setAttribute('frequency_days', 7);
        return $model;
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
