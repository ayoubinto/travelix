@extends('Layout.master')
@section('content')
@php
    $nombretotal = $data['adults'] + $data['children'];
@endphp
    <div class="home_slider_container" style="position: relative;">
            <div class="background_voyage_org" style="background-image:url(images/0a5136f59e.jpg);padding-top: 25%;opacity:0.5"></div>
            <div class="home_content">
                <div class="home_title">Réservation de VOL</div>
            </div>  
    </div>
    <div class="container_resrvation">
        <div class="Detais_Res">
            <h1 class="heading2" style="margin-bottom:0px">Détails de la réservation</h1>
            <div class="flight-card" style="box-shadow:none;  background-position-y: 274px;background-position-x: 5px;background-image:url(images/background_bookinglfight.jpg);background-size: cover;border-radius: 0;">
                <div class="flight-header"> 
                    <div class="flight-time" style="margin-top: 5%;margin-left: 4.5%;width: 100%;">
                        <div class="time-col">               
                            <strong class="times" style="color: white;">{{ \Carbon\Carbon::createFromFormat('H:i', trim($data['departure_time']))->format('H\hi\m\i\n') }}</strong>
                            <p class="city" style="color: white;">{{ $data['iata'] }}</p>
                        </div>
                        <span class="Depart" style="color: white;">De</span>
                        <div class="duration">
                            <h5 class="Rendez" style="color: white;">{{ $data['duration'] }}</h5>
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
        <div class="Declanche">
            <div class="Formule_re">
                <form action="">
                    <h1 class="heading_form">Entrez vos coordonnées</h1>
                    <div class="Infor_1">
                        <select class="dropdownlist_voyage">
                            <option selected value="0">Genre</option>
                            <option value="1">Homme</option>
                            <option value="2">Femme</option>
                        </select>
                        <input type="text" class="input_voyage" placeholder="Nom" required>
                        <input type="text" class="input_voyage" placeholder="Prénom" required>
                    </div>
                    <div class="Infor_2">
                        <div class="div_for_input">
                            <input type="text" class="input_voyage" placeholder="Age" required>
                            <select class="dropdownlist_voyage">
                                @foreach ($pays as $nation)
                                    <option value="{{ $nation->id }}">{{ $nation->nationalite_fr }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="div_for_input">
                            <input type="email" class="input_voyage" placeholder="Email" required>
                            <input type="text" class="input_voyage" placeholder="Votre téléphone" required>
                        </div>
                        <div class="div_for_input">
                            <input type="text" class="input_voyage" placeholder="code postale" required>
                            <input type="text" class="input_voyage" placeholder="Numéro de passeport" required>
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
                <button type="submit" class="book-button">RÉSERVEZ MAINTENANT</button>
            </div>
        </div>
    </div>
@endsection