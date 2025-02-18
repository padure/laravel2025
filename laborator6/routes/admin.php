<?php

use App\Http\Controllers\StudentController;

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('/students', StudentController::class);
});