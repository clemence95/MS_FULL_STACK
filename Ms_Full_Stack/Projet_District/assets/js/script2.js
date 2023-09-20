function validerFormulaire() {
    const prenom = document.getElementById("prenom").value;
    const nom = document.getElementById("nom").value;
    const email = document.getElementById("email").value;
    const telephone = document.getElementById("telephone").value;
    const demande = document.getElementById("demande").value;
    var regexEmail = /\S+@\S+\.\S+/;
    if(prenom.length <1){
      alert("veuillez mettre un prenom");
      return false;
    }
    if(nom.length <1){
      alert("veuillez mettre un nom");
      return false;
    }
    if (!regexEmail.test(email)) {
      alert("L'e-mail doit comporter au moins le caractère @. (obligatoire!)");
      return false;
    }
    if (telephone.length != 10 ) {
      alert("veuillez mettre un tel");
      return false;
    }
    if (demande.length <1){
      alert("veuillez mettre une demande");
      return false;
    }
    return true;
  }