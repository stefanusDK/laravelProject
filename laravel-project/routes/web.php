<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;

Route::get('/home', function () {
    return view('home');
});

  Route::get('/about', [AboutController::class, 'index'])->name('admin.about');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/layout', function () {
    return view('layout');
});

// Admin
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/about', [AboutController::class, 'index'])->name('admin.about');
Route::get('/admin/student', [StudentController::class, 'index'])->name('admin.student');

Route::post('/admin/student', [StudentController::class, 'store'])->name('admin.student.store');
Route::get('/admin/student/{id}/edit', [StudentController::class, 'edit'])->name('admin.student.edit');
Route::put('/admin/student/{id}', [StudentController::class, 'update'])->name('admin.student.update');
Route::delete('/admin/student/{id}', [StudentController::class, 'destroy'])->name('admin.student.destroy');



Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index');
Route::post('/teachers', [TeacherController::class, 'store'])->name('teachers.store');
Route::get('/subjects', [SubjectController::class, 'index'])->name('subjects.index');
Route::post('/subjects', [SubjectController::class, 'store'])->name('subjects.store');
Route::get('/admin/classroom', [ClassroomController::class, 'index'])->name('admin.classroom');
Route::post('/admin/classroom', [ClassroomController::class, 'store'])->name('admin.classroom.store');
