<?php

namespace App\Nova;

use App\Nova\Metrics\LectorsOverTime;
use App\Nova\Metrics\NewLectors;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Lector extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Lector::class;

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
        'first_name', 'last_name', 'phone'
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
            Text::make('First Name')
                ->rules('required')
                ->sortable(),

            Text::make('Last Name')
                ->rules('required')
                ->sortable(),

            Text::make('Phone')
                ->rules('required'),

            Text::make('Address')
                ->rules('required')
                ->hideFromIndex(),

            Text::make('Past Experience')
                ->hideFromIndex(),

            Text::make('Teaches Subjects')
                ->hideFromIndex(),

            Text::make('Available Days')
                ->hideFromIndex(),

            Date::make('Birth Date')
                ->hideFromIndex(),

            BelongsTo::make('User')
                ->nullable()
                ->searchable(),

            BelongsToMany::make('Courses')
                ->searchable()
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
            new NewLectors(),
            new LectorsOverTime()
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
