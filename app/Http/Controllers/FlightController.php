<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Nationality;
use App\Models\Airport;
use App\Models\Voyage_p;
use App\Models\Passenger;
use App\Models\Reservation;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Controllers\formatDate;
use App\Http\Controllers\formatTime;
use Illuminate\Support\Facades\Validator;

class FlightController extends Controller
{

    public function show($id){

        $reservation = Reservation::with(['passenger', 'voyage'])->findOrFail($id);

        // Retourner la vue avec la réservation
        return view('Facture', compact('reservation'));
    }
    public function handleReservation(Request $request){
        switch ($request->input('action')) {
            case 'store':
                return $this->store($request);

            case 'reserve':
                return $this->reserve($request);

            default:
                return redirect()->back()->with('error', 'Action inconnue.');
        }
    }
    private function formatDate($date){
        return \Carbon\Carbon::parse($date)->format('Y-m-d');
    }
    private function formatTime($time){
        // Retirer les caractères 'h' et 'min' et ajouter les zéros si nécessaire
        return preg_replace('/(\d{1,2})h\s*(\d{1,2})min/', '$1:$2:00', $time);
    }
    public function store(Request $request){
        // Check if passenger with this passport already exists
        $existingPassenger = Passenger::where('passport_number', $request->passeport)->first();
    
        if ($existingPassenger) {
            $passenger = $existingPassenger;
        } else {
            // Create new passenger if doesn't exist
            $passenger = Passenger::create([
                'nom_passeng' => strip_tags($request->name),
                'prenom_passeng' => strip_tags($request->last_name),
                'nation_passeng' => strip_tags($request->national),
                'age_passeng' => $request->age,
                'email_passeng' => strip_tags($request->email),
                'phone_passeng' => strip_tags($request->tele),
                'postal_code' => strip_tags($request->postal),
                'passport_number' => strip_tags($request->passeport),
            ]);
        }
    
        $date_depart = $this->formatDate($request->ladate_depar);
        $date_arrivee = $this->formatDate($request->ladate_arrive);
        $heure_depart = $this->formatTime($request->depart_time);
        $heure_arrivee = $this->formatTime($request->arrive_time);
        
        $prix_numeric = str_replace(' MAD', '', $request->prix);
        $prix_double = floatval($prix_numeric);
    
        // Create voyage
        $voyage = Voyage_p::create([
            'ville_depart' => strip_tags($request->depart),
            'ville_arrivee' => strip_tags($request->arrive),
            'date_depart' => $date_depart,
            'date_arrivee' => $date_arrivee,
            'heure_depart' => $heure_depart,
            'heure_arrivee' => $heure_arrivee,
            'duree' => strip_tags($request->dureé),
            'nom_aeroport' => strip_tags($request->nom_aeroport),
            'prix' => $prix_double,
            'type_voyagep' => $request->type_voyage,
        ]);
    
        // Create reservation
        $reservation = Reservation::create([
            'id_passeng' => $passenger->id_passeng,
            'id_voyagep' => $voyage->id_voyagep,
            'nombre_adultes' => $request->adulte,
            'nombre_enfants' => $request->enfant,
            'date_reservation' => now(),
        ]);
    
        // Redirect to the facture page with the reservation ID
        return redirect()->route('facture.show', ['id' => $reservation->id_reservation]);
    }

    public function reserve(Request $request){
        $pays = Nationality::select('id','nationalite_fr')->orderBy('nationalite_fr', 'asc')->get();
        
        // Set default values for all required fields
        $defaultData = [
            'adults' => 1,
            'children' => 0,
            'departure_time' => '00:00',
            'arrival_time' => '00:00',
            'iata' => '',
            'icao' => '',
            'duration' => '0h 0m',
            'departure_date' => now()->format('Y-m-d'),
            'return_date' => null,
            'flight_name' => '',
            'price' => 0,
            'departure_city' => '',
            'arrival_city' => ''
        ];
    
        // Merge request data with defaults
        $data = array_merge($defaultData, $request->all());
    
        return view('reservation',[
            'data' => $data,
            'pays' => $pays,
        ]);
    }
    public function showForm(){
        $names = Airport::select('name')->distinct()->take(50)->get();
        $airports = Airport::select('city')->distinct()->get();
        return view('Voyage_per', [
            'names' => $names,
            'airports' => $airports,
            'flights' => [],
            'searchPerformed' => false,
        ]);
    }
    public function handleForm(Request $request){
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
        $departure_date = $request->input('departure_date');
        $return_date = $request->input('return_date');
        $arrival_city = $request->input('arrival_city');
        $adults = $request->input('adults');
        $children = $request->input('children');
        $formattedDate = Carbon::createFromFormat('Y-m-d', $departure_date)->format('l d F');
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
            'formattedDate' => $formattedDate,
        ]);
    }
    public function showFacture($id)
{
    $reservation = Reservation::with(['passenger', 'voyage'])->findOrFail($id);
    return view('Facture', compact('reservation'));
}
}
