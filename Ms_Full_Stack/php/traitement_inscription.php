<?php
$servername = "localhost";
$username = "admin";
$password = "Afpa1234";
$dbname = "test";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("La connexion à la base de données a échoué : " . $e->getMessage());
}

// Récupération des données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$mot_de_passe = $_POST['mot_de_passe'];

// Vérifier que le mot de passe n'est pas vide
if (!empty($mot_de_passe)) {
    // Hasher le mot de passe
    $mot_de_passe_hache = password_hash($mot_de_passe, PASSWORD_DEFAULT);

    // Insérer l'utilisateur dans la table
    $sql = "INSERT INTO user (nom, prenom, email, mot_de_passe) VALUES (:nom, :prenom, :email, :mot_de_passe)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':mot_de_passe', $mot_de_passe_hache);
    
    if ($stmt->execute()) {
        echo "Inscription réussie !";
    } else {
        echo "Une erreur est survenue.";
    }
} else {
    echo "Le champ du mot de passe ne peut pas être vide.";
}
?>


