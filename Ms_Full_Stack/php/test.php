<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>
<body>
    <h2>Inscription</h2>
    <form method="post" action="traitement.php">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" required><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" required><br><br>

        <label for="adresse_mail">Adresse e-mail :</label>
        <input type="email" name="adresse_mail" required><br><br>

        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" name="mot_de_passe" required><br><br>

        <input type="submit" value="S'inscrire">
    </form>
</body>
</html>

