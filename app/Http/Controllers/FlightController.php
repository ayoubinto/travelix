<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Ville;
use App\Models\Airport;
use Illuminate\Support\Facades\DB;

class FlightController extends Controller
{
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
        $flights = [];
        $searchPerformed = false;
        $names = Airport::select('name')->distinct()->take(50)->get();
        $airports = Airport::select('city')->distinct()->get();

        $randomNumber = rand(1000, 10000);
        if ($request->has('departure_city')) {
            $searchPerformed = true;
            $departureCityId = $request->input('departure_city');
            $flights = Airport::where('city', $departureCityId)
                            ->get();
        }
        return view('Voyage_per', [
            'airports' => $airports,
            'names' => $names,
            'flights' => $flights,
            'searchPerformed' => $searchPerformed,
        ]);
    }
}
