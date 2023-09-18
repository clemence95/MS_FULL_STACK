function validerFormulaire() {
    const nom = document.getElementById("nom").value;
    const prenom = document.getElementById("prenom").value;
    var regexEmail = /\S+@\S+\.\S+/;
    const telephone = document.getElementById("telephone").value;
    

    if (nom.length < 1) {
      alert("Veuillez marquer votre nom de famille (obligatoire!)");
      return false;
    }

    if (prenom.length < 1) {
      alert("Veuillez marquer votre prénom (obligatoire!)");
      return false;
    }

    if (date.length == false) {
      alert("Veuillez entrer votre année de naissance (obligatoire!)");
      return false;
    }

    if (codepostal.length != 5) {
      alert("Veuillez marquer votre code postale ! il ne doit y avoir que 5 caractère (obligatoire!)");
      return false;
    }

    if (adresse.length < 1) {
      alert("Veuillez marquer votre adresse (obligatoire!)");
      return false;
    }

    if (ville.length < 1) {
      alert("Veuillez marquer votre ville (obligatoire!)");
      return false;
    }

    if (!regexEmail.test(email)) {
      alert("L'e-mail doit comporter au moins le caractère @. (obligatoire!)");
      return false;
    }
    return true;
  }
  const form = document.querySelector('form');
  function resetForm() {
    form.reset();
  }
