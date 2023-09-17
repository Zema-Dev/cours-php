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
