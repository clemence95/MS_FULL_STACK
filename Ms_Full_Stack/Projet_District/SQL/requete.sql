-- Afficher la liste des commandes (la liste doit faire apparaître la date, les informations du client, le plat et le prix) :
SELECT c.date_commande, c.nom_client, c.telephone_client, c.email_client, p.libelle AS plat, c.total
FROM commande c
INNER JOIN plat p ON c.id_plat = p.id
ORDER BY c.date_commande;

-- Afficher la liste des plats en spécifiant la catégorie :
SELECT p.libelle AS plat, c.libelle AS categorie
FROM plat p
INNER JOIN categorie c ON p.id_categorie = c.id;

-- Afficher les catégories et le nombre de plats actifs dans chaque catégorie :
SELECT c.libelle AS categorie, COUNT(p.id) AS nombre_de_plats
FROM categorie c
LEFT JOIN plat p ON c.id = p.id_categorie AND p.active = 'Yes'
GROUP BY c.libelle;

-- Liste des plats les plus vendus par ordre décroissant :
SELECT p.libelle AS plat, SUM(c.quantite) AS quantite_vendue
FROM plat p
INNER JOIN commande c ON p.id = c.id_plat
GROUP BY p.libelle
ORDER BY quantite_vendue DESC;

-- Le plat le plus rémunérateur :
SELECT p.libelle AS plat, SUM(c.total) AS chiffre_affaire
FROM plat p
INNER JOIN commande c ON p.id = c.id_plat
GROUP BY p.libelle
ORDER BY chiffre_affaire DESC
LIMIT 1;

-- Liste des clients et le chiffre d'affaires généré par client (par ordre décroissant) :
SELECT c.nom_client, SUM(cc.total) AS chiffre_affaires
FROM commande cc
GROUP BY c.nom_client
ORDER BY chiffre_affaires DESC;

