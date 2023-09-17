<?php
// Dans le fichier index.php
include 'Personne1.php';

// Créez une instance de Personne
$personne1 = new Personne("Président Benzema", 30);

// Affichez les valeurs des propriétés
echo "Nom : " . $personne1->nom . "\n";
echo "Âge : " . $personne1->age . " ans";
?>