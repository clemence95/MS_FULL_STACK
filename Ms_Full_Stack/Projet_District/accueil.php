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
        <?php
        include 'nav.php';
        include 'banner.php';
        ?>
    </header>

    <section class="Catégories bg-dark-subtil Lugrasimo py-5">
        <h1 class="text-center dancing "><a href="#">Catégories</a></h1>
        <div class="container d-flex justify-content-center">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card h-100">
                        <img src="./assets//img//category//asian_food_cat.jpg" class="card-img-top custom-image" alt="Asia">
                        <div class="card-body  custom-card-body">
                            <h5 class="card-title text-center"><a href="#">Asia</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100">
                        <img src="./assets//img//category//burger_cat.jpg" class="card-img-top custom-image" alt="Burger">
                        <div class="card-body  custom-card-body">
                            <h5 class="card-title text-center"><a href="#">Burger</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100">
                        <img src="./assets//img//category//pizza_cat.jpg" class="card-img-top custom-image" alt="Pizza">
                        <div class="card-body  custom-card-body">
                            <h5 class="card-title text-center"><a href="#">Pizza</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100">
                        <img src="./assets//img//category//salade_cat.jpg" class="card-img-top custom-image" alt="Salade">
                        <div class="card-body  custom-card-body">
                            <h5 class="card-title text-center"><a href="#">Salade</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="Catégories bg-dark-subtil Lugrasimo py-5">
        <h1 class="text-center dancing"><a href="#">Plats</a></h1>
        <div class="container d-flex justify-content-center">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card h-100">
                        <img src="./assets//img//food//courgettes_farcies.jpg" class="card-img-top custom-image" alt="Courgette-farcie">
                        <div class="card-body  custom-card-body">
                            <h5 class="card-title text-center"><a href="#">Courgettes-Farcies</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100">
                        <img src="./assets//img//food//lasagnes_viande.jpg" class="card-img-top custom-image" alt="Lasagnes">
                        <div class="card-body  custom-card-body">
                            <h5 class="card-title text-center"><a href="#">Lasagnes</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100">
                        <img src="./assets//img//food//cesar_salad.jpg" class="card-img-top custom-image" alt="Salade-Cesar">
                        <div class="card-body  custom-card-body">
                            <h5 class="card-title text-center"><a href="#">Salade-Cesar</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100">
                        <img src="./assets//img//food//tagliatelles-saumon.webp" class="card-img-top custom-image" alt="Tagliatelles-Saumon">
                        <div class="card-body  custom-card-body">
                            <h5 class="card-title text-center"><a href="#">Tagliatelles-Saumon</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <?php
        include 'footer.php';
        ?>
    </footer>
<!-- dfhjhfsdhfsdhjfshfdhfdshfsdg -->
</body>

</html>