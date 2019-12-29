<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;

Route::get('logout', function () {
    auth()->logout();

    return redirect()->route('login');
})->name('logout');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('profile', ProfileController::class)->only('index', 'update');