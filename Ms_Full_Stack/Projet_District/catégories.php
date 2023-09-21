<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <h1>Accueil</h1>
    
    <!-- Barre de recherche -->
    <form action="recherche.php" method="GET">
        <input type="text" name="q" placeholder="Rechercher un plat...">
        <button type="submit">Rechercher</button>
    </form>
    
    <!-- Tableau pour les catégories populaires -->
    <h2>Catégories Populaires</h2>
    <table>
        <tr>
            <th>Catégorie</th>
        </tr>
        <?php
        $servername = "localhost"; // Adresse du serveur MySQL
        $username = "admin"; // Nom d'utilisateur MySQL
        $password = "Afpa1234"; // Mot de passe MySQL
        $dbname = "The_district"; // Nom de la base de données

        // Créer une connexion à la base de données
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        // Définir le mode de gestion des erreurs PDO
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Récupérer les catégories les plus populaires (jusqu'à 6 catégories)
        $sql = "SELECT * FROM categorie WHERE active = 'Yes' ORDER BY id DESC LIMIT 6";
        $stmt = $conn->query($sql);

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $libelle = $row['libelle'];
            echo "<tr><td><a href='categorie.php?id=$id'>$libelle</a></td></tr>";
        }

        // Fermer la connexion à la base de données
        $conn = null;
        ?>
    </table>
    
    <!-- Tableau pour les plats les plus vendus -->
    <h2>Plats les Plus Vendus</h2>
    <table>
        <tr>
            <th>Plat</th>
            <th>Ventes</th>
        </tr>
        <?php
        // Connexion à la base de données (à adapter comme précédemment)

        // Récupérer les plats les plus vendus (par exemple, les 6 premiers)
        $sql = "SELECT p.libelle AS plat, COUNT(c.id) AS ventes FROM commande c
                JOIN plat p ON c.id_plat = p.id
                GROUP BY c.id_plat
                ORDER BY ventes DESC
                LIMIT 6";
        $stmt = $conn->query($sql);

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $plat = $row['plat'];
            $ventes = $row['ventes'];
            echo "<tr><td>$plat</td><td>$ventes</td></tr>";
        }

        // Fermer la connexion à la base de données
        $conn = null;
        ?>
    </table>
</body>
</html>
