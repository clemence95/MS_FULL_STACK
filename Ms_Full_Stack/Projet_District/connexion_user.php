<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Mettez ici vos balises meta, titre, et liens CSS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header>
        <?php
        include 'nav.php';
        include 'banner.php';
        ?>
    </header>
    <!-- Formulaire de connexion ici -->
    <form class=" form_user row d-flex g-3 dancing" action="traitement_connexion.php" method="post">
    <div class="col-md-4 mb-3">
        <label for="email" class="form-label fs-4">Adresse e-mail</label>
        <input type="email" class="form-control mx-auto" id="email" name="email" required>
    </div>
    <div class="col-md-4 mb-3">
        <label for="mot_de_passe" class="form-label fs-4">Mot de passe</label>
        <input type="password" class="form-control mx-auto" id="mot_de_passe" name="mot_de_passe" required>
    </div>
    <div class="col-md-4 mb-3 d-flex justify-content-center">
        <button type="submit" class="btn btn-primary">Se connecter</button>
    </div>
</form>


    <footer>
        <?php
        include 'footer.php';
        ?>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>