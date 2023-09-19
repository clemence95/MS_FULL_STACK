const prenom = document.getElementById("prenom").value;
const nom = document.getElementById("nom").value;
const email = document.getElementById("email").value;
const telephone = document.getElementById("telephone").value;
const demande = document.getElementById("demande").value;
var regexEmail = /\S+@\S+\.\S+/;

let valid = true;

let form = document.querySelector('#formulaire_contact');
form.addEventListener('submit', (event) => {

    if (!form.nom.value) {
        let error = document.querySelector('#nom_error');
        event.preventDefault();
        error.textContent = "le champ est obligatoire"
        error.style.color = "red"
    }

    if (!form.prenom.value) {
        let error = document.querySelector('#prenom_error');
        event.preventDefault();
        error.textContent = "le champ est obligatoire"
        error.style.color = "red"
    }

    if (!form.email.value) {
        let error = document.querySelector('#mail_error')
        event.preventDefault();
        error.textContent = "le champ est obligatoire"
        error.style.color = "red"
    }

    if (!form.demande.value) {
        let error = document.querySelector('#demande_error')
        event.preventDefault();
        error.textContent = "le champ est obligatoire"
        error.style.color = "red"
    }

    if (!form.question.value) {
        let error = document.querySelector('#question_error')
        event.preventDefault();
        error.textContent = "le champ est obligatoire"
        error.style.color = "red"
    }
}
)
 