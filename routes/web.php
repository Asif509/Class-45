<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/',[HomeController::class, 'home'])->name('home');
Route::get('/products',[ProductController::class, 'showProducts'])->name('all-products');

