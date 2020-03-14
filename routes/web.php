<?php

use App\Http\Controllers\App\Quiz\QuizController;
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
Route::redirect('/parent', '/parent/children')->name('parent');

Route::group(['middleware' => 'student', 'prefix' => 'student', 'as' => 'student.'], function () {
    Route::get('courses', [CourseController::class, 'index'])->name('courses.index');
    Route::get('courses/{course}', [CourseController::class, 'show'])->name('courses.show');

    Route::get('exams', [ExamController::class, 'index'])->name('exams.index');
    Route::get('feedbacks', [FeedbackController::class, 'index'])->name('feedbacks.index');
    Route::get('homeworks', [HomeworkController::class, 'index'])->name('homeworks.index');
});

Route::group(['middleware' => 'parent', 'prefix' => 'parent', 'as' => 'parent.'], function () {
    Route::get('children', [\App\Http\Controllers\App\Parent\ChildController::class, 'index'])->name('children.index');
    Route::get('children/{child}', [\App\Http\Controllers\App\Parent\ChildController::class, 'show'])->name('children.show');
});

Route::group(['prefix' => 'elearning', 'as' => 'elearning.'], function () {
    Route::get('quizzes', [QuizController::class, 'index'])->name('quizzes.index');
    Route::get('quizzes/{quiz}', [QuizController::class, 'show'])->name('quizzes.show');
});

Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
Route::put('profile/{user}', [ProfileController::class, 'update'])->name('profile.update');

Route::get('security', [SecurityController::class, 'index'])->name('security.index');
Route::put('security/{user}', [SecurityController::class, 'update'])->name('security.update');

