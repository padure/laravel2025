<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/suma/{nr1}/{nr2}', [MainController::class, 'suma']);
