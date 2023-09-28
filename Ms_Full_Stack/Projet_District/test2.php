<?php
// Connexion à la base de données (remplacez avec vos propres informations de connexion)
$host = "localhost";
$username = "admin";
$password = "Afpa1234";
$database = "The_district";

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer les données de la table `categorie`
    $queryCategories = "SELECT * FROM categorie WHERE active = 'Yes'";
    $categories = $conn->query($queryCategories)->fetchAll(PDO::FETCH_ASSOC);

    // Récupérer les données de la table `plat`
    $queryPlats = "SELECT * FROM plat WHERE active = 'Yes'";
    $plats = $conn->query($queryPlats)->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu des plats</title>
    <style>
        /* Votre CSS ici */
    </style>
</head>
<body>
    <?php
    // Boucle pour afficher les catégories
    foreach ($categories as $category) {
        echo '<div class="category">';
        echo '<h2>' . $category['libelle'] . '</h2>';
        echo '<img src="assets/img/' . $category['image'] . '" alt="' . $category['libelle'] . '" />';
        // Vous pouvez ajouter plus de détails de catégorie ici si nécessaire

        // Boucle pour afficher les plats de cette catégorie
        echo '<div class="menu-items">';
        foreach ($plats as $plat) {
            if ($plat['id_categorie'] == $category['id']) {
                echo '<div class="menu-item">';
                echo '<h3>' . $plat['libelle'] . '</h3>';
                echo '<p>' . $plat['description'] . '</p>';
                echo '<img src="assets/img/' . $plat['image'] . '" alt="' . $plat['libelle'] . '" />';
                echo '<p class="price">' . $plat['prix'] . '</p>';
                echo '<button class="order-button">Commander</button>';
                echo '</div>';
            }
        }
        echo '</div>'; // Fin de la division des plats
        echo '</div>'; // Fin de la division de la catégorie
    }
    ?>
</body>
</html>

