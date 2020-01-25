<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LandingController;

Route::get('/', LandingController::class)->name('landing');
Route::get('/c/{category}', CategoryController::class)->name('category');
Route::get('/a/{article}', ArticleController::class)->name('article');

Route::get('courses', CourseController::class)->name('courses');

Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');
