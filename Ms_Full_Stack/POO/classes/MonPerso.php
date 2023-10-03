<?php
require_once('./Personnage.class.php'); // Inclure le fichier de la classe Personnage

$p = new Personnage();
$p->setNom("B");
$p->setPrenom("Clemence");
$p->setAge(28);
$p->setSexe("Femme");

echo $p;
?>
