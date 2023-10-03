<?php
class Employe {
    private $nom;
    private $prenom;
    private $dateEmbauche;
    private $fonction;
    private $salaire;
    private $service;

    // Constructeur pour initialiser les propriétés de l'employé
    public function __construct($nom, $prenom, $dateEmbauche, $fonction, $salaire, $service) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateEmbauche = $dateEmbauche;
        $this->fonction = $fonction;
        $this->salaire = $salaire;
        $this->service = $service;
    }

    // Méthodes pour obtenir les informations de l'employé
    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getDateEmbauche() {
        return $this->dateEmbauche;
    }

    public function getFonction() {
        return $this->fonction;
    }

    public function getSalaire() {
        return $this->salaire;
    }

    public function getService() {
        return $this->service;
    }

    // Méthode pour afficher les informations de l'employé
    public function afficherInfosEmploye() {
        echo "Nom: " . $this->nom . "<br>";
        echo "Prénom: " . $this->prenom . "<br>";
        echo "Date d'embauche: " . $this->dateEmbauche . "<br>";
        echo "Fonction: " . $this->fonction . "<br>";
        echo "Salaire brut annuel (K euros): " . $this->salaire . "<br>";
        echo "Service: " . $this->service . "<br>";
    }
}

// Exemple d'utilisation de la classe Employe
$employe1 = new Employe("Dupont", "Jean", "2020-01-15", "Vendeur", 30, "Commercial");
$employe2 = new Employe("Martin", "Alice", "2019-05-20", "Comptable", 40, "Comptabilité");

// Afficher les informations des employés
echo "Informations de l'employé 1:<br>";
$employe1->afficherInfosEmploye();

echo "<br>";

echo "Informations de l'employé 2:<br>";
$employe2->afficherInfosEmploye();
?>
