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
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheDestrit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lugrasimo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header>
        <?php
        include 'nav.php';
        include 'banner.php';
        ?>
    </header>
    <section class="plats dancing">
        <!-- Plats -->
        <h2 class="text-center dancing">Nos plats</h2>
        <div class="row text-center d-flex">
            <?php
            // Boucle pour afficher les plats en colonnes de hauteur variable
            foreach ($plats as $plat) {
                echo '<div class="col-md-6 mb-4 custom-col">';
                echo '<div class="card card-custom">';
                echo '<img src="assets/img/' . $plat['image'] . '" alt="' . $plat['libelle'] . '" class="card-img custom-image-size">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $plat['libelle'] . '</h5>';
                echo '<p class="card-text">' . $plat['description'] . '</p>';
                echo '<p class="card-text">Prix : ' . $plat['prix'] . ' €</p>';
                echo '<a href="#" class="btn btn-primary">Commander</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </section>
    <footer>
        <?php
        include 'footer.php';
        ?>
    </footer>

</body>

</html>