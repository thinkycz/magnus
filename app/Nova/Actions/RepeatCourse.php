<?php

namespace App\Nova\Actions;

use App\Classroom;
use App\Course;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use Laravel\Nova\Fields\Date;

class RepeatCourse extends Action
{
    use InteractsWithQueue, Queueable;

    /**
     * Perform the action on the given models.
     *
     * @param \Laravel\Nova\Fields\ActionFields $fields
     * @param \Illuminate\Support\Collection $models
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models)
    {
        $models->each(function (Course $course) use ($fields) {
            $newCourse = Course::create(
                collect($course->getAttributes())
                    ->merge($fields->toArray())
                    ->only('name', 'description', 'price', 'starts_at', 'ends_at', 'color', 'internal_name', 'is_public')
                    ->toArray()
            );

            $newCourse->students()->sync($course->students);

            $course->classrooms->each(function (Classroom $classroom) use ($newCourse) {
                $newCourse->classrooms()->create(
                    collect($classroom->attributesToArray())
                        ->only('starts_at', 'duration_minutes', 'frequency_days')
                        ->toArray()
                );
            });
        });
    }

    /**
     * Get the fields available on the action.
     *
     * @return array
     */
    public function fields()
    {
        return [
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
        ];
    }
}
