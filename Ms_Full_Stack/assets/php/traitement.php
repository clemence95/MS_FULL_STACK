<?php
//Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    //Récupère les données du formulaire
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $demande = $_POST["demande"];

    echo "Nom : " . $nom . "<br>";
    echo "Prénom : " . $prenom . "<br>";
    echo "Email : " . $email . "<br>";
    echo "telephone : " . $telephone . "<br>";
    echo "demande : " . $demande . "<br>";
}
