<?php
class Magasin {
    // Propriétés du magasin
    public $nomMagasin;
    public $adresse;
    public $codePostal;
    public $ville;

    // Constructeur
    public function __construct($nomMagasin, $adresse, $codePostal, $ville)
    {
        $this->nomMagasin = $nomMagasin;
        $this->adresse = $adresse;
        $this->codePostal = $codePostal;
        $this->ville = $ville;
    }
}

class Employe {
    // Propriétés
    public $nom;
    public $prenom;
    public $dateEmbauche;
    public $fonction;
    public $salaire;
    public $service;
    public $magasin; // Propriété pour stocker le magasin auquel l'employé est rattaché

    // Constructeur
    public function __construct($nom, $prenom, $dateEmbauche, $fonction, $salaire, $service, $magasin) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateEmbauche = $dateEmbauche;
        $this->fonction = $fonction;
        $this->salaire = $salaire;
        $this->service = $service;
        $this->magasin = $magasin; // Associer l'employé à un magasin
    }

    public function anciennete(){
        $dateEmbauche = new DateTime($this->dateEmbauche);
        $aujourdHui = new DateTime();
        $difference = $dateEmbauche->diff($aujourdHui);
        return $difference->y;
    }

    public function calculerPrimeAnnuelle(){
        // Calcul de la prime basée sur le salaire brut
        $primeSalaire = $this->salaire * 0.05;
    
        // Calcul de la prime basée sur l'ancienneté
        $primeAnciennete = $this->salaire * ($this->anciennete() * 0.02);
    
        // Calcul de la prime totale
        $primeTotale = $primeSalaire + $primeAnciennete;
        
        // Date du versement de la prime (30/11 de chaque année)
        $dateVersement = date("Y-11-30");
    
        // Générer l'ordre de transfert
        $ordreDeTransfert = "Transférer la prime de $" . $primeTotale . " à " . $this->nom . " " . $this->prenom . " le " . $dateVersement;
    
        return $ordreDeTransfert;
    }
    
    // Méthode pour afficher les informations de l'employé
    public function afficherInfosEmploye() {
        echo "Nom : " . $this->nom . "<br>";
        echo "Prénom : " . $this->prenom . "<br>";
        echo "Date d'embauche : " . $this->dateEmbauche . "<br>";
        echo "Fonction : " . $this->fonction . "<br>";
        echo "Salaire : " . $this->salaire . " K euros brut annuel<br>";
        echo "Service : " . $this->service . "<br>";
        echo "Ancienneté : " . $this->anciennete() . " années<br>";
        echo "Prime anciennete : " . $this->calculerPrimeAnnuelle() . "<br>";
        echo "Travaille dans le magasin " . $this->magasin->nomMagasin . " à " . $this->magasin->ville . ".<br>";
    }
}

// Exemple d'utilisation de la classe Magasin
$magasin1 = new Magasin("Magasin A", "123 Rue de la République", "75001", "Paris");
$magasin2 = new Magasin("Magasin B", "456 Avenue des Champs-Élysées", "75008", "Paris");

// Exemple d'utilisation de la classe Employe avec les magasins associés
$employe1 = new Employe("Doe", "John", "2020-01-15", "Développeur", 50, "Informatique", $magasin1);
$employe2 = new Employe("Smith", "Jane", "2019-03-20", "Comptable", 45, "Comptabilité", $magasin2);

$employe1->afficherInfosEmploye();
echo "<br>";
$employe2->afficherInfosEmploye();
?>
