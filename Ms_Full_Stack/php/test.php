<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Artistes et de Leurs Disques</title>
</head>
<body>
    <h1>Liste des Artistes et de Leurs Disques</h1>
    <table border="1">
        <tr>
            <th>ID de l'Artiste</th>
            <th>Artiste</th>
            <th>Titre du Disque</th>
            <th>Année</th>
            <th>Image du Disque</th>
            <th>Label</th>
            <th>Genre</th>
            <th>Prix</th>
        </tr>
        <?php
        // Connexion à la base de données
        $servername = "localhost"; // Adresse du serveur MySQL
        $username = "admin"; // Nom d'utilisateur MySQL
        $password = "Afpa1234"; // Mot de passe MySQL
        $dbname = "record"; // Nom de la base de données

        // Créer une connexion à la base de données
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        // Définir le mode de gestion des erreurs PDO
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Sélectionner les informations des artistes et de leurs disques avec une jointure
        $sql = "SELECT a.artist_id, a.artist_name, d.disc_title, d.disc_year, d.disc_picture, d.disc_label, d.disc_genre, d.disc_price
                FROM artist a
                JOIN disc d ON a.artist_id = d.artist_id";
        $stmt = $conn->query($sql);

        // Afficher les données
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>{$row['artist_id']}</td>";
            echo "<td>{$row['artist_name']}</td>";
            echo "<td>{$row['disc_title']}</td>";
            echo "<td>{$row['disc_year']}</td>";
            echo "<td>{$row['disc_picture']}</td>";
            echo "<td>{$row['disc_label']}</td>";
            echo "<td>{$row['disc_genre']}</td>";
            echo "<td>{$row['disc_price']}</td>";
            echo "</tr>";
        }

        // Fermer la connexion à la base de données
        $conn = null;
        ?>
    </table>
</body>
</html>


