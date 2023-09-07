<?php
try{
    $db = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'admin', 'Afpa1234');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e){
    echo "Erreur : " . $e->getMessage() . "<br>";
    echo "N° : " . $e->getCode();
    die("Fin du script");
}
    $requete = $db->prepare("select * from disc");
    $requete->execute(array($_GET["disc"]));
    $disc = $requete->fetch(PDO::FETCH_OBJ);
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Test PDO</title>
</head>
<html>
<body>
    <?php foreach ($tableau as $disc): ?>
    Disc N° <?= $disc->disc_id ?>
    Disc name <?= $disc->disc_name ?>
    Disc year <?= $disc->disc_year ?>
    <?php endforeach; ?>
</body>
</html>