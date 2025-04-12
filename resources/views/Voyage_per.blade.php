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
      <form action="{{ route('voyagepers.submit') }}" method="POST">
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
              <button type="submit" class="search-button">AFFICHER LES VOLS</button>
          </div>
      </form>
  </div>
</div>
<div class="list_vols"> 
  <div class="forblock">
    <div class="Filtrer_recherche">
        <h1 class="heading2">Filtrer la recherche</h1>
        <h1 class="heading">Aéroports</h1>
        @foreach($names as $name)
          <div class="checkbox_airlens">
              <input type="checkbox" 
                  id="airport_{{ $name['id'] }}" 
                  class="input_ch" 
                  value="{{ $name['id'] }}">
              <label class="label_ch" for="airport_{{ $name['id'] }}">
                  {{ $name['name'] }}
              </label>
          </div>
        @endforeach
        <h5 class="heading5" style="height: 25px;"></h1>
    </div>
    <div class="list_volss">
    @if(isset($flights) && count($flights) > 0)
        @foreach($flights as $flight)
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
                        @php
                            $randomTime = Carbon::now()->addHours(rand(1, 12));
                            $randomTime1 = Carbon::now()->addMinutes(rand(13, 24)); 
                            $interval = $randomTime->diff($randomTime1);
                            $randomNumbers = rand(5000, 15000);
                            $randumNumberArret = rand(1, 2);
                        @endphp 
                          <strong class="times">{{ $randomTime->format('H:i') }}h</strong>
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
                            <strong class="times">{{ $randomTime1->format('H:i') }}h</strong>
                            <p class="city">{{$flight->icao}}</p>
                        </div>
                    </div>
                    <div class="price">
                        <strong class="price">{{ $randomNumbers }}MAD</strong>
                    </div>
                </div>
                <hr>
                <div class="flight-footer">
                    <p class="date">Monday 14 August</p>
                    <div class="actions">
                        <a href="#" class="flight-detail">Détails du vol</a>
                        <button class="book-button">RÉSERVEZ MAINTENANT</button>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="no-flights">
            <p>Aucun vol trouvé pour votre recherche.</p>
        </div>
    </div>
    @endif
    </div>
</div>
@endsection