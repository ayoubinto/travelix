<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Ville;
use App\Models\Airport;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;




class FlightController extends Controller
{
    public function showFlightDetails()
    {
        // Générer un temps aléatoire dans un format spécifique
        $randomTime = Carbon::now()->addMinutes(rand(1, 10080)); 
        $randomTime1 = Carbon::now()->addMinutes(rand(10081, 43200)); 
        $randomNumber = rand(1, 1000); // Ajoute un nombre aléatoire de minutes (jusqu'à 7 jours)
        // Passer le temps aléatoire à la vue
        return view('Voyage_per',[
            'randomTime' => $randomTime,
            'randomNumber' => $randomNumber,
            'randomTime1' => $randomTime1,
        ]);
    }
    public function showForm()
    {
        $names = Airport::select('name')->distinct()->take(50)->get();
        $airports = Airport::select('city')->distinct()->get();
        return view('Voyage_per', [
            'names' => $names,
            'airports' => $airports,
            'flights' => [],
            'searchPerformed' => false,
        ]);
    }
    public function handleForm(Request $request)
    {
        $validate = $request->validate([
            'departure_city' => 'required',
            'arrival_city' => 'required',
            'departure_date' => 'required|date|after_or_equal:today',
            'return_date' => 'nullable|date|after:departure_date',
            'adults' => 'required|integer|min:1',
            'children' => 'required|integer|min:0',
        ]);
        // $airport = Airport::select('city')->distinct()->take(50)->get();
        $flights = [];
        $searchPerformed = false;
        $names = Airport::select('name')->distinct()->take(50)->get();
        $airports = Airport::select('city')->distinct()->get();

        $randomNumber = rand(1000, 10000);
        // $query = Airport::query();
        if ($request->has('departure_city')) {
            $searchPerformed = true;
            $departureCityId = $request->input('departure_city');
            $flights = Airport::where('city', $departureCityId)
                            ->get();
        }
        // $flights = $query->get();
        return view('Voyage_per', [
            'airports' => $airports,
            'names' => $names,
            'flights' => $flights,
            'searchPerformed' => $searchPerformed,
            // 'randomTime' => $randomTime,
            // 'randomNumber' => $randomNumber,
            // 'randomTime1' => $randomTime1,
        ]);
    }
    // public function Rechercher(Request $request)
    // {
    //     $city = $request->input('ville');
    //     $airports = Airport::where('city', 'like', "%$city%")
    //                     ->get();
    //     return view('Voyage_per', compact('airports'));
    // } 
}
