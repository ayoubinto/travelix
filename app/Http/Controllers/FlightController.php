<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FlightController extends Controller
{
    public function getFlights()
    {
        // Récupérer la clé API depuis .env
        $apiKey = env('AVIATIONSTACK_API_KEY');

        // Faire la requête à l'API de AviationStack
        $response = Http::get('https://api.aviationstack.com/v1/flights', [
            'access_key' => $apiKey
        ]);
        

        // Vérifier si la requête est réussie
        if ($response->successful()) {
            // Récupérer les données de vol
            $flights = $response->json()['data'];

            // Afficher ou retourner les résultats
            return view('flight', compact('flights'));
        } else {
            // En cas d'erreur
            return response()->json(['error' => 'Erreur lors de la récupération des données.']);
        }
    }
}
