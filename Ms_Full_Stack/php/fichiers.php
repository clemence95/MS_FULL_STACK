<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Fichiers</title>
</head>

<body>
    <?php
    //Exercice 1
    $urls = file("liens.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    if ($urls !== false) {
        foreach ($urls as $url) {
            echo "<li><a href=\"$url\">$url</a></li>";
        }
    } else {
        echo "Erreur lors de la lecture du fichier.";
    }

    //Exercice 2
    //Chemin vers le fichier  
    $fichier ='customers.csv';

    //Lecture du contenu du fichier
    $contenuCSV = file($fichier);

    //Tableau pour stocker les utilisateurs
    $utilisateurs = [];

    //Parcourir chaque ligne du fichier CSV
    foreach ($contenuCSV as $lignes){
        // Découpe la ligne en utilisant la virgule comme séparateur
        $utilisateur = explode(',',$lignes);

        //Ajoute l'utilisateur au tableau
        $utilisateurs[] = $utilisateur;
    }
    
    //Affichage du Tableau
    echo'<table class="table table-bordered">';
    echo'<thead><tr>Surname</th><th>Firstname</th><th>Email</th><th>Phone</th><th>State</th></tr></thead>';
    echo'<tbody>';
    foreach ($utilisateurs as $utilisateur) {
        echo '<tr>';
        echo '<td>' . $utilisateur[0] . '</td>';
        echo '<td>' . $utilisateur[1] . '</td>';
        echo '<td>' . $utilisateur[2] . '</td>';
        echo '<td>' . $utilisateur[3] . '</td>';
        echo '<td>' . $utilisateur[4] . '</td>';
        echo '<td>' . $utilisateur[5] . '</td>';
        echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';

    ?>

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>