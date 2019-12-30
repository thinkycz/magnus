<?php

namespace App\Providers;

use App\Classroom;
use App\User;
use Illuminate\Support\Facades\Gate;
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
        Gate::define('viewNova', function (User $user) {
            return $user->is_admin || $user->lector;
        });
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
