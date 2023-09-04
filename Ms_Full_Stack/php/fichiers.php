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
    ?>
    <div class="container">
        <h2>Exemple de tableau en PHP et Bootstrap avec CSV</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Ville</th>
                    <th>Etat</th>
                </tr>
            </thead>
            <?php
            // Lire le fichier CSV
            $fichier_csv = fopen('/home/clemence/Bureau/TBDA/MS_FULL_STACK/Ms_Full_Stack/php/customers.csv', 'r');

            // Vérifier si le fichier CSV a été ouvert avec succès
            if ($fichier_csv !== false) {
                // Boucle pour lire les lignes du fichier CSV
                while (($ligne = fgetcsv($fichier_csv)) !== false) {
                    echo '<tr>';
                    echo '<td>' . $ligne[0] . '</td>';
                    echo '<td>' . $ligne[1] . '</td>';
                    echo '<td>' . $ligne[2] . '</td>';
                    echo '<td>' . $ligne[3] . '</td>';
                    echo '<td>' . $ligne[4] . '</td>';
                    echo '<td>' . $ligne[5] . '</td>';
                    echo '</tr>';
                }

                // Fermer le fichier CSV
                fclose($fichier_csv);
            } else {
                echo 'Impossible d\'ouvrir le fichier CSV.';
            }
            ?>

            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>