<?php

namespace App\Nova;

use App\Nova\Fields\SubscriptionFields;
use App\Nova\Metrics\CoursesOverTime;
use App\Nova\Metrics\NewCourses;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class Course extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Course::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = ['name', 'description'];

    public static $group = 'Admin';

    public static function indexQuery(NovaRequest $request, $query)
    {
        return $query->when(!auth()->user()->is_admin, function (Builder $query) {
            return $query->whereHas('lectors', function (Builder $query) {
                return $query->where('user_id', auth()->user()->id);
            });
        });
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            Text::make('Name')
                ->rules('required')
                ->sortable(),

            Trix::make('Description')
                ->rules('required'),

            Date::make('Starts At')
                ->rules('required')
                ->format('D.M.Y')
                ->hideWhenUpdating()
                ->sortable(),

            Date::make('Ends At')
                ->rules('required', 'after_or_equal:starts_at')
                ->format('D.M.Y')
                ->hideWhenUpdating()
                ->sortable(),

            Currency::make('Price')
                ->format('%.2n' . ' Kč')
                ->sortable(),

            Text::make('Number of Classrooms', function () {
                return $this->classrooms->count();
            })->onlyOnIndex(),

            Text::make('Number of Lessons', function () {
                return $this->lessons->count();
            })->onlyOnIndex(),

            HasMany::make('Classrooms'),

            BelongsToMany::make('Students')
                ->fields(new SubscriptionFields())
                ->searchable(),

            BelongsToMany::make('Lectors')
                ->searchable(),
        ];
    }

    public static function newModel()
    {
        $model = new static::$model;
        $model->setAttribute('price', 0);
        $model->setAttribute('starts_at', now());
        $model->setAttribute('ends_at', now()->addMonth());
        return $model;
    }

    /**
     * Get the cards available for the request.
     *
     * @param Request $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [
            new NewCourses(),
            new CoursesOverTime()
        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param Request $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param Request $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param Request $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
