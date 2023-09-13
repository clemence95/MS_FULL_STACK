<?php
// Connexion à la base de données
$db = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'root', '');

// Récupération des données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$password = $_POST['password']; // Changement de nom du champ

// Hasher le mot de passe
$password_hash = password_hash($password, PASSWORD_DEFAULT);

// Insérer l'utilisateur dans la table
$sql = "INSERT INTO user (nom, prenom, email, mot_de_passe) VALUES (:nom, :prenom, :email, :mot_de_passe)";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':prenom', $prenom);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':mot_de_passe', $password_hash); // Changement de nom du champ

if ($stmt->execute()) {
    echo "Inscription réussie !";
} else {
    echo "Une erreur est survenue.";
}
?>



