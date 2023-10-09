<?php
// Démarrer ou reprendre la session
session_start();

// Fonction pour calculer le total de la commande
function calculerTotalCommande() {
    $total = 0;

    if (isset($_SESSION['panier']) && !empty($_SESSION['panier'])) {
        foreach ($_SESSION['panier'] as $element) {
            $total += $element['prix'];
        }
    }

    return $total;
}

// Ajouter un plat à la commande
if (isset($_POST['ajouter_au_panier'])) {
    $plat_id = $_POST['plat_id'];
    $plat_nom = $_POST['plat_nom'];
    $plat_prix = floatval($_POST['plat_prix']);

    // Vérifier d'abord si le panier existe dans la session, sinon créez-le
    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = array();
    }

    // Ajouter l'élément au panier
    $element = array(
        'id' => $plat_id,
        'nom' => $plat_nom,
        'prix' => $plat_prix
    );

    array_push($_SESSION['panier'], $element);
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Commande</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Ma Commande</h1>
        <section class="ma-commande" id="ma-commande">
            <!-- La liste des éléments de la commande sera affichée ici -->
            <?php if (isset($_SESSION['panier']) && !empty($_SESSION['panier'])) : ?>
                <ul id="commande-list">
                    <?php foreach ($_SESSION['panier'] as $element) : ?>
                        <li><?= $element['nom'] ?> - <?= $element['prix'] ?> €</li>
                    <?php endforeach; ?>
                </ul>
                <p>Total de la commande : <span id="total-commande"><?= calculerTotalCommande() ?> €</span></p>
            <?php else : ?>
                <p>Votre panier est vide.</p>
            <?php endif; ?>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
