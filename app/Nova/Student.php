<?php

namespace App\Nova;

use App\Nova\Fields\SubscriptionFields;
use App\Nova\Metrics\NewStudents;
use App\Nova\Metrics\StudentsOverTime;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Student extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Student::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'full_name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'first_name', 'last_name', 'phone', 'parent_name', 'parent_phone'
    ];

    public static $group = 'Admin';

    /**
     * Get the fields displayed by the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),

            Text::make('Nickname'),

            Text::make('First Name')
                ->rules('required'),

            Text::make('Last Name')
                ->rules('required'),

            Text::make('Phone')
                ->rules('required'),

            Text::make('Address')
                ->rules('required')
                ->hideFromIndex(),

            Text::make('School')
                ->hideFromIndex(),

            Text::make('Hobbies')
                ->hideFromIndex(),

            Text::make('Origin')
                ->hideFromIndex(),

            Text::make('Parent Name')
                ->hideFromIndex(),

            Text::make('Parent Phone')
                ->hideFromIndex(),

            Date::make('Birth Date')
                ->hideFromIndex(),

            Boolean::make('Is Active'),

            BelongsTo::make('User')
                ->nullable()
                ->searchable(),

            BelongsToMany::make('Courses')
                ->fields(new SubscriptionFields())
                ->searchable(),

            BelongsToMany::make('Lessons')
                ->searchable()
        ];
    }

    public static function newModel()
    {
        $model = new static::$model;
        $model->setAttribute('is_active', true);
        return $model;
    }

    /**
     * Get the cards available for the request.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [
            new NewStudents(),
            new StudentsOverTime()
        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
