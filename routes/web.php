<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VilleController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\FlightController;
Route::get('/About',[homeController::class,'about']);
Route::get('/Contact',[homeController::class,'contact']);
Route::get('/', [VilleController::class, 'index']);
Route::get('/flight', [FlightController::class, 'getFlights']);
