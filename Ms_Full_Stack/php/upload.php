<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifie si le fichier a été correctement uploadé
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        // Emplacement temporaire du fichier
        $tmp_file = $_FILES["file"]["tmp_name"];

        // Nom du fichier sur le serveur
        $file_name = $_FILES["file"]["name"];

        // Déplacer le fichier vers un emplacement permanent
        $upload_dir = "uploads/"; // Répertoire de destination
        $target_file = $upload_dir . $file_name;

        if (move_uploaded_file($tmp_file, $target_file)) {
            // Afficher les informations sur le fichier uploadé
            echo "Le fichier a été correctement uploadé.<br>";
            echo "Nom du fichier : " . $file_name . "<br>";
            echo "Type MIME du fichier : " . $_FILES["file"]["type"] . "<br>";
            echo "Taille du fichier : " . $_FILES["file"]["size"] . " octets<br>";
        } else {
            echo "Une erreur s'est produite lors de l'upload du fichier.";
        }
    } else {
        echo "Erreur lors de l'upload du fichier. Code d'erreur : " . $_FILES["file"]["error"];
    }
}

// Afficher les informations sur la superglobale $_FILES
var_dump($_FILES);
?>
