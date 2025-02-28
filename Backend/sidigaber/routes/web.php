<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KitchenController;
use App\Http\Controllers\KitchenMenuController;
use App\Http\Controllers\RawMeatController;
use App\Http\Controllers\RawMeatMenuController;
use App\Http\Controllers\ReviewController;

// Authentication Routes
Route::get('/', function () {
    return view('login');
});

// Middleware Protected Routes
Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Users Routes
    Route::resource('/users', UserController::class);

    // Kitchen Routes
    Route::resource('/kitchen', KitchenController::class);

    // Kitchen Menu Routes
    Route::resource('/kitchen-menu', KitchenMenuController::class)->only(['index']);

    // Raw Meat Routes
    Route::resource('/raw-meat', RawMeatController::class);

    // Raw Meat Menu Routes
    Route::resource('/raw-meat-menu', RawMeatMenuController::class)->only(['index']);

    // Reviews Routes
    Route::resource('/reviews', ReviewController::class)->only(['index']);
});

require __DIR__.'/auth.php';
