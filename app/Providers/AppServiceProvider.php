<?php

namespace App\Providers;

use App\Classroom;
use App\Observers\ClassroomObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Classroom::observe(ClassroomObserver::class);
    }
}
