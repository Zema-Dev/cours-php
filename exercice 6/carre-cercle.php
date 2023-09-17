<?php

include 'Forme.php';

class Carre extends Forme {
    private $cote;

    public function __construct($cote) {
        $this->cote = $cote;
    }

    public function calculerSurface() {
        return $this->cote * $this->cote;
    }
}

class Cercle extends Forme {
    private $rayon;

    public function __construct($rayon) {
        $this->rayon = $rayon;
    }

    public function calculerSurface() {
        return pi() * $this->rayon * $this->rayon;
    }
}
?>
