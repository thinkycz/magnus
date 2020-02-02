<?php

use App\Http\Controllers\App\Student\CourseController;
use App\Http\Controllers\App\NotStudentController;
use App\Http\Controllers\App\ProfileController;
use App\Http\Controllers\App\SecurityController;
use App\Http\Controllers\App\Student\ExamController;
use App\Http\Controllers\App\Student\FeedbackController;
use App\Http\Controllers\App\Student\HomeworkController;

Route::get('logout', function () {
    auth()->logout();

    return redirect()->route('login');
})->name('logout');

Route::get('not-student', [NotStudentController::class, 'index'])->name('not_student');

Route::redirect('/dashboard', '/student/courses')->name('dashboard');

Route::group(['middleware' => 'student', 'prefix' => 'student', 'as' => 'student.'], function () {
    Route::get('courses', [CourseController::class, 'index'])->name('courses.index');
    Route::get('exams', [ExamController::class, 'index'])->name('exams.index');
    Route::get('feedbacks', [FeedbackController::class, 'index'])->name('feedbacks.index');
    Route::get('homeworks', [HomeworkController::class, 'index'])->name('homeworks.index');
});

Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
Route::put('profile/{user}', [ProfileController::class, 'update'])->name('profile.update');

Route::get('security', [SecurityController::class, 'index'])->name('security.index');
Route::put('security/{user}', [SecurityController::class, 'update'])->name('security.update');
