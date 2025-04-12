<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ville;
use App\Models\Airport;

class VilleController extends Controller
{
    public function index()
    {
        $airports = Airport::select('id','city')->distinct()->get();
        return view('welcome', compact('airports'));
    }
}
