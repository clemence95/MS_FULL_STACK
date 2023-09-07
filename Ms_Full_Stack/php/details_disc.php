<?php
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=record", "root", "");
        // Utilisez $pdo pour interagir avec la base de données.
    } catch (PDOException $e) {
        die("Erreur de connexion à la base de données : " . $e->getMessage());
    }
    

    $requete = $db->prepare("SELECT * FROM disc WHERE disc_id = :disc_id");
    $requete->execute(array($_GET["disc_id"]));
    $disc = $requete->fetch(PDO::FETCH_OBJ);
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Test PDO</title>
</head>
<html>
<body>
    Disc N° <?= $disc->disc_id ?>
    Disc name <?= $disc->disc_name ?>
    Disc year <?= $disc->disc_year ?>
</body>
</html>