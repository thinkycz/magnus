<?php

use App\Lesson;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Card API Routes
|--------------------------------------------------------------------------
|
| Here is where you may register API routes for your card. These routes
| are loaded by the ServiceProvider of your card. You're free to add
| as many additional routes to this file as your card may require.
|
*/

Route::get('/events', function () {
    return Lesson::query()
        ->whereBetween('starts_at', [now()->subYear()->toDateTimeString(), now()->addYear()->toDateTimeString()])
        ->get();
});
