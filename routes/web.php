<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/restaurants', [RestaurantController::class, 'index']);
Route::get('/restaurants/create', [RestaurantController::class, 'create']);
Route::get('/restaurants/{restaurant}', [RestaurantController::class, 'show']);
Route::post('/restaurants', [RestaurantController::class, 'store']);
