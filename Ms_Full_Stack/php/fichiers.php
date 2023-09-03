<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</body>
</html>