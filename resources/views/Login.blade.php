<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="{{url('style/Login.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="{{url('https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap')}}" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <div class="background-blur" style='background-image: 
    linear-gradient(to bottom, rgba(119, 17, 222, 0.5), rgba(174, 9, 235, 0)), 
    url("images/54441055814081.5994521823fc1.jpg");'></div>
<div class="container" id="container">
		<div class="form-container sign-up-container">
			<form action="#">
				<h1>Créer un compte</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<span>ou utilisez votre email pour vous inscrire</span>
				<input type="text" placeholder="Nom" />
				<input type="email" placeholder="Email" />
				<input type="password" placeholder="Password" />
				<button style="height: 53px;font-size: 14px;margin-top: 21px;">S'INSCRIRE</button>
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form action="#">
				<h1>Se connecter</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<span>ou utilisez votre compte</span>
				<input type="email" placeholder="Email" />
				<input type="password" placeholder="Password" />
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
</script>
</html>