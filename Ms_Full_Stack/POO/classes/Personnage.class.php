<?php
class Personnage {
    private $nom;
    private $prenom;
    private $age;
    private $sexe;

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }

    public function setSexe($sexe) {
        $this->sexe = $sexe;
    }

    public function getSexe() {
        return $this->sexe;
    }

    public function __toString() {
        return "Nom: " . $this->nom . "<br>Prenom: " . $this->prenom . "<br>Age: " . $this->age . "<br>Sexe: " . $this->sexe;
    }
}
?>
