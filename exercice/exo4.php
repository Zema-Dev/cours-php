<?php
class Personne {
    private $nom;
    private $age;

    public function __construct($nom, $age) {
        $this->nom = $nom;  // Propriété privée
        $this->age = $age;  // Propriété privée
    }

    public function getNom() {
        return $this->nom;
    }

    public function getAge() {
        return $this->age;
    }
}
$personne1 = new Personne("Président", 30);

// Utiliser les méthodes getNom() et getAge() pour obtenir les valeurs
$nom = $personne1->getNom();
$age = $personne1->getAge();

// Afficher les détails
echo "Nom : " . $nom . "\n";
echo "Âge : " . $age . " ans";
?>
