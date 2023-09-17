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
class Employe extends Personne {
    private $salaire;

    public function __construct($nom, $age, $salaire) {
        parent::__construct($nom, $age);  // Appel du constructeur de la classe parente
        $this->salaire = $salaire;
    }

    public function getSalaire() {
        return $this->salaire;
    }
}
$employe = new Employe("Ronaldo", 30, 50000);

echo "Nom : " . $employe->getNom() . "\n";
echo "Âge : " . $employe->getAge() . " ans\n";
echo "Salaire : " . number_format($employe->getSalaire(), 0, ',', ' ') . " FCFA\n";
?>