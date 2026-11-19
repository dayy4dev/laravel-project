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

Route::get('/admin/students', [StudentController::class, 'index'])->name('admin.students.index');

Route::get('/admin/classroom', [ClassroomController::class, 'index'])->name('admin.classroom.index');

Route::get('/admin/teachers', [TeacherController::class, 'index'])->name('admin.teachers.index');

Route::get('/admin/subjects', [SubjectController::class, 'index'])->name('admin.subjects.index');

Route::post('/classroom/store', [ClassroomController::class, 'store'])->name('admin.classroom.store');

Route::post('/teacher/store', [TeacherController::class, 'store'])->name('admin.teachers.store');

Route::post('/subject/store', [SubjectController::class, 'store'])->name('admin.subjects.store');

Route::post('/student/store', [StudentController::class, 'store'])->name('admin.students.store');

Route::get('/admin/students/create', [StudentController::class, 'create'])->name('admin.students.create');

Route::get('/admin/classroom/create', [ClassroomController::class, 'create'])->name('admin.classroom.create');

Route::get('/admin/teachers/create', [TeacherController::class, 'create'])->name('admin.teachers.create');

Route::get('/admin/subjects/create', [SubjectController::class, 'create'])->name('admin.subjects.create');
