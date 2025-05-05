<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;


class Dashboard extends Controller
{
    public function index(){
        $nombreReservations = Reservation::count();
        return view('dashboard', compact('nombreReservations'));
    }
}