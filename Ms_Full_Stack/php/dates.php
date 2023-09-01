<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Exercice 1
    $date = new DateTime('2019-07-14');
    $numSemaine = $date->format('W');

    echo "Le numéro de semaine de la date 14/07/2019 est : $numSemaine";

    //Exercice 2
    // Date de fin de la formation
    echo "<br>";
    $dateFinFormation = new DateTime('2023-06-20');

    // Date actuelle
    $dateActuelle = new DateTime();

    // Calculer la différence en jours
    $interval = $dateActuelle->diff($dateFinFormation);
    $joursRestants = $interval->format('%a');

    echo "Il vous reste $joursRestants jours avant la fin de votre formation.";

    //Exercice 3
    echo "<br>";
    function estBissextile($annee)
    {
        // Créez un objet DateTime pour le 29 février de l'année donnée
        $date = new DateTime("$annee-02-29");

        // Vérifiez si l'année est bissextile en comparant la date à la date spécifiée
        return $date->format('Y-m-d') === "$annee-02-29";
    }

    // Exemple d'utilisation :
    $annee = 2023;
    if (estBissextile($annee)) {
        echo "$annee est une année bissextile.";
    } else {
        echo "$annee n'est pas une année bissextile.";
    }

    //Exercice 4
    echo "<br>";
    try {
        $date = new DateTime('32/17/2019');
        echo 'La date est valide : ' . $date->format('d/m/Y');
    } catch (Exception $e) {
        echo 'La date est erronée : ' . $e->getMessage();
    }

    //Exercice 5
    echo "<br>";
    $dateActuelle = new DateTime();
    $heure = $dateActuelle->format('H');
    $minute = $dateActuelle->format('i');

    echo "$heure" . 'h' . "$minute";

    //Exercice 6
    echo "<br>";
    $dateActuelle = new DateTime();
    $dateActuelle->add(new DateInterval('P1M')); // Ajoute 1 mois
    echo $dateActuelle->format('Y-m-d'); // Affiche la nouvelle date

    //Exercice 7 
    echo "<br>";
    $timestamp = 1000200000;
    $date = new DateTime("@$timestamp");
    echo $date->format('Y-m-d H:i:s');
    // la date et l'heure associées au timestamp "1000200000".
    //Un timestamp est une valeur numérique qui représente un point spécifique dans le temps.
    // En informatique, les timestamps sont généralement utilisés pour enregistrer des dates et des heures de manière standardisée,
    // indépendamment de la zone horaire.
    ?>
</body>

</html>