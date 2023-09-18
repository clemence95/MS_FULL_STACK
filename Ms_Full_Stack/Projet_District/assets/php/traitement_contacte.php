<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "admin";
$password = "Afpa1234";
$dbname = "The_district";

// Validation côté serveur
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = htmlspecialchars($_POST["prenom"]);
    $nom = htmlspecialchars($_POST["nom"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    
    // Utilisez une expression régulière pour valider le numéro de téléphone
    $telephone = $_POST["telephone"];
    $telephone_pattern = "/^[0-9+()-]+$/"; // Vous pouvez personnaliser cette expression régulière en fonction de vos besoins

    $demande = htmlspecialchars($_POST["demande"]);

    // Récupération des données du formulaire
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$demande =$_POST['demande'];

    // Validation côté serveur supplémentaire si nécessaire
 
        try {
            // Connexion à la base de données (personnalisez les informations de connexion)
            $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);

            // Préparez une requête SQL pour insérer les données
            $sql = "INSERT INTO demande (prenom, nom, email, telephone, demande) VALUES (:prenom, :nom, :email, :telephone, :demande)";
            $stmt = $conn->prepare($sql);

            // Bind des valeurs aux paramètres
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':telephone', $telephone);
            $stmt->bindParam(':demande', $demande);

            // Exécutez la requête
            $stmt->execute();

            echo "Formulaire soumis avec succès!";
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

