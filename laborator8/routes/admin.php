<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth', 'verified', 'admin'])->name('admin');