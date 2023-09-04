<?php
//Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    //Récupère les données du formulaire
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $demande = $_POST["demande"];

    //
}