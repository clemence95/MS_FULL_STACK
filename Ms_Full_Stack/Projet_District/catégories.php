<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <!-- Ajoutez les liens Bootstrap ici -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <h1>Accueil</h1>

    <!-- Barre de recherche -->
    <form action="recherche.php" method="GET">
        <input type="text" name="q" placeholder="Rechercher un plat...">
        <button type="submit">Rechercher</button>
    </form>

    <!-- Carrousel des catégories populaires -->
    <div id="categoryCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            $servername = "localhost";
            $username = "admin";
            $password = "Afpa1234";
            $dbname = "The_district";

            // Créer une connexion à la base de données
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

            // Récupérer les catégories les plus populaires (jusqu'à 6 catégories)
            $sql = "SELECT * FROM categorie WHERE active = 'Yes' ORDER BY id DESC LIMIT 6";
            $stmt = $conn->query($sql);

            $indicatorCount = 0;
            $activeClass = 'active';

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<li data-target='#categoryCarousel' data-slide-to='$indicatorCount' class='$activeClass'></li>";
                $indicatorCount++;
                $activeClass = '';
            }
            ?>
        </ol>

        <!-- Contenu du carrousel -->
        <div class="carousel-inner">
            <?php
            // Réinitialiser le compteur et la classe active
            $indicatorCount = 0;
            $activeClass = 'active';

            // Réexécuter la requête pour récupérer les catégories
            $stmt = $conn->query($sql);

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $libelle = $row['libelle'];
                $imageURL = $row['./assets/img/category/']; // Récupérer l'URL de l'image

                // Afficher chaque catégorie avec son image dans le carrousel
                echo "<div class='carousel-item $activeClass'>";
                echo "<img src='./assets/img/category/' . $imageURL . ' alt='$libelle' class='d-block w-100'>";
                echo "<h2>$libelle</h2>";
                // Vous pouvez ajouter plus de contenu ici si nécessaire
                echo "</div>";

                $indicatorCount++;
                $activeClass = ''; // Supprimer la classe 'active' après le premier élément Projet_District/assets/img/category/wrap_cat.jpg
            }

            // Fermer la connexion à la base de données
            $conn = null;
            ?>
        </div>

        <!-- Contrôles de navigation -->
        <a class="carousel-control-prev" href="#categoryCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#categoryCarousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <!-- Le reste de votre contenu HTML -->
</body>

</html>
