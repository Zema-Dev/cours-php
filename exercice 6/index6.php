<?php
include 'carre-cercle.php';

$carre = new Carre(5);
$cercle = new Cercle(4);

echo "Surface du carré : " . $carre->calculerSurface() . "\n";
echo "Surface du cercle : " . $cercle->calculerSurface() . "\n";
?>
