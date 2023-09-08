<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de Connexion</title>
</head>
<body>
    <h2>Connexion</h2>

    <?php
    // Afficher le message d'erreur s'il est présent
    if (isset($_GET["erreur"])) {
        echo '<p style="color: red;">' . htmlspecialchars($_GET["erreur"]) . '</p>';
    }
    ?>

    
    <form action="login_script.php" method="post">
        <label for="login">Login (adresse email) :</label>
        <input type="text" name="login" required><br><br>

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Se connecter">
    </form>
</body>
</html>
