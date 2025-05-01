<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airport;
use App\Models\Nationality;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class VilleController extends Controller
{
    public function index()
    {
        $airports = Airport::select('id','city')->distinct()->get();
        return view('welcome', compact('airports'));
    }
    public function shorform(){
        $airports = Airport::select('id','city')->distinct()->get();
        $loginSuccess = session('login_success'); // récupère le flash
        $isAuthenticated = Auth::guard('passenger')->check();
        return view('welcome', compact('airports', 'loginSuccess'));
    }
}
