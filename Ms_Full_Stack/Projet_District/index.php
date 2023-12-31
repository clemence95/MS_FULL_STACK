<?php
include './dao.php';

$dao = new DAO();

// Get categories //Récupère les catégories
$categories = $dao->getCategories();

// Get top-selling dishes // Récupère les plats les pus vendus
$topSellers = $dao->getTopSellers();

// Close the database connection when done // Ferme la connexion à la bdd
 $dao->closeConnection();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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

    <section class="categories dancing">
        <!-- Catégories populaires -->
        <h2 class="text-center dancing">Catégories Populaires</h2>
        <div class="row text-center d-flex">
            <?php
            //Affiche les catégories les plus populaires à partir du DAO
            foreach ($categories as $category) {
                echo '<div class="col-md-6 mb-4 mx-auto d-flex custom-col">';
                echo '<div class="card custom-card">';
                echo '<img src="assets/img/' . $category['categorie_image'] . '" class="card-img" alt="' . $category['categorie'] . '">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $category['categorie'] . '</h5>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </section>

    <section class="top-sellers">
        <!-- Plats les plus vendus -->
        <h2 class="text-center dancing">Plats les Plus Vendus</h2>
        <div class="row ">
            <?php
          // Affiche les plats les plus vendus à partir du DAO
            foreach ($topSellers as $topSeller) { 
                echo '<div class="col-md-6 mb-4 d-flex custom-col">';
                echo '<div class="card custom-card">';
                echo '<img src="assets/img/' . $topSeller["image"] . '" class="card-img" alt="' . $topSeller["plat"] . '">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $topSeller["plat"] . '</h5>';
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>