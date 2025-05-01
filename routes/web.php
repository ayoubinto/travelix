<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VilleController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthLogin;
Route::get('/About',[homeController::class,'about']);
Route::get('/Contact',[homeController::class,'contact']);
Route::get('/', [VilleController::class, 'index']);
Route::get('/Voyagepers', [FlightController::class, 'showForm'])->name('voyagepers.form');
Route::post('/Voyagepers', [FlightController::class, 'handleForm'])->name('voyagepers.submit');
Route::post('/reservation', [FlightController::class, 'handleReservation'])->name('reservation.handle');
Route::get('/Facture/{id}', [FlightController::class, 'show'])->name('facture.show');
Route::get('/Login', function(){
     return view('Login');
});
Route::post('/logout-passenger', [AuthLogin::class, 'logout'])->name('logout.passenger');

Route::post('/register', [AuthLogin::class, 'register'])->name('register');

Route::get('/login', [AuthLogin::class, 'showLoginForm']);

Route::post('/login', [AuthLogin::class, 'Login'])->name('login');

Route::post('/logout', [AuthLogin::class, 'logout'])->name('logout');

Route::get('/welcome', [VilleController::class, 'shorform'])->name('welcome');  
Route::get('/dashboard', function () {
    return view('register.create');
});