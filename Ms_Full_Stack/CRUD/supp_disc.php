<?php
// Inclure le fichier de connexion à la base de données
include("connexion.php");

// Vérifier si un identifiant de disque est spécifié dans l'URL
if (isset($_GET['disc_id'])) {
    // Récupérer l'identifiant de disque à supprimer depuis l'URL
    $discIdToDelete = $_GET['disc_id'];

    // Requête SQL pour supprimer le disque en fonction de son identifiant
    $sqlDelete = "DELETE FROM disc WHERE disc_id = :disc_id";
    $stmt = $conn->prepare($sqlDelete);

    // Liaison de l'identifiant du disque en tant que paramètre
    $stmt->bindParam(':disc_id', $discIdToDelete, PDO::PARAM_INT);

    // Exécution de la requête
    if ($stmt->execute()) {
        // Rediriger vers la page principale ou une autre page de confirmation
        header("Location: index_disc.php");
        exit();
    } else {
        // Gérer les erreurs de suppression ici
        echo "Erreur lors de la suppression du disque.";
    }
} else {
    // Gérer le cas où aucun identifiant de disque n'est spécifié dans l'URL
    echo "Aucun identifiant de disque spécifié pour la suppression.";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Supprimer un Vinyle</title>
</head>
<body>
    <h1>Supprimer un Vinyle</h1>
    <!-- Vous pouvez ajouter un formulaire ou des informations de confirmation ici si nécessaire -->
</body>
</html>
