function validerFormulaire() {
    // Récupérer les valeurs des champs
    var prenom = document.getElementById('prenom').value;
    var nom = document.getElementById('nom').value;
    var email = document.getElementById('email').value;
    var telephone = document.getElementById('telephone').value;
    var demande = document.getElementById('demande').value;

    // Réinitialiser les messages d'erreur
    document.getElementById('prenom_error').textContent = '';
    document.getElementById('nom_error').textContent = '';
    document.getElementById('mail_error').textContent = '';
    document.getElementById('telephone_error').textContent = '';
    document.getElementById('demande').textContent = '';

    // Valider le champ Prénom
    if (prenom === '') {
        document.getElementById('prenom_error').textContent = 'Saisir votre Prénom';
        return false;
    }

    // Valider le champ Nom
    if (nom === '') {
        document.getElementById('nom_error').textContent = 'Vous devez saisir votre Nom';
        return false;
    }

    // Valider le champ Email
    var emailRegex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;
    if (!emailRegex.test(email)) {
        document.getElementById('mail_error').textContent = 'Saisir une adresse email valide';
        return false;
    }

    // Valider le champ Téléphone (10 chiffres)
    var telephoneRegex = /^\d{10}$/; // 10 chiffres exactement
    if (!telephoneRegex.test(telephone)) {
        document.getElementById('telephone_error').textContent = 'Le numéro de téléphone doit contenir 10 chiffres';
        return false;
    }

    // Valider le champ Demande
    if (demande === '') {
        document.getElementById('demande').textContent = 'Saisir votre demande';
        return false;
    }

    // Si toutes les validations passent, le formulaire est soumis
    return true;
}

 