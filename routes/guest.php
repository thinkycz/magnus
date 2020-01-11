<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\LandingController;

Route::get('/', LandingController::class)->name('landing');

Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');
