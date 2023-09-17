<?php
include 'employe.php';

$employe = new Employe("John Doe", 30, 50000);

echo "Nom : " . $employe->getNom() . "\n";
echo "Âge : " . $employe->getAge() . " ans\n";
echo "Salaire : " . number_format($employe->getSalaire(), 0, ',', ' ') . " FCFA\n";
