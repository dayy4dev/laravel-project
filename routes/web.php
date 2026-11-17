<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

Route::get('/admin/about', [AboutController::class, 'index'])->name('admin.about');

Route::get('/admin/students', [StudentController::class, 'index'])->name('admin.students');

Route::get('/admin/classroom', [ClassroomController::class, 'index'])->name('admin.classroom');

Route::get('/admin/teachers', [TeacherController::class, 'index'])->name('admin.teachers');

Route::get('/admin/subjects', [SubjectController::class, 'index'])->name('admin.subjects');

Route::post('/student', [StudentController::class, 'store'])->name('admin.students.store');
