<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Intégration de la police "Roboto" depuis Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style.css">
    <style>
        /* Définissez une hauteur spécifique pour les images dans les cartes */
        .card-img {
            height: 200px;
            object-fit: cover;
        }

        /* Définissez une classe personnalisée pour les cartes pour contrôler leur taille */
        .custom-card {
            max-width: 300px;
            display: flex;
            flex-wrap: wrap;
            /* justify-content: space-between; */
            /* padding-bottom: 10vh; */
            /* height: 40vh; */
            flex-direction: column;
            align-items: center;
        }
        .custom-col{
            justify-content: center;
        }
    </style>
</head>

<body>
    <header>
        <?php
        include 'nav.php';
        include 'banner.php';
        ?>
    </header>

    <section class="categories Dancing">
        <!-- Catégories populaires -->
        <h2 class="text-center dancing">Catégories Populaires</h2>
        <div class="row text-center d-flex">
            <?php
            // Établissez la connexion à votre base de données
            $conn = new mysqli("localhost", "admin", "Afpa1234", "The_district");

            // Vérifiez la connexion
            if ($conn->connect_error) {
                die("Échec de la connexion à la base de données : " . $conn->connect_error);
            }

            // Sélectionnez les 6 catégories les plus populaires
            $sql = "SELECT id, libelle, image FROM categorie ORDER BY id LIMIT 6";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-6 mb-4 mx-auto d-flex custom-col">';
                    echo '<div class="card custom-card">';
                    echo '<img src="assets/img/' . $row["image"] . '" class="card-img" alt="' . $row["libelle"] . '">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $row["libelle"] . '</h5>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "Aucune catégorie trouvée.";
            }

            // Fermez la connexion à la base de données
            $conn->close();
            ?>
        </div>
    </section>

    <section class="top-sellers">
        <!-- Plats les plus vendus -->
        <h2 class="text-center dancing">Plats les Plus Vendus</h2>
        <div class="row ">
            <?php
            // Établissez à nouveau la connexion à votre base de données
            $conn = new mysqli("localhost", "admin", "Afpa1234", "The_district");

            // Vérifiez la connexion
            if ($conn->connect_error) {
                die("Échec de la connexion à la base de données : " . $conn->connect_error);
            }

            // Sélectionnez les plats les plus vendus
            $sql = "SELECT p.id, p.libelle, p.image FROM plat p
                    JOIN commande c ON p.id = c.id_plat
                    GROUP BY p.id
                    ORDER BY SUM(c.quantite) DESC
                    LIMIT 6";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-6 mb-4 d-flex custom-col">';
                    echo '<div class="card custom-card">';
                    echo '<img src="assets/img/' . $row["image"] . '" class="card-img" alt="' . $row["libelle"] . '">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $row["libelle"] . '</h5>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "Aucun plat trouvé.";
            }

            // Fermez à nouveau la connexion à la base de données
            $conn->close();
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