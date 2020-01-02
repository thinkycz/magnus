<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SecurityController;

Route::get('logout', function () {
    auth()->logout();

    return redirect()->route('login');
})->name('logout');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
Route::put('profile/{user}', [ProfileController::class, 'update'])->name('profile.update');
Route::get('security', [SecurityController::class, 'index'])->name('security.index');
Route::put('security/{user}', [SecurityController::class, 'update'])->name('security.update');
