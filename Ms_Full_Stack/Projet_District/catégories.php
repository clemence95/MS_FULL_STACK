<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheDestrit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <link href="https://fonts.googleapis.com/css2?family=Lugrasimo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <nav>
        <?php
        include './nav.php';
        ?>
    </nav>
    <?php
    include './banner.php';
    ?>
    <div class="d-flex justify-content-center couleur-navigation">
        <!--Début de la partie affichage des catégorie Image+Titre-->
        <div class="container   text-center">
            <div class="row d-flex justify-content-center fs-1 text-center ">
                <p class="couleurslogan"><strong>Un large choix sur nos plats !</strong></p>
            </div>
            <div class="row">
                <div class="img-cat col-md-4 mb-4 ">
                    <a href="Plats.php#Asiatique">
                        <img src="images_the_disctrict/category/asian_food_cat.jpg" class="d-block" alt="..." style="width:250px;height:250px;">
                        <h4 class="couleurslogan">Asiatiques</h4>
                    </a>
                </div>
                <div class="img-cat col-md-4 mb-4 ">
                    <a href="Plats.php#Burger">
                        <img src="images_the_disctrict/category/burger_cat.jpg" class="d-block" alt="..." style="width:250px;height:250px;">
                        <h4 class="couleurslogan">Burgers</h4>
                    </a>
                </div>
                <div class="img-cat  col-md-4 mb-4">
                    <a href="Plats.php#Pâtes">
                        <img src="images_the_disctrict/category/pasta_cat.jpg" class="d-block" alt="..." style="width:250px;height:250px;">
                        <h4 class="couleurslogan">Pâtes</h4>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="img-cat col-md-4 mb-4">
                    <a href="Plats.php#Pizzas">
                        <img src="images_the_disctrict/category/pizza_cat.jpg" class="d-block" alt="..." style="width:250px;height:250px;">
                        <h4 class="couleurslogan">Pizzas</h4>
                    </a>
                </div>
                <div class="img-cat col-md-4 mb-4">
                    <a href="Plats.php#Salades">
                        <img src="images_the_disctrict/category/salade_cat.jpg" class="d-block" alt="..." style="width:250px;height:250px;">
                        <h4 class="couleurslogan">Salades</h4>
                    </a>
                </div>
                <div class="img-cat col-md-4 mb-4">
                    <a href="Plats.php#Sandwich">
                        <img src="images_the_disctrict/category/sandwich_cat.jpg" class="d-block" alt="..." style="width:250px;height:250px;">
                        <h4 class="couleurslogan">Sandwichs</h4>
                    </a>
                </div>
            </div>
            <div class="row d-none" id="secondRow">
                <div class="img-cat col-md-4 mb-4">
                    <a href="Plats.php#Veggies">
                        <img src="images_the_disctrict/category/veggie_cat.jpg" class="d-block" alt="..." style="width:250px;height:250px;">
                        <h4 class="couleurslogan">Veggies</h4>
                    </a>
                </div>
                <div class="img-cat col-md-4 mb-4">
                    <a href="Plats.php#Wraps">
                        <img src="images_the_disctrict/category/wrap_cat.jpg" class="d-block" alt="..." style="width:250px;height:250px;">
                        <h4 class="couleurslogan">Wraps</h4>
                    </a>
                </div>
                <div class="img-cat col-md-4 mb-4">
                    <a href="Plats.php#Kebab">
                        <img src="images_the_disctrict/category/kebab.jpg" class="d-block" alt="..." style="width:250px;height:250px;">
                        <h4 class="couleurslogan">Kebabs</h4>
                    </a>
                </div>
            </div>
            <div class="row d-none" id="thirdRow">
                <div class="img-cat col-md-4 mb-4">
                    <a href="Plats.php#Libanais">
                        <img src="images_the_disctrict/category/libanais-unver-kebab-lille.jpg" class="d-block" alt="..." style="width:250px;height:250px;">
                        <h4 class="couleurslogan">Libanais</h4>
                    </a>
                </div>
                <div class="img-cat col-md-4 mb-4">
                    <a href="Plats.php#Panini">
                        <img src="images_the_disctrict/category/Panini.jpeg" class="d-block" alt="..." style="width:250px;height:250px;">
                        <h4 class="couleurslogan">Paninis</h4>
                    </a>
                </div>
                <div class="img-cat col-md-4 mb-4">
                    <a href="Plats.php#Tacos">
                        <img src="images_the_disctrict/category/Tacos.jpeg" class="d-block" alt="..." style="width:250px;height:250px;">
                        <h4 class="couleurslogan">Tacos</h4>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="img-cat col-12 text-center">
                    <button id="loadMoreBtn" class="btn btn-primary">Afficher plus</button>
                    <button id="showLessBtn" class="btn btn-secondary d-none">Afficher moins</button>
                </div>
            </div>
        </div>
    </div><!--Fin de la partie affichage des catégorie Image+Titre-->





    <footer>
        <?php
        include './footer.php';
        ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>

</html>