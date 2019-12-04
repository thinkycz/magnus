<?php

namespace App\Nova\Dashboards;

use Laravel\Nova\Dashboard;
use Magnus\GlobalAgenda\GlobalAgenda;

class AllLessons extends Dashboard
{
    /**
     * Get the displayable name of the dashboard.
     *
     * @return string
     */
    public static function label()
    {
        return 'All Lessons';
    }

    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [
            new GlobalAgenda()
        ];
    }

    /**
     * Get the URI key for the dashboard.
     *
     * @return string
     */
    public static function uriKey()
    {
        return 'all-lessons';
    }
}
