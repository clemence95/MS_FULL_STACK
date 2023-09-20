<?php
// Inclure le fichier de connexion à la base de données
include("connexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération de l'ID du disque à supprimer
    $disc_id = $_POST['disc_id'];

    // Requête SQL pour supprimer le disque de la base de données
    $sql = "DELETE FROM disc WHERE disc_id = :disc_id";

    try {
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":disc_id", $disc_id);
        $stmt->execute();

        // Redirection vers la page "index_disc.php" après la suppression
        header("Location: index_disc.php");
        exit();
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}

// Fermeture de la connexion à la base de données
$conn = null;
?>
