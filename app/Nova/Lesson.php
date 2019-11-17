<?php

namespace App\Nova;

use App\Nova\Filters\PastLessons;
use App\Nova\Metrics\LessonsOverTime;
use App\Nova\Metrics\NewLessons;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\MorphMany;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Lesson extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Lesson::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    public static $group = 'Overview';

    public static function indexQuery(NovaRequest $request, $query)
    {
        return $query
            ->when(empty($request->get('orderBy')), function (Builder $query) {
                $query->getQuery()->orders = [];
                $query->orderBy('starts_at');
            })
            ->when(!auth()->user()->is_admin, function (Builder $query) {
                return $query->whereHas('classroom', function (Builder $query) {
                    return $query->whereHas('course', function (Builder $query) {
                        return $query->whereHas('lectors', function (Builder $query) {
                            return $query->where('user_id', auth()->user()->id);
                        });
                    });
                });
            });
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            BelongsTo::make('Classroom'),

            DateTime::make('Starts At')
                ->format('D.M.Y HH:mm')
                ->sortable(),

            DateTime::make('Ends At')
                ->format('D.M.Y HH:mm')
                ->sortable(),

            BelongsToMany::make('Students')
                ->searchable(),

            MorphMany::make('Notes'),

            Text::make('Number of Notes', function () {
                return $this->notes->count();
            })->onlyOnIndex(),
        ];
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
            new NewLessons(),
            new LessonsOverTime()
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
        return [
            new PastLessons()
        ];
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
