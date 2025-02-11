<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name("home");
Route::get('/contacts', [PageController::class, 'contacts'])->name("contacts");
Route::get('/posts', [PageController::class, 'posts'])->name("posts");
