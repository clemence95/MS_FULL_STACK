<?php
// Inclure le fichier de connexion à la base de données
include("connexion.php");

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $demande = $_POST["demande"];

    // Préparer et exécuter la requête SQL pour ajouter la demande dans la base de données
    $sql = "INSERT INTO demandes (prenom, nom, email, telephone, demande) VALUES (:prenom, :nom, :email, :telephone, :demande)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':demande', $demande);

    if ($stmt->execute()) {
        // La demande a été ajoutée avec succès à la base de données
        // Vous pouvez rediriger l'utilisateur vers une page de confirmation ou afficher un message de succès
        header("Location: confirmation.php"); // Redirection vers une page de confirmation
        exit();
    } else {
        // Erreur lors de l'ajout de la demande
        // Vous pouvez gérer les erreurs ici
        echo "Une erreur est survenue lors de l'ajout de la demande.";
    }
} else {
    // Le formulaire n'a pas été soumis, rediriger l'utilisateur vers la page de contact
    header("Location: form_contacte.php"); // Redirection vers la page de contact
    exit();
}
?>
