<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LesBoucles</title>
</head>

<body>
    <?php
    for ($i = 1; $i <= 150; $i += 2) {
        echo    $i . "<br>";
    }
    echo "<br>";

    for ($i = 0; $i < 500; $i++) {
        echo  "Je dois faire des sauvegardes régulières de mes fichiers<br>";
    }
    echo "<br>";

    // Création du tableau
    $tableau = array();

    // Remplissage du tableau avec les résultats de multiplication
    for ($i = 0; $i <= 9; $i++) {
        for ($j = 0; $j <= 9; $j++) {
            $tableau[$i][$j] = $i * $j;
        }
    }
    ?>
</body>

</html>