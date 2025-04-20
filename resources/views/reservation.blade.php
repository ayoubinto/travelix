@extends('Layout.master')
@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
@php
    $nombretotal = (isset($data['adults']) ? $data['adults'] : 1) + (isset($data['children']) ? $data['children'] : 0);
@endphp
    <div class="home_slider_container" style="position: relative;">
            <div class="background_voyage_org" style="background-image:url(images/0a5136f59e.jpg);padding-top: 25%;opacity:0.5"></div>
            <div class="home_content">
                <div class="home_title">Réservation de VOL</div>
            </div>  
    </div>
    <div class="container_resrvation" id="container_resrvation" >
        <div class="Detais_Res" id="Detais_Res">
            <h1 class="heading2" style="margin-bottom:0px">Détails de la réservation</h1>
            <div class="flight-card" style="box-shadow:none;  background-position-y: 274px;background-position-x: 5px;background-image:url(images/background_bookinglfight.jpg);background-size: cover;border-radius: 0;">
                <div class="flight-header"> 
                    <div class="flight-time" style="margin-top: 5%;margin-left: 4.5%;width: 100%;">
                        <div class="time-col">               
                            <strong class="times" style="color: white;">{{ \Carbon\Carbon::createFromFormat('H:i', trim($data['departure_time']))->format('H\hi\m\i\n') }}</strong>
                            <p class="city" style="color: white;">{{ $data['iata'] ?? 'N/A' }}</p>
                        </div>
                        <span class="Depart" style="color: white;">De</span>
                        <div class="duration">
                            <h5 class="Rendez" style="color: white;">{{ $data['icao'] ?? 'N/A' }}</h5>
                            <img src="images/route-plan.png" alt="" class="route_image">
                            <h6 class="Stopping" style="color: white;">1 Arrêt</h6>                              
                        </div>
                        <span class="Depart" style="color: white;">À</span>
                        <div class="time-col">
                            <strong class="times" style="color: white;">{{ \Carbon\Carbon::createFromFormat('H:i', trim($data['arrival_time']))->format('H\h i\m\i\n') }}</strong>
                            <p class="city" style="color: white;">{{ $data['icao'] }}</p>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <div class="flight-card2">
            <div class="d-flex justify-content-around mb-32">
                <div class="flight-departure text-center">
                        <p class="paragraph ph">Départ</p>
                        <p class="color-black lead">{{ $data['departure_date']}}</p>
                </div>
                <div class="vr-line"></div>
                    <div class="flight-departure text-center">
                        <p class="paragraph ph">Arrivée</p>
                        <p class="color-black lead">{{ $data['return_date'] ?: 'N/A' }}</p>
                    </div>
                </div>
            </div>
            <hr class="bg-medium-gray mb-32">
            <div class="text text-center">
                <hr style="border: 1px solid black;width:80%;margin: 29px auto;">
                <p class="paragraph">Tpm Line</p>
                <p class="paragraph">Exploité par {{ $data['flight_name'] }}</p>
                <p class="paragraph">Économie | Vol FK234 | Aircraft BOEING 777-90</p>
                <p class="paragraph">Prix: {{ $data['price'] }} MAD</p>
                <p class="paragraph">Adulte(s): {{ $data['adults']}} </p>
                <p class="paragraph">Enfants: {{ $data['children']}}</p>
                <p class="paragraph">Montant total : {{ $data['price'] * $nombretotal}} MAD</p>
                <hr style="border: 1px solid black;width:80%;margin: 29px auto;">
                <p class="paragraph"><span style="color:red">* </span>Adulte(s) : 25 kg de bagages gratuits</p>
                <h1 style="padding: 10px;"></h1>
            </div>
        </div>
        <div class="Declanche" id="Declanche">
            <div class="Formule_re">
                <form action="" id="form1">
                    <h1 class="heading_form">Entrez vos coordonnées</h1>
                    <div class="Infor_1">
                        <select name="genre" class="dropdownlist_voyage" id="genre">
                            <option selected value="0">Genre</option>
                            <option value="1">Homme</option>
                            <option value="2">Femme</option>
                        </select>
                        <input type="text" name="nom" id="nom" class="input_voyage" placeholder="Nom" required>
                        <input type="text" name="prenom" id="prenom" class="input_voyage" placeholder="Prénom" required>
                    </div>
                    <div class="Infor_2">
                        <div class="div_for_input">
                            <input type="text" name="age" id="age" class="input_voyage" placeholder="Age" required>
                            <select name="nationalite" id="nationalite" class="dropdownlist_voyage">
                                @foreach ($pays as $nation)
                                    <option value="{{ $nation->id }}">{{ $nation->nationalite_fr }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="div_for_input">
                            <input type="email" id="email" class="input_voyage" placeholder="Email" required>
                            <input type="text" id="telep" class="input_voyage" placeholder="Votre téléphone" required>
                        </div>
                        <div class="div_for_input">
                            <input type="text" id="postal" class="input_voyage" placeholder="code postale" required>
                            <input type="text" id="passeport" class="input_voyage" placeholder="Numéro de passeport" required>
                        </div>
                    </div>
                </form>
            </div>
            <div class="detail-form term_conditions mb-32">
                <h4 class="black p-0 mb-8">Sauvegardez vos informations !</h4>
                <div class="row">
                    <div class="cols">
                        <p class="dark-gray mb-24 fw-400">Utilisez vos coordonnées pour créer un compte et accélérer vos futures réservations. (Nous ne conserverons pas vos informations de paiement.)</p>
                        <div class="filter-checkbox mb-24">
                            <input type="checkbox" id="save" class="input">
                            <label for="save" class="dark-gray fw-4001">Enregistrez mes coordonnées afin que je puisse réserver plus rapidement la prochaine fois.</label>
                        </div>
                        <p class="dark-gray fw-4002">En vous connectant ou en créant un compte, vous acceptez nos <a href="privacy-policy.html" class="color-primary"> Conditions générales</a></p>
                        <div class="wizard-form-error"></div>
                    </div>
                </div>
            </div>
            <div>
                <button type="submit" class="book-button" id="Reser">RÉSERVEZ MAINTENANT</button>
            </div>
        </div>
        @csrf
        
    </div>
    
    <form action="{{ route('reservation.handle') }}" method="post" id="reservationForm">
        @csrf
        <div class="Div_for_validate" id="Div_for_validate"  style="display : none">
        <input type="hidden" name="action" value="store">
            <div class="heading4">
                <h1>VÉRIFIEZ LES IN<span>FORMATIONS</span></h1>
            </div>
            <div class="information">
                <div class="Info">
                    <div class="div_heading">
                        <h1>Informations personnelles</h1>
                    </div>
                    <div class="alldivers">
                        <div class="divers">
                            <label class="Label_v">Nom</label>
                            <input type="text" class="input_voyage paymenet" id="name" name="name" >
                        </div>
                        <div class="divers">
                            <label class="Label_v">Prénom</label>
                            <input type="text" class="input_voyage paymenet" id="las_name" name="last_name" >
                        </div>
                        <div class="divers">
                            <label class="Label_v">Nationalité</label>
                            <input type="text" class="input_voyage paymenet" id="nationality" name="national" >
                        </div>
                        <div class="divers">
                            <label class="Label_v">Age</label>
                            <input type="text" class="input_voyage paymenet" id="year" name="age" >
                        </div>
                        <div class="divers">
                            <label class="Label_v">Email</label>
                            <input type="text" class="input_voyage paymenet" id="mail" name="email" >
                        </div>
                        <div class="divers">
                            <label class="Label_v">Téléphone</label>
                            <input type="text" class="input_voyage paymenet" id="tele" name="tele" >
                        </div>
                        <div class="divers">
                            <label class="Label_v">Code Postal</label>
                            <input type="text" class="input_voyage paymenet" id="pos" name="postal" >
                        </div>
                        <div class="divers">
                            <label class="Label_v">Numéro de passeport</label>
                            <input type="text" class="input_voyage paymenet" id="pass" name="passeport" >
                        </div>
                    </div>
                </div>
                <div class="Info vols">
                    <div class="div_heading">
                        <h1>Informations de vol</h1>
                    </div>
                    <div class="alldivers">
                        <div class="divers">
                            <label class="Label_validate">De</label>
                            <input type="text" class="input_voyage paymenet payment_v" value="{{ $data['departure_city'] ?? 'N/A' }}"  name="depart" readonly>
                        </div>
                        <div class="divers">
                            <label class="Label_validate">À</label>
                            <input type="text" class="input_voyage paymenet payment_v"  value="{{ $data['arrival_city'] ?: 'N/A' }}" name="arrive" readonly>
                        </div>
                        <div class="divers">
                            <label class="Label_validate">Départ</label>
                            <input type="date" class="input_voyage paymenet payment_v" value="{{ $data['departure_date'] ?? 'N/A' }}" name="ladate_depar" readonly>
                        </div>
                        <div class="divers">
                            <label class="Label_validate">Arrivée</label>
                            <input type="date" class="input_voyage paymenet payment_v"  value="{{ $data['return_date'] ?? 'N/A' }}" name="ladate_arrive" readonly>
                        </div>
                        <div class="divers">
                            <label class="Label_validate">Le temps de départ</label>
                            <input type="text" class="input_voyage paymenet payment_v" readonly value="{{ isset($data['departure_time']) ? \Carbon\Carbon::createFromFormat('H:i', trim($data['departure_time']))->format('H\hi\m\i\n') : 'N/A' }}" name="depart_time">
                        </div>
                        <div class="divers">
                            <label class="Label_validate">Le temps de arrivée</label>
                            <input type="text" class="input_voyage paymenet payment_v"  readonly value="{{ isset($data['arrival_time']) ? \Carbon\Carbon::createFromFormat('H:i', trim($data['arrival_time']))->format('H\h i\m\i\n') : 'N/A' }}" name="arrive_time">
                        </div>
                        <div class="divers">
                            <label class="Label_validate">Durée</label>
                            <input type="text" class="input_voyage paymenet payment_v" value="{{ $data['duration'] ?? 'N/A' }}" name="dureé" readonly>
                        </div>
                        <div class="divers">
                            <label class="Label_validate">Nom de l'aéroport</label>
                            <input type="text" class="input_voyage paymenet payment_v" readonly value="{{ $data['flight_name'] ?? 'N/A' }}" name="nom_aeroport">
                        </div>
                        <div class="divers">
                            <label class="Label_validate">Nombre d'adultes</label>
                            <input type="number" class="input_voyage paymenet payment_v" value="{{ $data['adults'] ?? 1 }}" name="adulte">
                        </div>
                        <div class="divers">
                            <label class="Label_validate">Nombre d'enfants</label>
                            <input type="number" class="input_voyage paymenet payment_v" value="{{ $data['children'] ?? 0 }}" name="enfant">
                        </div>
                        <div class="divers">
                            <label class="Label_validate">Prix</label>
                            <input type="text" class="input_voyage paymenet payment_v" value="{{ ($data['price'] ?? 0) * (($data['adults'] ?? 1) + ($data['children'] ?? 0)) }} MAD" readonly name="prix">
                        </div>   
                        <div class="divers">
                            <label class="Label_validate">Type de voyage</label>
                            <input type="text" class="input_voyage paymenet payment_v" value="Voyage Personelle" readonly name="type_voyage">
                        </div>   
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="book-button btn_validate" id="Valider" style="display:none"><i class="fa-regular fa-circle-check"></i> Confirmer</button>
    </form>
    <script>
        document.getElementById('Reser').addEventListener('click', function() {
            // window.location.href = '/home';
            document.getElementById('container_resrvation').style.display = 'none';
            document.getElementById('Div_for_validate').style.display = 'block';
            document.getElementById('Valider').style.display = 'block';
            let nom = document.getElementById('nom').value;
            let prenom = document.getElementById('prenom').value;
            let age = document.getElementById('age').value;
            let nationaliteSelect = document.getElementById('nationalite');
            let nationaliteNom = nationaliteSelect.options[nationaliteSelect.selectedIndex].text;
            let email = document.getElementById('email').value;
            let telep = document.getElementById('telep').value;
            let postal = document.getElementById('postal').value;
            let passeport = document.getElementById('passeport').value;
            document.getElementById('name').value = nom;
            document.getElementById('las_name').value = prenom;
            document.getElementById('year').value = age;
            document.getElementById('mail').value = email;
            document.getElementById('tele').value = telep;
            document.getElementById('pos').value = postal;
            document.getElementById('pass').value = passeport;
            document.getElementById('nationality').value = nationaliteNom;
        });
        document.getElementById('Valider').addEventListener('click', function() {
            e.preventDefault();
            document.querySelector('reservationForm').submit();
        });
    </script>
@endsection