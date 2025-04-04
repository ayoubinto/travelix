<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ville;

class VilleController extends Controller
{
    public function index()
    {
        $villes = Ville::all(); // Récupère toutes les lignes de la table Ville
        return view('welcome', compact('villes'));
    }
}
