<?php

namespace App\Nova\Fields;

use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\Select;

class SubscriptionFields
{
    public function __invoke()
    {
        return [
            Select::make('Status')
                ->options([
                    'active'    => 'Active',
                    'suspended' => 'Suspended',
                    'cancelled' => 'Cancelled'
                ])
                ->displayUsingLabels(),

            Currency::make('Paid Amount')
                ->format('%.2n' . ' Kč')->canSee(function ($request) {
                    return $request->user()->is_admin;
                })
        ];
    }
}