<?php
include 'Personne.php';

// Créez une instance de Personne
$personne1 = new Personne("John Doe", 30);

// Affichez les valeurs des propriétés
echo "Nom : " . $personne1->nom . "\n";
echo "Âge : " . $personne1->age;

$personne1->afficherDetails(); // Appel de la méthode afficherDetails

