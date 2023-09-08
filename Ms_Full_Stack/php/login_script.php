<?php
session_start();

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Remplacez ces valeurs par les véritables identifiants de l'utilisateur
    $identifiant_correct = "admin";
    $mot_de_passe_correct = "admin";

    $login = $_POST["login"];
    $password = $_POST["password"];

    if ($login == $identifiant_correct && $password == $mot_de_passe_correct) {
        // Authentification réussie, initialisation de la session
        $_SESSION["auth"] = "ok";
        header("Location: page_protegee.php"); // Rediriger vers la page protégée
    } else {
        // Authentification échouée, détruire la session
        session_destroy();
        $erreur_message = "Identifiants incorrects. Veuillez réessayer.";
        header("Location: login_form.php?erreur=" . urlencode($erreur_message)); // Rediriger avec un message d'erreur
    }
}
?>
