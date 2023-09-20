<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheDestrit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <link href="https://fonts.googleapis.com/css2?family=Lugrasimo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header>
        <?php
        include './nav.php';
        include './banner.php';
        ?>
    </header>
    <div class="d-flex justify-content-center couleur-navigation">
        <!--Début de la partie affichage des catégorie Image+Titre-->

        <body>
            <h1>Catégories</h1>
            <ul>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "the_district";

                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch (PDOException $e) {
                    die("La connexion à la base de données a échoué : " . $e->getMessage());
                }

                // Récupérer les catégories actives (jusqu'à 6 catégories)
                $sql = "SELECT * FROM categorie WHERE active = 'Yes' LIMIT 6";
                $stmt = $conn->query($sql);

                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $id = $row['id'];
                    $libelle = $row['libelle'];
                    echo "<li><a href='categorie.php?id=$id'>$libelle</a></li>";
                }

                // Fermer la connexion à la base de données
                $conn = null;
                ?>
            </ul>
        </body>





        <footer>
            <?php
            include './footer.php';
            ?>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>

</html>