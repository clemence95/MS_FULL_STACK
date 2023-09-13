<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>
<body>
    <h2>Inscription</h2>
    <form action="/Ms_Full_Stack/php/traitement_inscription.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" required><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" required><br><br>

        <label for="email">Adresse e-mail :</label>
        <input type="email" name="email" required><br><br>

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="S'inscrire">
    </form>
</body>
</html>

