<?php

namespace App\Nova;

use Froala\NovaFroalaField\Froala;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Whitecube\NovaFlexibleContent\Flexible;

class Quiz extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Quiz::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    public static $group = 'E-Learning';

    /**
     * Get the fields displayed by the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     * @throws \Exception
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),

            Text::make('Title')
                ->rules('required'),

            Froala::make('Description')
                ->rules('required'),

            Select::make('Difficulty')
                ->options([
                    0 => 'Beginner',
                    1 => 'Pre-Intermediate',
                    2 => 'Intermediate',
                    3 => 'Advanced'
                ])
                ->displayUsingLabels(),

            Flexible::make('Questions')
                ->button('Add Question')
                ->addLayout('Yes or No', 'boolean', [
                    Text::make('Title')->rules('required'),
                    Markdown::make('Content')->rules('required'),
                    Boolean::make('Correct'),
                    Textarea::make('Explanation'),
                ])
                ->addLayout('Multiple Choice', 'choice', [
                    Text::make('Title')->rules('required'),
                    Markdown::make('Content')->rules('required'),
                    Flexible::make('Answers')
                        ->button('Add Answer')
                        ->addLayout('Answer', 'answer', [
                            Text::make('Title'),
                            Boolean::make('Correct'),
                        ])
                        ->rules('required'),
                    Textarea::make('Explanation'),
                ])
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
        return [];
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
