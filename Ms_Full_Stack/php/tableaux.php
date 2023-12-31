<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $capitales = array(
        "Bucarest" => "Roumanie",
        "Bruxelles" => "Belgique",
        "Oslo" => "Norvège",
        "Ottawa" => "Canada",
        "Paris" => "France",
        "Port-au-Prince" => "Haïti",
        "Port-d'Espagne" => "Trinité-et-Tobago",
        "Prague" => "République tchèque",
        "Rabat" => "Maroc",
        "Riga" => "Lettonie",
        "Rome" => "Italie",
        "San José" => "Costa Rica",
        "Santiago" => "Chili",
        "Sofia" => "Bulgarie",
        "Alger" => "Algérie",
        "Amsterdam" => "Pays-Bas",
        "Andorre-la-Vieille" => "Andorre",
        "Asuncion" => "Paraguay",
        "Athènes" => "Grèce",
        "Bagdad" => "Irak",
        "Bamako" => "Mali",
        "Berlin" => "Allemagne",
        "Bogota" => "Colombie",
        "Brasilia" => "Brésil",
        "Bratislava" => "Slovaquie",
        "Varsovie" => "Pologne",
        "Budapest" => "Hongrie",
        "Le Caire" => "Egypte",
        "Canberra" => "Australie",
        "Caracas" => "Venezuela",
        "Jakarta" => "Indonésie",
        "Kiev" => "Ukraine",
        "Kigali" => "Rwanda",
        "Kingston" => "Jamaïque",
        "Lima" => "Pérou",
        "Londres" => "Royaume-Uni",
        "Madrid" => "Espagne",
        "Malé" => "Maldives",
        "Mexico" => "Mexique",
        "Minsk" => "Biélorussie",
        "Moscou" => "Russie",
        "Nairobi" => "Kenya",
        "New Delhi" => "Inde",
        "Stockholm" => "Suède",
        "Téhéran" => "Iran",
        "Tokyo" => "Japon",
        "Tunis" => "Tunisie",
        "Copenhague" => "Danemark",
        "Dakar" => "Sénégal",
        "Damas" => "Syrie",
        "Dublin" => "Irlande",
        "Erevan" => "Arménie",
        "La Havane" => "Cuba",
        "Helsinki" => "Finlande",
        "Islamabad" => "Pakistan",
        "Vienne" => "Autriche",
        "Vilnius" => "Lituanie",
        "Zagreb" => "Croatie"
    );
    // Exercice 1 
    asort($capitales);

    foreach ($capitales as $capitale => $pays) {
        echo "$capitale - $pays <br>";
    }

    echo "<br>";
    ksort($capitales);
    "<br>";
    //Affiche la liste des capitales par ordre alphabétique suivie du nom du pays

    // Exercice 2
    foreach ($capitales as $capitale => $pays) {
        echo "$pays - $capitale <br>";
    }
    echo "<br>";

    //Exercice 3
    ksort($capitales);
    // Comptez le nombre de pays dans le tableau
    $nombreDePays = count($capitales);
    echo "Nombre de pays dans le tableau : $nombreDePays";
    //Affiche le nombre de pays das le tableaux

    echo "<br>";

    //Exercice 5 
    echo "<br>";
    ksort($capitales);

    // Boucle pour supprimer les capitales ne commençant pas par 'B'
    foreach ($capitales as $capitale => $pays) {
        if (substr($capitale, 0, 1) !== 'B') {
            unset($capitales[$capitale]);
        }
    }

    // Affichez le contenu du tableau après la suppression
    foreach ($capitales as $capitale => $pays) {
        echo "$pays - $capitale <br>";
    }

    $departements = array(
        "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
        "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
        "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
        "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
    );

    //Exercice 6
    // Triez les régions par ordre alphabétique
    echo "<br>";
    ksort($departements);

    // Parcourez les régions et affichez les départements pour chaque région
    foreach ($departements as $region => $departementArray) {
        echo "$region : ";
        echo implode(", ", $departementArray);
        echo "<br>";
    }
    //Exercice 7
    // Parcourez les régions et affichez le nom de la région suivi du nombre de départements
    echo "<br>";
    foreach ($departements as $region => $departementArray) {
        $nombreDepartements = count($departementArray);
        echo "$region : $nombreDepartements départements";
        echo "<br>";
    }

    ?>
</body>

</html>