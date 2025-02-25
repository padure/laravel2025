<?php

use App\Http\Controllers\GuestController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::controller(GuestController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/despre', 'about')->name('about');
    Route::get('/servicii', 'services')->name('services');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/login', 'login')->name('login');
});
Route::get('/servicii/{service}', [ServiceController::class, 'show'])->name('services.show');