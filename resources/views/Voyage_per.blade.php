@extends('Layout.master')
@section('content')
@php
    use Carbon\Carbon;
@endphp
<div class="home_slider_container" style="position: relative;">
        <div class="background_voyage_org" style="background-image:url(images/123.jpg);padding-top: 25%;opacity:0.5"></div>
        <div class="home_content">
			<div class="home_title">VOYAGES Personnelle</div>
		</div>  
</div>
<div class="container_voyage">
  <div class="flight-search-container">
      <h1 class="heading1">RECHERCHER DES VOLS</h1>
      <form action="{{ route('voyagepers.submit') }}" method="POST" id="flightForm">
          @csrf
          <div class="form-group">
              <div class="form-row">
                  <div class="form-field">
                      <label>De</label>
                      <select name="departure_city" id="departure_city" class="dropdownlist_voyage">
                          @foreach($airports as $airport)
                              <option value="{{ $airport-> city  }}">{{ $airport->city }}</option>
                          @endforeach
                      </select>   
                  </div>  
                  <div class="form-field">
                      <label>À</label>
                      <select name="arrival_city" id="arrival_city" class="dropdownlist_voyage">
                          @foreach($airports as $airport)
                              <option value="{{ $airport->city }}">{{ $airport->city }}</option>
                          @endforeach
                      </select>  
                  </div>
                  <div class="form-field">
                      <label>Départ</label>
                      <input type="date" name="departure_date" id="departing-date">
                  </div>  
                  <div class="form-field">
                      <label>De retour</label>
                      <input type="date" name="return_date" id="returning-date">
                  </div>
                  <div class="form-field">
                      <label>Adultes</label>
                      <select name="adults" id="adults" class="dropdownlist_voyage">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                      </select>
                  </div>
                  <div class="form-field">
                      <label>Enfants</label>
                      <select name="children" id="children" class="dropdownlist_voyage">
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                      </select>
                  </div>
              </div>
          </div>
          <div class="for_button">
              <button type="submit" class="search-button" id="showButton">AFFICHER LES VOLS</button>
          </div>
      </form>
  </div>
</div>
<div class="list_vols" id="list_vols"> 
  <div class="forblock" id="forblock">
    <div class="Filtrer_recherche">
        <h1 class="heading2">Filtrer la recherche</h1>
        <h1 class="heading">Aéroports</h1>
        @foreach($flights as $flight)
          <div class="checkbox_airlens">
              <input type="checkbox" 
                  id="airport_{{$flight->id}}" 
                  class="input_ch" 
                  value="{{$flight->name}}">
              <label class="label_ch" for="airport_{{$flight->id}}">
                  {{ $flight['name'] }}
              </label>
          </div>
        @endforeach
    </div>
    <div class="list_volss">
    @if(isset($flights) && count($flights) > 0)
        @foreach($flights as $flight)
            @php
                $randomTime = Carbon::now()->addHours(rand(1, 12));
                $randomTime1 = Carbon::now()->addHours(rand(13, 24)); 
                $interval = $randomTime->diff($randomTime1);
                $randomNumbers = rand(5000, 15000);
                $randumNumberArret = rand(1, 2);
                $hours = $interval->h;
                $minutes = $interval->i;
            @endphp 
            <div class="flight-card">
                <div class="flight-header"> 
                    <div class="airline-info">
                      <img src="images/icon-1.png" alt="Feel Logo" class="airline-logo">
                      <div>
                        <h2>{{$flight->name}}</h2>
                        <p>{{$flight->tz}}</p>
                      </div>
                    </div>
                    <div class="flight-time">
                        <div class="time-col">
                          <strong class="times">{{ $randomTime->format('H') }}h{{ $randomTime->format('i') }}min</strong>
                          <p class="city">{{$flight->iata}}</p>
                        </div>
                        <span class="Depart">De</span>
                        <div class="duration">
                            <h5 class="Rendez">{{ $interval->h }}h {{ $interval->i }}m</h5>
                            <img src="images/route-plan.png" alt="" class="route_image">
                            <h6 class="Stopping">{{$randumNumberArret}} Arrêt</h6>                              
                        </div>
                        <span class="Depart">À</span>
                        <div class="time-col">
                            <strong class="times">{{ $randomTime1->format('H') }}h{{ $randomTime1->format('i') }}min</strong>
                            <p class="city">{{$flight->icao}}</p>
                        </div>
                    </div>
                    <div class="price">
                        <strong class="price">{{ $randomNumbers }}MAD</strong>
                    </div>
                </div>
                <hr>
                <div class="flight-footer">
                    @if (isset($formattedDate))
                        <p class="date">{{ $formattedDate }}</p>
                    @endif
                    <div class="actions">
                        <a href="#" class="flight-detail">Détails du vol</a>
                         <!-- FORMULAIRE DE RÉSERVATION -->
                    <form action="{{ route('reservation.handle') }}" method="POST">
                        @csrf
                        <!-- Valeurs du formulaire principal -->
                        <input type="hidden" name="action" value="reserve">
                        <input type="hidden" name="departure_city" value="{{ request('departure_city') }}">
                        <input type="hidden" name="arrival_city" value="{{ request('arrival_city') }}">
                        <input type="hidden" name="departure_date" value="{{ request('departure_date') }}">
                        <input type="hidden" name="return_date" value="{{ request('return_date') }}">
                        <input type="hidden" name="adults" value="{{ request('adults') }}">
                        <input type="hidden" name="children" value="{{ request('children') }}">

                        <!-- Infos du vol sélectionné -->
                        <input type="hidden" name="flight_name" value="{{ $flight->name }}">
                        <input type="hidden" name="tz" value="{{ $flight->tz }}">
                        <input type="hidden" name="departure_time" value="{{ $randomTime->format('H:i') }}">
                        <input type="hidden" name="iata" value="{{ $flight->iata }}">
                        <input type="hidden" name="duration" value="{{ $interval->h }}h {{ $interval->i }}m">
                        <input type="hidden" name="stops" value="{{ $randumNumberArret }}">
                        <input type="hidden" name="arrival_time" value="{{ $randomTime1->format('H:i') }}">
                        <input type="hidden" name="icao" value="{{ $flight->icao }}">
                        <input type="hidden" name="price" value="{{ $randomNumbers }}">
                        <input type="hidden" name="formattedDate" value="{{ $formattedDate }}">

                        <button type="submit" class="book-button">RÉSERVEZ MAINTENANT</button>
                    </form>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <!-- <div class="no-flights">
            <div class="animation">
                <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
                <dotlottie-player src="https://lottie.host/ce2dfad5-b01e-4f30-bc77-863bf2cac530/OtX6XBHHN5.lottie" background="transparent" speed="1" style="width: 300px; height: 300px" autoplay></dotlottie-player>
                <h1 class="heading3">Aucun vol trouvé</h1>
            </div>
        </div> -->
    </div>
    @endif
    </div>
</div>
@endsection