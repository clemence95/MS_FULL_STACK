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
        <h1>Liste des Nouveaux Utilisateurs</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Ville</th>
                    <th>État</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Utiliser la fonction file() pour récupérer le contenu du fichier CSV distant
                $lines = file("customers.csv", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

                foreach ($lines as $line) {
                    $fields = explode(",", $line);
                    if (count($fields) === 7) {
                        list($surname, $firstname, $email, $phone, $city, $state) = $fields;
                        echo "<tr>";
                        echo "<td>$surname</td>";
                        echo "<td>$firstname</td>";
                        echo "<td>$email</td>";
                        echo "<td>$phone</td>";
                        echo "<td>$city</td>";
                        echo "<td>$state</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>