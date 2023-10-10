<?php

$servername = "localhost";
$username = "clemence";
$password = "1234";
$dbname = "clemence";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("La connexion à la base de données a échoué : " . $e->getMessage());
}

// ...
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $demande = $_POST["demande"];

    // Obtenir la date actuelle au format MySQL (YYYY-MM-DD HH:MM:SS)
    $date_demande = date("Y-m-d H:i:s");

    // Préparer et exécuter la requête SQL pour ajouter la demande dans la base de données
    $sql = "INSERT INTO demande (prenom, nom, email, telephone, demande, date_demande) VALUES (:prenom, :nom, :email, :telephone, :demande, :date_demande)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':demande', $demande);
    $stmt->bindParam(':date_demande', $date_demande);

    if ($stmt->execute()) {
        // La demande a été ajoutée avec succès à la base de données
        // Vous pouvez rediriger l'utilisateur vers une page de confirmation ou afficher un message de succès
        header("Location: ./confirmation_demande.php"); // Redirection vers une page de confirmation
        exit();
    } else {
        // Erreur lors de l'ajout de la demande
        // Vous pouvez gérer les erreurs ici
        echo "Une erreur est survenue lors de l'ajout de la demande.";
    }
} else {
    // Le formulaire n'a pas été soumis, rediriger l'utilisateur vers la page de contact
    header("Location:./form_contacte.php"); // Redirection vers la page de contact
    exit();
}
?>
