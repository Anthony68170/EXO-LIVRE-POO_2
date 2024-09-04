<!-- CODE INDEX -->


<?php

// INTEGRER LES DONNEES DES CLASSES PRECEDEMMENT DEFINIES
include "Livre.php";
include "Auteur.php";




// CREER OBJETS

// auteur
$auteur1 = new Auteur("Stephen", "King");
$auteur2 = new Auteur("Stephen", "King");
$auteur3 = new Auteur("Stephen", "King");

// livre
$livre1 = new Livre("Ca", 1138, 1983, 20, $auteur);
$livre2 = new Livre("Ca", 1138, 1983, 20, $auteur);
$livre3 = new Livre("Ca", 1138, 1983, 20, $auteur);
$livre4 = new Livre("Ca", 1138, 1983, 20, $auteur);
$livre5 = new Livre("Ca", 1138, 1983, 20, $auteur);




echo "Bibliographie de " . $auteur . " ";
echo $livre -> getAuteur()->getNom();





// var_dump($auteur);
// var_dump($livre);