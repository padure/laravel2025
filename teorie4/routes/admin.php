<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SubscriberController;

Route::middleware('auth')->group(function () {
    Route::resource('/admin/services', ServiceController::class);
    Route::resource('/admin/subscribers', SubscriberController::class);
});