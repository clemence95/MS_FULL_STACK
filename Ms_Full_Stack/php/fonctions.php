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
    function genererLien($url, $titre)
    {
        // Échappez les valeurs de l'URL et du titre pour des raisons de sécurité
        $url = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
        $titre = htmlspecialchars($titre, ENT_QUOTES, 'UTF-8');

        // Générez le code HTML du lien et retournez-le
        return "<a href=\"$url\">$titre</a>";
    }

    // Exemple d'utilisation :
    $lien = genererLien("https://www.reddit.com/", "Reddit Hug");
    echo $lien;

    //Exercice 2
    echo "<br>";
    function somme($tableau)
    {
        $somme = 0;
        foreach ($tableau as $valeur) {
            $somme += $valeur;
        }
        return $somme;
    }

    // Exemple d'utilisation :
    $tab = array(4, 3, 8, 2);
    $resultat = somme($tab);
    echo $resultat; // Affichera 17

    //Exercice 3 
    // Vérifier si le formulaire a été soumis
    echo "<br>";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom_utilisateur = $_POST["nom_utilisateur"];
        $mot_de_passe = $_POST["mot_de_passe"];

        // Utiliser la fonction complex_password pour vérifier le mot de passe
        $mot_de_passe_valide = complex_password($mot_de_passe);

        if ($mot_de_passe_valide) {
            echo "Inscription réussie!";
        } else {
            echo "Le mot de passe ne respecte pas les critères de complexité.";
        }
    }
    function complex_password($motDePasse)
    {
        // Vérifie la longueur du mot de passe
        if (strlen($motDePasse) < 8) {
            return false;
        }

        // Vérifie s'il contient au moins 1 chiffre
        if (!preg_match('/[0-9]/', $motDePasse)) {
            return false;
        }

        // Vérifie s'il contient au moins une majuscule et une minuscule
        if (!preg_match('/[A-Z]/', $motDePasse) || !preg_match('/[a-z]/', $motDePasse)) {
            return false;
        }

        // Si toutes les règles sont respectées, retourne true
        return true;
    }

    // Exemple d'utilisation :
    $resultat = complex_password("TopSecret42");
    echo $resultat; // Affichera true

    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nom_utilisateur">Nom d'utilisateur :</label>
        <input type="text" id="nom_utilisateur" name="nom_utilisateur" required><br><br>

        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" id="mot_de_passe" name="mot_de_passe" required><br><br>

        <input type="submit" value="S'inscrire">
    </form>
</body>

</html>