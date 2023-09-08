<?php
session_start();

// Vérifier si la session auth existe et contient la valeur "ok"
if (!isset($_SESSION["auth"]) || $_SESSION["auth"] !== "ok") {
    header("Location: login_form.php"); // Rediriger vers la page de connexion
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page Protégée</title>
</head>
<body>
    <h2>Bienvenue sur la page protégée</h2>
    <p>Cette page ne peut être accédée que si vous êtes authentifié.</p>
    <a href="logout.php">Déconnexion</a>
</body>
</html>
