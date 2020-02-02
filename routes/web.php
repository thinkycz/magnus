<?php

use App\Http\Controllers\App\DashboardController;
use App\Http\Controllers\App\NotStudentController;
use App\Http\Controllers\App\ProfileController;
use App\Http\Controllers\App\SecurityController;

Route::get('logout', function () {
    auth()->logout();

    return redirect()->route('login');
})->name('logout');

Route::get('not-student', [NotStudentController::class, 'index'])->name('not_student');

Route::group(['middleware' => 'student'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
Route::put('profile/{user}', [ProfileController::class, 'update'])->name('profile.update');

Route::get('security', [SecurityController::class, 'index'])->name('security.index');
Route::put('security/{user}', [SecurityController::class, 'update'])->name('security.update');
