<?php
// Dans le fichier Personne.php
class Personne {
    public $nom;
    public $age;
// pour pouvoir initialiser ces propriétés avec des valeurs lors 
//de la création d'une instance de la classe, 
//je dois ajouter un constructeur à la classe.
    public function __construct($nom, $age) {
        $this->nom = $nom;
        $this->age = $age;
    }
}
// Créez une instance de Personne
$personne1 = new Personne("Président Benzema", 30);

// Affichez les valeurs des propriétés
echo "Nom : " . $personne1->nom . "\n";
echo "Âge : " . $personne1->age . " ans";
?>