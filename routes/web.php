<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('welcome');
});

// 飲食店
Route::get('/restaurants', [RestaurantController::class, 'index']);
Route::get('/restaurants/create', [RestaurantController::class, 'create']);
Route::get('/restaurants/{restaurant}', [RestaurantController::class, 'show']);
Route::post('/restaurants', [RestaurantController::class, 'store']);

// 予約
Route::get('/restaurants/{restaurant}/reservations/create', [ReservationController::class, 'create'])
    ->middleware('auth');

Route::post('/reservations', [ReservationController::class, 'store'])
    ->middleware('auth');

// プロフィール
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
