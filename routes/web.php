<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ListProdukController;

// Route::get('/', function () {
//   return view('welcome');
// });

Route::get('/home', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/product', [ProductController::class, 'index']);
Route::get('/listproduk', [ListProdukController::class, 'show']);