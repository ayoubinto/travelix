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
use Illuminate\Support\Str; 
use Illuminate\Support\Facades\Hash;
class FlightController extends Controller
{
    private $nom_passengers = "";
    private $prenom_passengers = "";
    public function show($id){
        $reservation = Reservation::with(['passenger', 'voyage'])->findOrFail($id);
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
        // $this->$nom_passenger = $request->name;
        // $this->$prenom_passenger = $request->last_name;
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
        $prix_unaitre = $prix_double;
    
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
            'prix_unitaire' => $prix_unaitre,
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
    public function showFacture($id){
        $reservation = Reservation::with(['passenger', 'voyage'])->findOrFail($id);
        return view('Facture', compact('reservation'));
    }
    public function get_id_passenger(){
        $passenger = Passenger::where('nom_passeng', $this->$nom_passenger)
            ->where('prenom_passeng', $this->$prenom_passenger)
            ->first();
        if ($passenger) {
            return $passenger->id_passeng;
        } else {
            return null;
        }
    }
    public function stores(Request $request,$id){
        $reservation = Reservation::findOrFail($id);
    }
    public function updatePaiement(Request $request, $id){
        $request->validate([
            'type_paiement' => 'required|string',
        ]);

        $reservation = Reservation::findOrFail($id);
        // $reservation->save();
        $reservation->update([
            'type_paiement' => $request->type_paiement,
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Paiement effectué avec succès!'
        ]);
    }
    public function destroy($id){
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();
        return redirect()->back();
    }
    public function destroys($id){
        $passenger = Passenger::findOrFail($id);
        $passenger->delete();
        return redirect()->back();
    }
    public function update(Request $request, $id){
        $reservation = Reservation::findOrFail($id);

        // 2. Récupérer les données du formulaire
        $fullName = $request->input('fullname');
        $depart = $request->input('depart');
        $arrivee = $request->input('arrivee');
        $nombre_adultes = (int) $request->input('nombre_adultes');
        $nombre_enfants = (int) $request->input('nombre_enfants');
        $total_personnes = $nombre_adultes + $nombre_enfants;

        if ($total_personnes === 0) {
            return back()->with('error', 'Le nombre total de personnes doit être supérieur à 0.');
        }

        // 3. Récupérer le prix unitaire d'origine
        $prix_unitaire = $reservation->voyage->prix_unitaire 
            ?? ($reservation->voyage->prix / max(1, $reservation->nombre_adultes + $reservation->nombre_enfants));

        // 4. Cloner le passager actuel
        $oldPassenger = $reservation->passenger;
        $newPassenger = $oldPassenger->replicate();

        // Extraire nom et prénom
        $parts = explode(' ', trim($fullName), 2);
        $newPassenger->nom_passeng = $parts[0];
        $newPassenger->prenom_passeng = $parts[1] ?? '';

        // Générer un nouveau numéro de passeport unique
        $newPassenger->passport_number = $oldPassenger->passport_number . '_' . Str::random(4);

        // Copier ou créer le mot de passe
        $newPassenger->password = $oldPassenger->password ?? Hash::make('default123');

        $newPassenger->save();

        // 5. Cloner le voyage actuel
        $oldVoyage = $reservation->voyage;
        $newVoyage = $oldVoyage->replicate();
        $newVoyage->ville_depart = $depart;
        $newVoyage->ville_arrivee = $arrivee;
        $newVoyage->prix_unitaire = $prix_unitaire;
        $newVoyage->prix = $prix_unitaire * $total_personnes;
        $newVoyage->save();

        // 6. Mettre à jour la réservation avec les nouveaux IDs
        $reservation->id_passeng = $newPassenger->id_passeng;
        $reservation->id_voyagep = $newVoyage->id_voyagep;
        $reservation->nombre_adultes = $nombre_adultes;
        $reservation->nombre_enfants = $nombre_enfants;
        $reservation->save();
        $request->session()->regenerate();
        session()->flash('Update_success', true);
        return redirect()->back();
    }
    public function update_p(Request $request, $id){
        $passenger = Passenger::findOrFail($id);
        $fullName = $request->fullname;
        $parts = explode(' ', $fullName, 2);
        $passenger->nom_passeng = $parts[0];
        $passenger->prenom_passeng = $parts[1] ?? '';
        $passenger->nation_passeng = $request->input_national;
        $passenger->age_passeng = $request->input_age;
        $passenger->email_passeng = $request->input_email;
        $passenger->phone_passeng = $request->input_tele;
        $passenger->postal_code = $request->input_codepostal;
        $passenger->passport_number = $request->input_code_passp;
        $passenger->save();
        return redirect()->back();
    }
    public function getPassanger(Request $request){
        $id = $request->input('id_passenger');
        $passenger = Passenger::where('id_passeng', $id)->get();
        
        if($passenger->isEmpty()) {
            return back()->with('error', 'Passenger not found');
        }
    
        return view('Dashboard.Modifer_suppri', compact('passenger'));
    }
}
