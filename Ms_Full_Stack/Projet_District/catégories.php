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

    <div class="row">
        <?php
        try {
            $servername = "localhost";
            $username = "admin";
            $password = "Afpa1234";
            $dbname = "The_district";

            // Connexion
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Requete 
            $sql = "SELECT image, libelle FROM categorie WHERE active = 'Yes' ORDER BY id DESC LIMIT 6";
            $stmt = $conn->query($sql);

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $libelle = $row['libelle'];
                $imageURL = $row['image'];

                // Cards
                echo '<div class="col-md-3 mb-5">';
                echo '<div class="card">';
                echo '<img src="assets/img/' . $imageURL . '" alt="' . $libelle . '" class="card-img-top custom-image-size">';
                echo '<div class="card-body">';
                echo "<h2 class='card-title'>$libelle</h2>";
                // You can add more content here if needed
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        } catch (PDOException $e) {
            echo "Database connection failed: " . $e->getMessage();
        } finally {
            // Fermeture de la base de donnée 
            $conn = null;
        }
        ?>
    </div>


    <footer>
        <?php
        include 'footer.php';
        ?>
    </footer>

</body>

</html>