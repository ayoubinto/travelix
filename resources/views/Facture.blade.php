@extends('Layout.master')
@section('content')
<div class="home_slider_container" style="position: relative">
    <div class="background_voyage_org" style="background-image:url({{ asset('images/0a5136f59e.jpg') }});padding-top: 25%;opacity:0.5"></div>
    <div class="home_content">
        <div class="home_title">Facture</div>
    </div>  
</div>
<div class="Div_for_paiement" id="Div_for_paiement">
    <!-- <form action="" class="form_paiement"> -->
        <div class="div_heading_paiement">
            <h1 class="heading3">PAIEMENT</h1>
        </div>
        <div class="div_type_paiment">
            <div class="visa">
                <div class="visa_img">
                    <img src="{{ asset('images/visa-mastercard-logos-wh429a8o742pgm38.png') }}" class="imgvisa" alt="VISA MASTER CARD">
                </div>
                <div class="visa_input">
                    <input type="radio" value="visa" id="visa" class="input"> Payez 340,00$ avec carte de crédit</input>
                </div>
            </div>
            <div class="visa">
                <div class="visa_img">
                    <img src="{{ asset('images/Paypal_logo_PNG5.png') }}" class="imgvisa" alt="VISA MASTER CARD">
                </div>
                <div class="visa_input">
                    <input type="radio" value="paypal" id="paypal" class="input_visa"> Payez 340,00$ avec Paypal</input>
                </div>
            </div>
          </div>
          <div class="div_info_p">
              <div class="div_input_p">
                  <div class="div_inputs">
                      <label for="nom">Nom du titulaire de la carte</label>
                      <input type="text" class="input_voyage paymenet" id="nom" required>
                  </div>
                  <div class="div_inputs">
                      <label for="nbr_c">Numéro de carte</label>
                      <input type="text" class="input_voyage paymenet" id="nbr_c" placeholder="1234-5678-9012-3456" required>
                  </div>
              </div>
              <div class="div_input_p cvc">
                  <div class="div_inputs">
                      <label for="">Valable jusqu'au</label>
                      <input type="date" class="input_voyage paymenet"  required>
                  </div>
                  <div class="div_inputs">
                      <label for="">CCV / CVC</label>
                      <input type="text" class="input_voyage paymenet" placeholder="CCV / CVC" required>
                  </div>
                  <span class="info">
                      * Le CVV ou CVC est le code de sécurité de la carte, un numéro unique à trois chiffres situé au dos de votre carte, distinct de son numéro.
                  </span>
              </div>
          </div>
          <button class="book-button btn_payment" id="Resert">Payer {{ $reservation->voyage->prix }} MAD</button>
        </div>
<div class="box" id="boxx" style="display:none">
  <ul class="left">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>

  <ul class="right">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
  <div class="ticket">
    <span class="airline">{{ $reservation->voyage->ville_arrivee }}</span>
    <span class="airline airlineslip">{{ $reservation->voyage->ville_arrivee }}</span>
    <span class="boarding">CARTE D'EMBARQUEMENT</span>
    <div class="content">
      <span class="jfk">{{ $reservation->voyage->ville_depart }}</span>
      <span class="plane">
        <?xml version="1.0" ?><svg clip-rule="evenodd" fill-rule="evenodd" height="60" width="60" image-rendering="optimizeQuality" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
          <g stroke="#222">
            <line fill="none" stroke-linecap="round" stroke-width="30" x1="300" x2="55" y1="390" y2="390" />
            <path d="M98 325c-9 10 10 16 25 6l311-156c24-17 35-25 42-50 2-15-46-11-78-7-15 1-34 10-42 16l-56 35 1-1-169-31c-14-3-24-5-37-1-10 5-18 10-27 18l122 72c4 3 5 7 1 9l-44 27-75-15c-10-2-18-4-28 0-8 4-14 9-20 15l74 63z" fill="#222" stroke-linejoin="round" stroke-width="10" />
          </g>
        </svg>
      </span>
      <span class="sfo">{{ $reservation->voyage->ville_arrivee }}</span>

      <span class="jfk jfkslip">{{ $reservation->voyage->ville_depart }}</span>
      <span class="plane planeslip">
        <?xml version="1.0" ?><svg clip-rule="evenodd" fill-rule="evenodd" height="50" width="50" image-rendering="optimizeQuality" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
          <g stroke="#222">
            <line fill="none" stroke-linecap="round" stroke-width="30" x1="300" x2="55" y1="390" y2="390" />
            <path d="M98 325c-9 10 10 16 25 6l311-156c24-17 35-25 42-50 2-15-46-11-78-7-15 1-34 10-42 16l-56 35 1-1-169-31c-14-3-24-5-37-1-10 5-18 10-27 18l122 72c4 3 5 7 1 9l-44 27-75-15c-10-2-18-4-28 0-8 4-14 9-20 15l74 63z" fill="#222" stroke-linejoin="round" stroke-width="10" />
          </g>
        </svg>
      </span>
      <span class="sfo sfoslip">{{ $reservation->voyage->ville_arrivee }}</span>
      <div class="sub-content">
        <span class="watermark">{{ $reservation->voyage->ville_arrivee }}</span>
        <span class="name">NOM DU PASSAGER<br><span>{{ $reservation->passenger->nom_passeng }} {{ $reservation->passenger->prenom_passeng }}</span></span>
        <span class="flight">VOL N&deg;<br><span>X3-65C3</span></span>
        <span class="gate">GRILLE<br><span>11B</span></span>
        <span class="seat">SIÈGE<br><span>45A</span></span>
        <span class="boardingtime">HEURE D'EMBARQUEMENT<br><span>{{ $reservation->voyage->date_depart }}</span></span>
        <span class="boardingtime f">HEURE D'EMBARQUEMENT<br><span>{{ $reservation->voyage->date_depart }}</span></span>

        <span class="flight flightslip">VOL N&deg;<br><span>X3-65C3</span></span>
        <span class="seat seatslip">SIÈGE<br><span>45A</span></span>
        <span class="name nameslip">NOM DU PASSAGER<br><span style="font-size:16px">{{ $reservation->passenger->nom_passeng }} {{ $reservation->passenger->prenom_passeng }}</span></span>
      </div>
    </div>
    <div class="barcode"></div>
    <div class="barcode slip"></div>
  </div>
</div>
@endsection
@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM loaded'); // Debugging line
    
    const paymentButton = document.getElementById('Resert');
    
    if (!paymentButton) {
        console.error('Payment button not found!');
        return;
    }
    
    console.log('Button found, adding listener'); // Debugging line
    
    paymentButton.addEventListener('click', function(e) {
        console.log('Button clicked'); // Debugging line
        e.preventDefault();
        
        const paymentDiv = document.getElementById('Div_for_paiement');
        const ticketDiv = document.getElementById('boxx');
        
        if (!paymentDiv || !ticketDiv) {
            console.error('Required elements not found');
            return;
        }
        
        paymentDiv.style.display = 'none';
        ticketDiv.style.display = 'flex';
        
        // Optional: Scroll to ticket
        // ticketDiv.scrollIntoView({ behavior: 'smooth' });
    });
});
</script>
@endsection