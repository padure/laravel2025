<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Middleware\CheckStatusTrue;

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/login', function(){
    return view('login');
})->name('login');

Route::get('/products', function(Request $request){
    $products = Product::all();
    return view('products', ['products' => $products]);
})->middleware([CheckStatusTrue::class, 'auth']);