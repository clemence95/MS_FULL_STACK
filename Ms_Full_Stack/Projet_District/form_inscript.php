<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheDestrit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lugrasimo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <nav>
        <?php
        include './php/nav.php';
        ?>
    </nav>
   <?php
   include './php/banner.php'
   ?>
    <form class=" row g-3 needs-validation" novalidate>
        <div class="col-md-3 mb-4">
            <input type="text" class="form-control" placeholder="Prénom" aria-label="prenom" id="validationCustom01" required>
            <div class="invalid-feedback">
                Vous devez saisir votre Prénom
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <input type="text" class="form-control" placeholder="Nom" aria-label="nom" id="validationCustom02" required>
            <div class="invalid-feedback">
                Vous devez saisir votre Nom
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4 mb-4">
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" required>
                <div class="invalid-feedback">
                    Saisir une adresse email valide
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <input type="tel" class="form-control" placeholder="Téléphone" id="exampleInputPassword1" required>
                <div class="invalid-feedback">
                    Saisir votre numéro de téléphone
                </div>
            </div>
        </div>
        <div class="col-md-10">
            <textarea class="form-control" placeholder="Votre demande" id="floatingTextarea2" style="height: 100px" required></textarea>
            <div class="invalid-feedback">
                Saisir votre demande
            </div>
        </div>
        <div class="col-md-10">
            <button type="submit" class="btn btn-primary" id="valide">Valider</button>
        </div>
    </form>

    <footer>
        <?php
        include './php/footer.php';
        ?>
    </footer>
    <script src="/Clemence_MSDIW/FRONT/DYNAMIQUE/JAVASCRIPT/script.js"></script>
</body>

</html>