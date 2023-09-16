<?php
class Personne {
    public $nom;
    public $age;

    public function __construct($nom, $age) {
        $this->nom = $nom;
        $this->age = $age;
    }

    public function afficherDetails() {
        echo "Nom : " . $this->nom . "<br>";
        echo "Âge : " . $this->age . "<br>";
    }
}
