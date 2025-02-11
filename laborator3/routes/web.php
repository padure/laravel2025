<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/students');
// Route::get('/students', [StudentController::class, 'index'])
//     ->name('students.index');
// Route::get('/students/create', [StudentController::class, 'create'])
//     ->name('students.create');
// Route::get('/students/{student}', [StudentController::class, 'show'])
//     ->name('students.show');
// Route::post('/students', [StudentController::class, 'store'])
//     ->name('students.store');
// Route::get('/students/{student}/edit', [StudentController::class, 'edit'])
//     ->name('students.edit');
// Route::put('/students/{student}/update', [StudentController::class, 'update'])
//     ->name('students.update');
// Route::delete('/students/{student}', [StudentController::class, 'destroy'])
//     ->name('students.delete');
Route::resource('/students', StudentController::class);
