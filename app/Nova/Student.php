<?php

namespace App\Nova;

use App\Nova\Metrics\NewStudents;
use App\Nova\Metrics\StudentsOverTime;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\DateTime;
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
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),

            Text::make('First Name')
                ->rules('required'),

            Text::make('Last Name')
                ->rules('required'),

            Text::make('Phone')
                ->rules('required'),

            Text::make('Address')
                ->rules('required'),

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

            DateTime::make('Birth Date')
                ->hideFromIndex(),

            BelongsTo::make('User')
                ->nullable(),

            BelongsToMany::make('Lessons')
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
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
