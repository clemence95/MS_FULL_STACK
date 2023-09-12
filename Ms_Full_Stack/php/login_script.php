<?php
session_start();

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Remplacez ces valeurs par les véritables identifiants de l'utilisateur
    $login = $_POST["login"];
    $password = $_POST["password"];

    // Exemple de vérification simple (pour des fins de démonstration uniquement)
    $expectedLogin = "admin";
    $expectedPasswordHash = password_hash("admin", PASSWORD_DEFAULT); // mot de passe haché

    if ($login == $expectedLogin && password_verify($password, $expectedPasswordHash)) {
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
