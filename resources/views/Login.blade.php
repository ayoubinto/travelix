<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="{{url('style/Login.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="{{url('https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <title>Document</title>
</head>
<body>
  	<div class="background-blur" style='background-image: 
		linear-gradient(to bottom, rgba(119, 17, 222, 0.5), rgba(174, 9, 235, 0)), 
		url("images/54441055814081.5994521823fc1.jpg");'></div>
	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<form action="{{ route('register') }}" method="POST" id="registerForm" >
				@csrf
				<h1>Créer un compte</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<span>ou utilisez votre email pour vous inscrire</span>
				<input type="text" placeholder="Nom" name="nom_passeng" required />
				<input type="email" placeholder="Email" name="email_passeng" required />
				<input type="password" placeholder="Password" name="password" required />
				<input type="password" placeholder="Confirmer le mot de passe" name="password_confirmation" required />
				<button style="height: 53px;font-size: 14px;margin-top: 21px;">S'INSCRIRE</button>
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form method="POST" action="{{ route('login') }}">
				@csrf
				<h1>Se connecter</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<span>ou utilisez votre compte</span>
				<input type="email" name="email" placeholder="Email" required />
				<input type="password" placeholder="Mot de passe" name="password" required />
				<a href="#">Mot de passe oublié?</a>
				<button style="height: 53px;font-size: 14px;">Se connecter</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Bon retour !</h1>
					<p>Pour rester en contact avec nous, veuillez vous connecter avec vos informations personnelles.</p>
					<button class="ghost" id="signIn">Se connecter</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Bonjour, mon ami !</h1>
					<p>Entrez vos informations personnelles et commencez votre aventure avec nous.</p>
					<button class="ghost" id="signUp">S'INSCRIRE</button>
				</div>
			</div>
		</div>
	</div>
	<div id="errorBox" class="error_container  animate__fadeInUp" style="display: none;flex-direction: revert;align-items: center;justify-content: center;">
		<img src="{{ url('images/password.png') }}" alt="Erreur" style="width: 52px; margin-right: 10px;">
		<div id="errorMessages"></div>
	</div>

	@if($errors->has('login_error'))
		<div class="error_container animate__headShake" id="error_container">
			<div>
				<img src="{{url('images/failed.png')}}" alt="error" style="width: 52px;margin: -1px 0px -11px 20px;">
			</div>
			<div>
				<p class="parag_error">Les identifiants fournis ne correspondent pas à nos enregistrements.</p>
			</div>
		</div>
		<script>
			setTimeout(function() {
				document.getElementById('error_container').style.display = 'none';
			}, 5000);
		</script>
	@endif
	@if(session()->has('login_success'))
		<div class="error_container animate__fadeInUp" id="login_success_container">
			<div>
				<img src="{{ url('images/check.png') }}" alt="success" style="width: 52px;margin: -1px 0px -11px 20px;">
			</div>
			<div>
				<p class="parag_error">Connexion réussie. Bonjour {{session('nom_passeng')}}!</p>
			</div>
		</div>
		<script>
			setTimeout(function() {
				window.location.href = "{{ route('welcome') }}";
			}, 2500);
		</script>
	@endif
	@if(session()->has('register_success'))
		<div class="error_container animate__fadeInUp" id="resgister_success_container">
			<div>
				<img src="{{ url('images/check.png') }}" alt="success" style="width: 52px;margin: -1px 0px -11px 20px;">
			</div>
			<div>
				<p class="parag_error">Vous vous êtes inscrit avec succès.</p>
			</div>
		</div>
		<script>
			setTimeout(function() {
					document.getElementById('resgister_success_container').style.display = 'none';
				}, 3000);
		</script>
	@endif
</body>
<script>
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');

	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});
	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
	document.getElementById("registerForm").addEventListener("submit", function(e) {
	e.preventDefault();
	const form = this;

	const nom = form.nom_passeng.value.trim();
	const email = form.email_passeng.value.trim();
	const password = form.password.value;
	const confirmPassword = form.password_confirmation.value;

	const errorBox = document.getElementById("errorBox");
	const errorMessages = document.getElementById("errorMessages");

	let errors = [];

	if (nom.length < 2) {
		errors.push("Le nom doit contenir au moins 2 caractères.");
	}
	if (nom.length > 50) {
		errors.push("Le nom ne doit pas dépasser 50 caractères. C'est le code Wifi n'est pas votre nom.");
	}
	if (nom == "") {
		errors.push("Le nom est requis.");
	}

	const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
	if (!emailRegex.test(email)) {
		errors.push("L'adresse email est invalide.");
	}

	if (password.length < 6) {
		errors.push("Le mot de passe doit contenir au moins 6 caractères.");
	}

	if (password !== confirmPassword) {
		errors.push("Les mots de passe ne correspondent pas.");
	}

	if (errors.length > 0) {
		errorBox.style.display = "flex";
		errorMessages.innerHTML = errors.map(e => `<div>${e}</div>`).join('');
	} else {
		errorBox.style.display = "none";
		form.submit(); // Envoie le formulaire si tout est valide
	}
	setTimeout(function() {
		errorBox.style.display = 'none';
	}, 3500);
});
</script>
</html>