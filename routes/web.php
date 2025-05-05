<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VilleController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\AuthLogin;
use App\Models\Reservation;
use Carbon\Carbon;
use App\Models\Airport;
use App\Models\Passenger;   
Route::get('/About',[homeController::class,'about']);
Route::get('/Contact',[homeController::class,'contact']);
Route::get('/', [VilleController::class, 'index']);
Route::get('/Voyagepers', [FlightController::class, 'showForm'])->name('voyagepers.form');
Route::post('/Voyagepers', [FlightController::class, 'handleForm'])->name('voyagepers.submit');
Route::post('/reservation', [FlightController::class, 'handleReservation'])->name('reservation.handle');
Route::get('/Facture/{id}', [FlightController::class, 'show'])->name('facture.show');
Route::post('/reservation/{id}/paiement', [FlightController::class, 'updatePaiement'])->name('reservation.paiement');
Route::get('/Login', function(){
    return view('Login');
});
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
Route::post('/reservation/{id}', [FlightController::class, 'updatePaiement'])->name('reservation.paiement');
Route::post('/logout-passenger', [AuthLogin::class, 'logout'])->name('logout.passenger');

Route::post('/logout-admin', [AuthLogin::class, 'logout'])->name('logout.admin');

Route::post('/register', [AuthLogin::class, 'register'])->name('register');

Route::get('/login', [AuthLogin::class, 'showLoginForm']);

Route::post('/login', [AuthLogin::class, 'Login'])->name('login');

Route::post('/logout', [AuthLogin::class, 'logout'])->name('logout');

Route::get('/welcome', [VilleController::class, 'shorform'])->name('welcome');

Route::get('/dashboard', function () {
    $nombreReservations = Reservation::count();
    $datesemainderineir = Carbon::now()->subDays(7);
    $reservations = Reservation::with('voyage')->get();
    
    $chiffreAffaires = 0;
    $totalVoyageurs = 0;
    
    foreach ($reservations as $reservation) {
        $nombrePersonnes = $reservation->nombre_adultes + $reservation->nombre_enfants;
        $prix = $reservation->voyage->prix ?? 0;
        $chiffreAffaires += $nombrePersonnes * $prix;
        $totalVoyageurs += $nombrePersonnes;
    }
    $reserv = Reservation::with('voyage')
    ->where('date_reservation', '>=', $datesemainderineir)
    ->get();
    $revenu = 0;
    $nombrePersonnes = 0;
    foreach ($reserv as $reser) {
        $nb = $reser->nombre_adultes + $reser->nombre_enfants;
        $prix = $reser->voyage->prix ?? 0;
        $revenu += $nombrePersonnes * $prix;
        $nombrePersonnes += $nb;
    }
    $reservations = Reservation::with(['voyage', 'passenger'])
    ->orderBy('date_reservation', 'desc')
    ->take(6)
    ->get();
    $payments = Reservation::with('voyage')
    ->orderBy('date_reservation', 'desc')
    ->take(5)
    ->get();
    $revenuMoyenParVoyageur = $totalVoyageurs > 0 ? $chiffreAffaires / $totalVoyageurs : 0;
    return response()
        ->view('Dashboard.index', compact('nombreReservations', 'chiffreAffaires', 'totalVoyageurs', 'revenuMoyenParVoyageur', 'reservations', 'payments','revenu', 'nombrePersonnes'))
        ->header('Cache-Control', 'no-store, no-cache, must-revalidate, post-check=0, pre-check=0')
        ->header('Pragma', 'no-cache')
        ->header('Expires', 'Fri, 01 Jan 1990 00:00:00 GMT');
})->middleware('auth:admin');
Route::get('/Vols', function () {
    $reservations = Reservation::with(['voyage', 'passenger'])
        ->whereHas('voyage') // Only get reservations that have a voyage
        ->whereHas('passenger') // Only get reservations that have a passenger
        ->orderBy('date_reservation', 'desc')
        ->get()
        ->filter(function ($item) {
            return is_object($item);
        });
    $airports = Airport::distinct()->pluck('city');
    return view('Dashboard.vols', compact('reservations', 'airports'));
})->middleware('auth:admin');
Route::get('ListeVoyageurs', function () {
    $reservations = Reservation::with(['voyage', 'passenger'])
    ->orderBy('date_reservation', 'desc')
    ->get();
    return view('Dashboard.Voyageurs', compact('reservations'));
})->middleware('auth:admin');

Route::delete('/reservations/{id}', [FlightController::class, 'destroy'])
    ->name('reservations.destroy')
    ->middleware('auth:admin');
Route::put('/reservation/{id}', [FlightController::class, 'update'])->name('reservation.update')->middleware('auth:admin');
Route::delete('/passanger/{id}', [FlightController::class, 'destroys'])->name('passanger.destroys')->middleware('auth:admin');
Route::put('/passanger/{id}', [FlightController::class, 'update_p'])->name('passanger.update_p')->middleware('auth:admin');
Route::get('/Modifer_supprimer',function(){
    $passenger = collect();
    return view('Dashboard.Modifer_suppri', compact('passenger'));
});
Route::get('/passanger', [FlightController::class, 'getPassanger'])->name('passenger.search')->middleware('auth:admin');