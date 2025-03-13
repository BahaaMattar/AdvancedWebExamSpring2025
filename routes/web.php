<?php

use Illuminate\Support\Facades\Route;

Route::get('/courses', [CourseController::class, 'index']);
Route::get('/students', [StudentController::class, 'index']);

Route::resource('students', StudentController::class);
Route::resource('courses', CourseController::class);
