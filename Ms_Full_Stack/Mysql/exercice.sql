--  exercice 1 
Select * from employe;
-- Affic-he toutes les informations concernants les employés 

-- Exercice 2 
SELECT * from dept;
-- Affiche toutes ls informations concernenants le departement

-- Exercice 3 
SELECT nom,dateemb,nosup,salaire from employe;
-- Affiche le nom la date d'embauche, le numero du supérieur et le salaire de chaque employés

-- Exercice 4 
SELECT titre from employe;
-- Affiche la fonction de tous les employés 

-- Exercice 5 
SELECT DISTINCT titre FROM employe;
-- Affiche les differents poste sans les doublons 

--Exercice 6 
SELECT nom,noemp,nodep FROM employe WHERE titre='secretaire';
-- Affiche les nom, le numero de l'employé, le numéro du departement des secretaire 

--Exercice 7 
SELECT nom,nodep FROM employe WHERE nodep > 40;
-- Affiche le nom et le numéro du departement dont le departement est supérieur à 40

--Exercice 8 
SELECT nom, prenom FROM employe WHERE nom < prenom;
-- Affiche le nom et le prénom des employés dont le nom est alphabétiquement antérieur au prénom 

--Exercice 9
SELECT nom,salaire,nodep FROM employe WHERE titre='représentant' AND nodep=35 AND salaire>20000;
-- Affiche le nom, le salaire et le numéro de departement des représentant ayant un departement 35 et un salaire supérieur à 20000

--Exercice 10
SELECT nom,titre,salaire FROM employe WHERE titre='représentant' OR titre='président';
--Affiche le nom, le titre et le salaire des employés dont le titre est Représentant ou Président

--Exercice 11
SELECT nom,titre,salaire FROM employe WHERE (titre='représentant' OR titre='secretaire') AND nodep=34;
-- Affiche le nom, le titre et le salaire des personnes ayant un titre rprésentant ou secretaire et un deparement 34

--Exercice 12
SELECT nom,titre,salaire,nodep FROM employe WHERE titre='representant' OR (titre='secretaire' AND nodep=34);
-- Affiche le nom, le titre, le salaire et le departement des representant et des secrétaire du departement 34

--Exercice 13 
SELECT nom,salaire FROM employe WHERE (salaire>=20000 AND salaire<=30000);
-- OR
SELECT nom,salaire FROM employe WHERE salaire BETWEEN '20000' AND '30000';
--Affiche le nom et le salaire des employés dont le salaire est compris entre 20000 et 30000

--Exercice 15
SELECT nom FROM employe WHERE nom like 'H%';
--Affiche le nom des employés commençant par la lettre "H"

--Exercice 16
SELECT nom FROM employe WHERE nom like '%N';
--Affiche le nom des employés se terminant par la lettre "N"

--Exercice 17
SELECT nom FROM employe WHERE SUBSTRING (nom,3,1)='u';
-- Affiche le nom des employés contenant la lettre "u" en 3ème position

--Exercice 18 
SELECT nom,salaire FROM employe WHERE nodep=41 ORDER BY salaire ASC;
-- Affiche le salaire et le nom des employés du departemant 41 classés par salaire croissant

--Exercice 19 
SELECT salaire, nom FROM employe WHERE nodep = 41 ORDER BY salaire DESC;
--Affiche le salaire et le nom des employés du departement 41 classés par salaire décroissant

--Exercice 20
SELECT titre, salaire, nom FROM employe ORDER BY titre ASC, salaire DESC;
--Affiche le titre, le salaire et le nom  des employés classés par titre croissant et par salaire décroissant

--Exercice 21 
SELECT nom,salaire,tauxcom, salaire FROM employe WHERE tauxcom IS NOT NULL ORDER BY tauxcom ASC;
-- Affiche le taux de commission, le salaire et le nom des employés classés par taux de commission croissante

--Exercice 22 
SELECT nom,salaire,tauxcom,titre FROM employe WHERE tauxcom IS NULL;
-- Affiche le nom, le salaire, le taux de commission et le titre des employés dont le taux de commission n'est pas renseigné

--Exercice 23 
SELECT nom, salaire, tauxcom, titre FROM employe WHERE tauxcom IS NOT NULL;
--Affiche le nom, le salaire, le taux de commission et le titre des employés dont le taux de commission est renseigné

--Exercice 24 
SELECT nom, salaire, tauxcom, titre FROM employe WHERE tauxcom<15;
--Affiche le nom, le salaire, le taux de commission et le titre des employés dont le taux de commission est inférieur à 15

--Exercice 25 
SELECT nom, salaire, tauxcom, titre FROM employe WHERE tauxcom>15;
--Affiche le nom, le salaire, le taux de commission et le titre des employés dont le taux de commission est supérieur à 15

--Exercice 26 
SELECT nom, salaire, tauxcom, tauxcom * salaire AS com FROM employe WHERE tauxcom IS NOT NULL;
--Affiche le nom, le salaire, le taux de commisssion et la commission des employés dont le taux de commission n'est pas nul

--Exercice 27 
SELECT nom, salaire, tauxcom, tauxcom * salaire AS com FROM employe WHERE tauxcom IS NOT NULL ORDER BY tauxcom ASC;
--Affiche le nom, le sailaire, le taux de commision et la commission des employés dont le taux de commission n'est pas nul et classés par taux de comission croissant

--Exercice 28 
SELECT CONCAT(nom, ' ', prenom) AS "Nom complet" FROM employe;
--Affiche le nom et le prénom (concaténés) des employés et renomme la colone

--Exercice 29
SELECT SUBSTRING(nom, 1, 5) AS "5 Premières Lettres" FROM employe;
--Affiche les 5 premières lettres du nom des employés

--Exercice 30
--SELECT nom, POSITION('r' IN nom) AS rang_de_r FROM employe WHERE POSITION('r' IN nom) > 0;
--Affiche le nom et le rang de la lettre "r" dans le nom des employés

--Exercice 31
SELECT nom, UPPER(nom) AS nom_majuscules, LOWER(nom) AS nom_minuscules FROM employe WHERE nom = 'Vrante';
--Affiche le nom, le nom en majuscule et le nom en minuscule de l'employé dont le nom est Vrante

--Exercice 32 
SELECT nom, LENGTH(nom) AS nombre_de_caractères FROM employe;
--Affiche le nom  et le nombre de caractères du nom des employés