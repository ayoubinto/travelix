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