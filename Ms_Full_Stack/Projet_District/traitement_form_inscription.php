<?php
// Connexion à la base de données (à adapter avec vos informations de connexion)
$host = "localhost";
$username = "admin";
$password = "Afpa1234";
$database = "The_district";

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer les données du formulaire
    $nom_client = $_POST['nom_client'];
    $email_client = $_POST['email_client'];
    $adresse_client = $_POST['adresse_client'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Vérifier si les mots de passe correspondent
    if ($password === $confirm_password) {
        // Hacher le mot de passe (utilisez la fonction de hachage appropriée, par exemple Bcrypt)
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Insérer l'utilisateur dans la base de données
        $query = "INSERT INTO utilisateur (nom_client, email_client, adresse_client, password) VALUES ($nom_client, $email_client, $adresse_client, $password)";
        $stmt = $conn->prepare($query);
        $stmt->execute([$nom_client, $email_client, $adresse_client, $hashed_password]);

        echo "Inscription réussie !";
    } else {
        echo "Les mots de passe ne correspondent pas.";
    }
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>
