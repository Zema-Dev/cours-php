<?php
include 'Personne4.php';  

$personne1 = new Personne("Président", 30);

// Utiliser les méthodes getNom() et getAge() pour obtenir les valeurs
$nom = $personne1->getNom();
$age = $personne1->getAge();

// Afficher les détails
echo "Nom : " . $nom . "\n";
echo "Âge : " . $age . " ans";
