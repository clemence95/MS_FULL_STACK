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
     <link rel="stylesheet" href="./style.css"> 
</head>

<body>
    <header>
        <?php include './nav.php'; ?>
    </header>
    <form class=" form_user row g-3" action="./form_traitement_demande.php" method="post" onsubmit="return validerFormulaire1();">
        <div class="col-md-4 mb-4">
            <input type="text" class="form-control" placeholder="Prénom" aria-label="prénom" name="prenom" id="prenom">
            <span class="text-danger" id="prenom_error"></span>
        </div>
        <div class="col-md-4 mb-4">
            <input type="text" class="form-control" placeholder="Nom" aria-label="nom" name="nom" id="nom">
            <span class="text-danger" id="nom_error"></span>
        </div>
        <div class="col-md-5 mb-4">
            <input type="email" class="form-control" placeholder="Email" name="email" id="email">
            <span class="text-danger" id="mail_error"></span>
        </div>
        <div class="col-md-3 mb-4">
            <input type="tel" class="form-control" placeholder="Téléphone" name="telephone" id="telephone">
            <span class="text-danger" id="telephone_error"></span>
        </div>
        <div class="col-md-10 mb-4">
            <textarea class="form-control" placeholder="Votre demande" id=demande name="demande" id="floatingTextarea2" style="height: 100px"></textarea>
            <span class="text-danger" id=demande_error></span>
        </div>
        <div class="col-md-10">
            <button  type="submit" class="btn btn-primary" id="valide">Valider</button>
        </div>
    </form>
    <footer>
        <?php include './footer.php'; ?>
    </footer>

</body>
 <script src="./assets//js//script.js"></script> 

</html>