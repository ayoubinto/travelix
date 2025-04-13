@extends('Layout.master')
@section('content')
    <div class="home_slider_container" style="position: relative;">
            <div class="background_voyage_org" style="background-image:url(images/0a5136f59e.jpg);padding-top: 25%;opacity:0.5"></div>
            <div class="home_content">
                <div class="home_title">Réservation de VOL</div>
            </div>  
    </div>
    <div class="container_resrvation">
        <div class="Detais_Res">
            <h1 class="heading2" style="margin-bottom:0px">Détails de la réservation</h1>
            <div class="flight-card" style="background-color:transparent;box-shadow:none;">
                <div class="flight-header"> 
                    <div class="flight-time" style="margin-top: 5%;margin-left: 5%">
                        <div class="time-col">
                            <strong class="times">{{ $data['departure_time'] }}</strong>
                            <p class="city">{{ $data['iata'] }}</p>
                        </div>
                        <span class="Depart">De</span>
                        <div class="duration">
                            <h5 class="Rendez">{{ $data['duration'] }}</h5>
                            <img src="images/route-plan.png" alt="" class="route_image">
                            <h6 class="Stopping">1 Arrêt</h6>                              
                        </div>
                        <span class="Depart">À</span>
                        <div class="time-col">
                            <strong class="times">{{ $data['arrival_time'] }}</strong>
                            <p class="city">{{ $data['icao'] }}</p>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <div class="flight-card2">
            <div class="d-flex justify-content-around mb-32">
                <div class="flight-departure text-center">
                        <p class="paragraph ph">Départ</p>
                        <p class="color-black lead">14 Aug, 2023</p>
                </div>
                <div class="vr-line"></div>
                    <div class="flight-departure text-center">
                        <p class="paragraph ph">Arrivée</p>
                        <p class="color-black lead">14 Aug, 2023</p>
                    </div>
                </div>
            </div>
            <hr class="bg-medium-gray mb-32">
            <div class="text text-center">
                <p class="paragraph">Tpm Line</p>
                <p class="paragraph">Exploité par {{ $data['flight_name'] }}</p>
                <p class="paragraph">Économie | Vol FK234 | Aircraft BOEING 777-90</p>
                <p class="paragraph">Adulte(s): Bagages de 25 kg gratuits</p>
                <h1 style="padding: 10px;"></h1>
            </div>
        </div>
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
                        <input type="email" class="input_voyage" placeholder="Email" required>
                        <select class="dropdownlist_voyage">
                            <option selected value="0">Nationalité</option>
                            <option value="1">Marrocain</option>
                            <option value="2">No JS</option>
                            <option value="3">Nice!</option>
                        </select>
                    </div>
                    <div class="div_for_input">
                        <input type="text" class="input_voyage" placeholder="Votre numéro" required>
                        <input type="date" class="input_voyage" placeholder="Date de naissance" required>
                    </div>
                    <div class="div_for_input">
                        <input type="text" class="input_voyage" placeholder="Numéro de passeport" required>
                        <input type="text" class="input_voyage" placeholder="Numero de RIB" required>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection