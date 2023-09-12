<?php
// Connexion à la base de données (à adapter selon votre configuration)
$servername = "localhost";
$username = "admin";
$password = "Afpa1234";
$dbname = "The_district";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Configuration supplémentaire de PDO si nécessaire
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse_mail = $_POST['adresse_mail'];
    $mot_de_passe = $_POST['mot_de_passe'];
    
    // Vérification de l'adresse e-mail unique
    $sql = "SELECT * FROM user WHERE adresse_mail = :adresse_mail";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':adresse_mail', $adresse_mail);
    $stmt->execute();
    
    if ($stmt->rowCount() > 0) {
        die("L'adresse e-mail est déjà utilisée. Veuillez en choisir une autre.");
    }
    
    // Hachage du mot de passe (à améliorer pour une sécurité optimale)
    $mot_de_passe_hache = password_hash($mot_de_passe, PASSWORD_DEFAULT);
    
    // Insertion des données dans la table
    $sql = "INSERT INTO user (nom, prenom, adresse_mail, mot_de_passe) VALUES (:nom, :prenom, :adresse_mail, :mot_de_passe)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':adresse_mail', $adresse_mail);
    $stmt->bindParam(':mot_de_passe', $mot_de_passe_hache);
    
    if ($stmt->execute()) {
        echo "Inscription réussie !";
    } else {
        echo "Erreur : " . $stmt->errorInfo()[2];
    }
    
    // Fermeture de la connexion à la base de données
    $conn = null;
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>

