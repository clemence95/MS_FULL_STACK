<?php
class Magasin {
    // Propriétés du magasin
    private $nomMagasin;
    private $adresse;
    private $codePostal;
    private $ville;
    private $modeRestauration;

    // Constructeur
    public function __construct($nomMagasin, $adresse, $codePostal, $ville, $modeRestauration)
    {
        $this->nomMagasin = $nomMagasin;
        $this->adresse = $adresse;
        $this->codePostal = $codePostal;
        $this->ville = $ville;
        $this->modeRestauration = $modeRestauration;
    }

    // Méthode get pour accéder au nom du magasin
    public function getNomMagasin() {
        return $this->nomMagasin;
    }

    // Méthode get pour accéder au mode de restauration
    public function getModeRestauration() {
        return $this->modeRestauration;
    }
}

class Employe {
    // Propriétés
    private $nom;
    private $prenom;
    private $dateEmbauche;
    private $fonction;
    private $salaire;
    private $service;
    private $magasin;
    private $enfants;

    // Constructeur
    public function __construct($nom, $prenom, $dateEmbauche, $fonction, $salaire, $service, $magasin, $enfants) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateEmbauche = $dateEmbauche;
        $this->fonction = $fonction;
        $this->salaire = $salaire;
        $this->service = $service;
        $this->magasin = $magasin;
        $this->enfants = $enfants;
    }

    // Méthode get pour accéder au nom de l'employé
    public function getNom() {
        return $this->nom;
    }

    // Méthode get pour accéder au prénom de l'employé
    public function getPrenom() {
        return $this->prenom;
    }

    // Méthode pour calculer l'ancienneté de l'employé
    public function anciennete(){
        $dateEmbauche = new DateTime($this->dateEmbauche);
        $aujourdHui = new DateTime();
        $difference = $dateEmbauche->diff($aujourdHui);
        return $difference->y;
    }

    // Méthode pour calculer la prime annuelle de l'employé
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

    // Méthode pour vérifier si l'employé peut avoir des chèques-vacances
    public function peutAvoirChequesVacances(){
        return $this->anciennete() >= 1;
    }

    // Méthode pour calculer les chèques Noël pour les enfants
    public function chequesNoelPourEnfants() {
        $enfants = $this->enfants;
        $cheques10 = 0;
        $cheques15 = 0;
        $cheques18 = 0;
        
        foreach ($enfants as $age) {
            if ($age >= 0 && $age <= 10) {
                $cheques10 += 1;
            } elseif ($age >= 11 && $age <= 15) {
                $cheques15 += 1;
            } elseif ($age >= 16 && $age <= 18) {
                $cheques18 += 1;
            }
        }
    
        // Retourner les résultats
        return [
            "cheques10" => $cheques10,
            "cheques15" => $cheques15,
            "cheques18" => $cheques18,
        ];
    }

    // Méthode pour afficher les informations de l'employé
    public function afficherInfosEmploye() {
        echo "Nom : " . $this->getNom() . "<br>";
        echo "Prénom : " . $this->getPrenom() . "<br>";
        echo "Date d'embauche : " . $this->dateEmbauche . "<br>";
        echo "Fonction : " . $this->fonction . "<br>";
        echo "Salaire : " . $this->salaire . " K euros brut annuel<br>";
        echo "Service : " . $this->service . "<br>";
        echo "Ancienneté : " . $this->anciennete() . " années<br>";
        echo "Prime ancienneté : " . $this->calculerPrimeAnnuelle() . "<br>";
        echo "Travaille dans le magasin " . $this->magasin->getNomMagasin() . " à " . $this->magasin->getModeRestauration() . ".<br>";
    
        // Vérifie si l'employé peut disposer de chèques-vacances
        if ($this->peutAvoirChequesVacances()){
            echo $this->getNom() . " : peut disposer de chèques-vacances" . "<br>";
        }  else {
            echo $this->getNom() . " : ne peut pas disposer de chèques-vacances." . "<br>";
        }
    
        // Affiche les chèques Noël pour les enfants
        $chequesNoel = $this->chequesNoelPourEnfants();
    
        if ($chequesNoel["cheques10"] > 0 || $chequesNoel["cheques15"] > 0 || $chequesNoel["cheques18"] > 0) {
            echo "Droit aux chèques Noël : Oui<br>";
            if ($chequesNoel["cheques10"] > 0) {
                echo "Chèques Noël de 20 € pour les enfants de 0 à 10 ans : " . $chequesNoel["cheques10"] . "<br>";
            }
            if ($chequesNoel["cheques15"] > 0) {
                echo "Chèques Noël de 30 € pour les enfants de 11 à 15 ans : " . $chequesNoel["cheques15"] . "<br>";
            }
            if ($chequesNoel["cheques18"] > 0) {
                echo "Chèques Noël de 50 € pour les enfants de 16 à 18 ans : " . $chequesNoel["cheques18"] . "<br>";
            }
        } else {
            echo "Droit aux chèques Noël : Non<br>";
        }
    }
}

// Exemple d'utilisation de la classe Magasin
$magasin1 = new Magasin("Magasin A", "123 Rue de la République", "75001", "Paris", "Restaurant d'entreprise");
$magasin2 = new Magasin("Magasin B", "456 Avenue des Champs-Élysées", "75008", "Paris", "Tickets Restaurants");

// Exemple d'utilisation de la classe Employe avec les magasins associés
$employe1 = new Employe("Doe", "John", "2020-01-15", "Développeur", 50, "Informatique", $magasin1, [8, 12, 17]);
$employe2 = new Employe("Smith", "Jane", "2019-03-20", "Comptable", 45, "Comptabilité", $magasin2, [5, 9, 14]);

// Appel de la méthode afficherInfosEmploye() à l'extérieur des classes
$employe1->afficherInfosEmploye();
echo "<br>";
$employe2->afficherInfosEmploye();

// AARRGHHHHHHHHHHHHHHHH HORRIBLE !

?>

