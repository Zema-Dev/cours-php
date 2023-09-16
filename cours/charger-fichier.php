<?php

try {
    $monFichier = fopen("monfichier.txt", "r");
    $contenu = fread($monFichier, filesize("monfichier.txt"));
    fclose($monFichier);
    echo "$contenu";
} catch (\Exception $th) {
    echo "Une erreur s'est produite  $th->getMessage() ";
}
?>
