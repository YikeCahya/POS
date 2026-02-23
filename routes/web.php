<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenjualanController;

// 1. Halaman Home
Route::get('/', [HomeController::class, 'index']);

// 2. Halaman Products (dengan Route Prefix)
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductsController::class, 'foodBeverage']);
    Route::get('/beauty-health', [ProductsController::class, 'beautyHealth']);
    Route::get('/home-care', [ProductsController::class, 'homeCare']);
    Route::get('/baby-kid', [ProductsController::class, 'babyKid']);
});

// 3. Halaman User (dengan Route Param)
Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);

// 4. Halaman Penjualan
Route::get('/penjualan', [PenjualanController::class, 'index']);

