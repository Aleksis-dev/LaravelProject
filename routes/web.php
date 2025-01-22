<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/products', [ProductController::class, 'index']);