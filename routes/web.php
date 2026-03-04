<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;

route::get('/', function () {
    return view('welcome');
});

// Level Route
Route::get('/level', [LevelController::class, 'index']);

// Kategori Route
Route::get('/kategori', [KategoriController::class, 'index']);

// User Route
Route::get('/user', [UserController::class, 'index']);

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

// User Tambah
Route::get('/user/tambah', [UserController::class, 'tambah']);

// User Simpan
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);

// User Edit
Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);

// User

