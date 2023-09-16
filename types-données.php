<?php
$entier = 52;
$flottant = 3.14;
$chaine = "hello, world!";
$tableau = [1, 2, 3];
$booleen = true;
// Echo permet d'afficher une valeur de sortir dans la console
echo "voici un exemple d'entier : $entier \n";
echo "voici un exemple d'flottant : $flottant \n";
echo "voici un exemple d'chaine : $chaine \n";
echo "voici un exemple d'booleen : $booleen \n";
echo "voici un exemple d'tableau : " . implode(', ', $tableau) . "\n";


$MoyenneDeClasse = ["président", "Benzema", "bondoukou", "zanzan", "07-57-70-91-88", "ingenieur logiciel", 42];
echo 'je suis ' . $MoyenneDeClasse[0] . ' ' . $MoyenneDeClasse[1] . ', je réside à ' . $MoyenneDeClasse[2]
. ' precisement au ' . $MoyenneDeClasse[3] . ',je suis un ' . $MoyenneDeClasse[5]. 'et je suis un jeune de ' . $MoyenneDeClasse[6]
. 'ans, mon numero est  ' . $MoyenneDeClasse[4];
