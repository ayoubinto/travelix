@extends('Layout.master')
@section('content')
<div class="home_slider_container" style="position: relative">
    <div class="background_voyage_org" style="background-image:url({{ asset('images/0a5136f59e.jpg') }});padding-top: 25%;opacity:0.5"></div>
    <div class="home_content">
        <div class="home_title">Facture</div>
    </div>  
</div>
<div class="Div_for_paiement" id="Div_for_paiement">
    <form action="{{ route('reservation.paiement', $reservation->id_reservation)}}" class="form_paiement" method="POST">
        @csrf
        <div class="div_heading_paiement">
            <h1 class="heading3">PAIEMENT</h1>
        </div>
        <div class="div_type_paiment">
            <div class="visa">
                <div class="visa_img">
                    <img src="{{ asset('images/visa-mastercard-logos-wh429a8o742pgm38.png') }}" class="imgvisa" alt="VISA MASTER CARD">
                </div>
                <div class="visa_input">
                    <input type="radio" name="type_paiement" value="visa" id="visa" class="input"> Payez {{ $reservation->voyage->prix }} MAD avec carte de crédit</input>
                </div>
            </div>
            <div class="visa">
                <div class="visa_img">
                    <img src="{{ asset('images/Paypal_logo_PNG5.png') }}" class="imgvisa" alt="VISA MASTER CARD">
                </div>
                <div class="visa_input">
                    <input type="radio" name="type_paiement" value="paypal" id="paypal" class="input_visa"> Payez {{ $reservation->voyage->prix }} MAD avec Paypal</input>
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
          <button type="submit" class="book-button btn_payment" id="Resert">Payer {{ $reservation->voyage->prix }} MAD</button>
        </div>
    </form>
    <div class="box" id="boxx"  style="display:none">
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
        <i class="fa-solid fa-plane-departure"></i>
      </span>
      <span class="sfo">{{ $reservation->voyage->ville_arrivee }}</span>

      <span class="jfk jfkslip">{{ $reservation->voyage->ville_depart }}</span>
      <span class="plane planeslip">
        <i class="fa-solid fa-plane-departure" style="left: 12px;font-size: 28px;"></i>
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
<button class="book-button btn_payment" id="facture" style="display:none;background-color:#5E3A79">Télécharger la facture de l'avion</button>
@endsection
@section('scripts')
<script>
// document.addEventListener('DOMContentLoaded', function() {
//     console.log('DOM loaded'); // Debugging line
    
//     const paymentButton = document.getElementById('Resert');
//     const factureButton = document.getElementById('facture');
    
//     if (!paymentButton) {
//         console.error('Payment button not found!');
//         return;
//     }
    
//     console.log('Button found, adding listener'); // Debugging line
    
//     paymentButton.addEventListener('click', function(e) {
//         console.log('Button clicked'); // Debugging line
//         e.preventDefault();
        
//         const paymentDiv = document.getElementById('Div_for_paiement');
//         const ticketDiv = document.getElementById('boxx');
        
//         if (!paymentDiv || !ticketDiv) {
//             console.error('Required elements not found');
//             return;
//         }
        
//         paymentDiv.style.display = 'none';
//         ticketDiv.style.display = 'flex';
//         factureButton.style.display = 'block';
        
//         // Optional: Scroll to ticket
//         // ticketDiv.scrollIntoView({ behavior: 'smooth' });
//     });
// });
document.addEventListener('DOMContentLoaded', function() {
    const paymentForm = document.querySelector('.form_paiement');
    const factureButton = document.getElementById('facture');
    
    if (!paymentForm) {
        console.error('Payment form not found!');
        return;
    }

    paymentForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const paymentDiv = document.getElementById('Div_for_paiement');
        const ticketDiv = document.getElementById('boxx');
        
        if (!paymentDiv || !ticketDiv) {
            console.error('Required elements not found');
            return;
        }
        fetch(paymentForm.action, {
            method: 'POST',
            body: new FormData(paymentForm),
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                'Accept': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                paymentDiv.style.display = 'none';
                ticketDiv.style.display = 'flex';
                factureButton.style.display = 'block';
            } else {
                alert('Erreur lors du paiement: ' + (data.message || 'Erreur inconnue'));
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Une erreur est survenue lors du paiement');
        });
    });
});
</script>
@endsection