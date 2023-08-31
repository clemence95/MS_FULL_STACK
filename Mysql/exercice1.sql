-- Exercice 1 Jointure 
SELECT employe.prnom, dept.noregion
FROM employe
JOIN dept ON employe.nodep = dept.nodept
GROUP BY dept.noregion
-- Affiche le prénom des employés et le numéro de la région de leur département

-- Exercice 2 
SELECT d.nodept AS numero_departement, d.nom AS nom_departement, e.nom AS nom_employe
FROM dept d
JOIN employe e ON d.nodept = e.nodep
ORDER BY d.nodept 
-- Affiche le numéro du département, le nom du département et le nom des employés classés par numéro de département

-- Exercice 3 
SELECT e.nom AS nom_employe
FROM employe e 
JOIN dept d ON e.nodep = d.nodept 
WHERE d.nom = 'Distribution'
-- Affiche le nom des employés du département 'Distribution'

--Exercice 4 
SELECT e1.nom AS nom_employe, e1.salaire AS nom_patron, 
e2.nom AS nom_patron, e2.salaire AS salaire_patron
FROM employe e1 
JOIN employe e2 ON e1.nosup = e2.nosup 
WHERE e1.salaire > e2.salaire
-- Affiche le nom et le salaire des employés qui gagnent plus que leur patron et le nom et le salaire de leur patron

--Exercice 5 
SELECT e.nom AS nom_employe, e.titre AS titre_employe
FROM employe e 
WHERE e.titre = (SELECT titre FROM employe WHERE nom = 'Amartakaldire')
-- Affiche le nom et le titre des employés qui ont le meme titre que Amartakaldire

--Exercice 6 
SELECT nom, salaire, nodep FROM employe 
WHERE salaire > ANY (SELECT(salaire) FROM employe WHERE nodep = 31)
ORDER BY nodep, salaire DESC
-- Affiche le nom, le salaire et le numéro de département des employés qui gagnent plus qu'un seul employé du departement 31

--Exercice 7 
SELECT nom, salaire, nodep 
FROM employe WHERE salaire > ALL (SELECT salaire FROM employe WHERE nodep = 31)
ORDER BY nodep, salaire DESC
-- Affiche le nom, le salaire et le numero de département des employés qui gagnent plus que tous les employés du département 31 et classés par numéro de département et salaire

--Exercice 8 
SELECT e.nom, e.titre
FROM employe e 
WHERE e.nodep = 31 
AND e.titre IN (SELECT titre FROM employe WHERE nodep = 32)
-- Affiche le nom et le titre des employés du service 31 qui ont un titre que l'on trouve dans le departement 32

--Exercice 9
SELECT e.nom, e.titre 
FROM employe e 
where e.nodep= 31 
AND e.titre NOT IN (SELECT titre FROM employe WHERE nodep = 32)
-- Affiche le nom et le titre des employés du service 31 qui ont un titre que l'on ne trouve pas dans le département

--Exercice 10 
SELECT nom, titre, salaire
FROM employe
WHERE titre = (SELECT titre FROM employe WHERE nom = 'Fairent')
  AND salaire = (SELECT salaire FROM employe WHERE nom = 'Fairent');
-- Affiche le nom, le titre et le salaire des employés qui ont le meme titre et le meme salaire que 'Fairent'

--Exercice 11 // Left Join Permet de lister tous les résultats de la table de (gauche=Left) meme s'il n'y a pas de correspondance
SELECT d.nodept, d.nom AS nom_departement, e.nom AS nom_employe
FROM dept d
LEFT JOIN employe e ON d.nodept = e.nodep
ORDER BY d.nodept;
--Affiche le numéro de département, le nom du département, le nom des employés en affichant aussi les départements dans lequels il n'y a personne

--Exercice 1 Fonctions de groupe 
SELECT titre, COUNT(*) AS nombre_employes --COUNT() permet de compter le nombre de ligne dans une table 
FROM employe
GROUP BY titre; -- GROUP BY est utilée pour grouper plusieurs résultats et totaux sur un group de resultat
-- Calcule le nombre d'employés de chaque titre 

--Exercice 2 
SELECT d.nom AS nom_region, AVG(e.salaire) AS moyenne_salaire, SUM(e.salaire) AS somme_salaire --AVG() permet de calculer une valeur moyenne 
FROM employe e             -- SUM() permet de calculer la somme totale d'une colonne 
JOIN dept d ON e.nodep = d.nodept
GROUP BY d.nom;
-- Permet de calculer la moyenne des salaires et leur somme par région 

--Exercice 3 
SELECT nodep, COUNT(noemp)
FROM employe 
GROUP BY nodep
HAVING COUNT(noemp) > 2
-- Affiche les numéros des départements ayant au moins 3 employès 

--Exercice 4 
SELECT LEFT(nom, 1) AS initiale
FROM employes
GROUP BY initiale
HAVING COUNT(DISTINCT nom) >= 3;
-- Affiche les lettres qui sont l'initiale d'au moins 3 employés

--Exercice 5 
SELECT
    MAX(salaire) AS salaire_maximum,
    MIN(salaire) AS salaire_minimum,
    MAX(salaire) - MIN(salaire) AS ecart_salaire
FROM employe;
-- Affiche le salaire maximun et le salaire minimun et l'ecart entre les deux

--Exercice 6 
SELECT COUNT(DISTINCT titre) AS nombre_titres_differents
FROM employe;
-- Affiche le nombre de titre différents 

--Exercice 7 
SELECT titre, COUNT(*) AS nombre_employes
FROM employes
GROUP BY titre;
-- Affiche le nombre d'employés possédant le meme titre

--Exercice 8 
SELECT d.nom, COUNT(e.noemp) AS nombre_employes
FROM dept d
LEFT JOIN employe e ON d.nodept = e.nodep
GROUP BY d.nom;
--Affiche chaque nom de département, et le nombre d'employés 

--Exercice 9 
SELECT titre, AVG(salaire) AS moyenne_salaire
FROM employe
GROUP BY titre
HAVING AVG(salaire) > (SELECT AVG(salaire) FROM employe WHERE titre = 'Représentant')
-- Affiche les titres et la moyenne des salaires par titre dont la mooyenne est supérieure à la moyenne des salaires des 'Représentants

--Exercice 10 
SELECT
    COUNT(salaire) AS nombre_salaires_renseignes,
    COUNT(taux_commission) AS nombre_taux_commission_renseignes
FROM employe;
-- Affiche le nombre de salaires renseignés et le nombre de taux de commission renseignés



