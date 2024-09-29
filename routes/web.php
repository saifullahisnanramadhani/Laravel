<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CategoryController;

// Rute untuk halaman utama yang menampilkan daftar tugas
Route::get('/', [TaskController::class, 'index'])->name('home');

// Rute untuk kategori
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category}/tasks', [TaskController::class, 'indexByCategory'])->name('categories.tasks.index');

// Rute resource untuk tugas
Route::resource('tasks', TaskController::class);

// Rute untuk membuat dan menyimpan tugas
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
