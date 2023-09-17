<?php
// Dans le fichier Personne.php
class Personne {
    public $nom;
    public $age;

    public function __construct($nom, $age) {
        $this->nom = $nom;
        $this->age = $age;
    }

    public function afficherDetails() {
        echo "Nom : " . $this->nom . "\n";
        echo "Âge : " . $this->age ." ans" ;
    }
}
// Créez une instance de Personne
$personne2 = new Personne("Président Benzema", 30);

$personne2->afficherDetails();
?>
   

