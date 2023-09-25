<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <!-- Add Bootstrap links here -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <h1>Accueil</h1>

    <!-- Search Bar -->
    <form action="recherche.php" method="GET">
        <input type="text" name="q" placeholder="Rechercher un plat...">
        <button type="submit">Rechercher</button>
    </form>

    <!-- Category Cards -->
    <div class="row">
        <?php
        try {
            $servername = "localhost";
            $username = "admin";
            $password = "Afpa1234";
            $dbname = "The_district";

            // Create a connection to the database
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Retrieve only the image and label columns
            $sql = "SELECT image, libelle FROM categorie WHERE active = 'Yes' ORDER BY id DESC LIMIT 6";
            $stmt = $conn->query($sql);

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $libelle = $row['libelle'];
                $imageURL = $row['image'];

                // Display each category as a card
                echo '<div class="col-md-4 mb-4">';
                echo '<div class="card">';
                echo '<img src="assets/img/' . $imageURL . '" alt="' . $libelle . '" class="card-img-top">';
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
            // Close the database connection
            $conn = null;
        }
        ?>
    </div>

    <!-- The rest of your HTML content -->
</body>

</html>

