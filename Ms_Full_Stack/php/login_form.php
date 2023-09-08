<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de Connexion</title>
</head>
<body>
    <h2>Connexion</h2>
    <form action="login_script.php" method="post">
        <label for="login">Login (adresse email) :</label>
        <input type="text" name="login" required><br><br>

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Se connecter">
    </form>
</body>
</html>
