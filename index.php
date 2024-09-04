<!-- CODE INDEX -->

<?php

// INTEGRER LES DONNEES DES CLASSES PRECEDEMMENT DEFINIES
include "Livre.php";
include "Auteur.php";




// CREER OBJETS

// auteur
$auteur1 = new Auteur("Stephen", "King");
$auteur2 = new Auteur("Isaac", "Asimov");
$auteur3 = new Auteur("Ada", "Lovelace");

// livre
$livre1 = new Livre("Ca", 1138, 1983, 20, $auteur1);
$livre2 = new Livre("Simetierre", 374, 1983, 15, $auteur1);
$livre3 = new Livre("Fondation", 255, 1951, 18, $auteur2);
$livre4 = new Livre("Les Robots", 320, 1950, 17, $auteur2);
$livre5 = new Livre("Introduction to Analytical ENgine", 60, 1843, 25, $auteur3);
$livre6 = new Livre("Voyage dans le Cyberespace", 300, 2022, 22, $auteur3);



echo "Bibliographie de " . $auteur1 . "<br> ";
// echo $livre1 . "<br>" ;


// echo $livre2 -> getAuteur()->getNom();

// echo "Bibliographie de " . $auteur2 . " ";
// echo $livre3 -> getAuteur()->getNom();
// echo $livre4 -> getAuteur()->getNom();

// echo "Bibliographie de " . $auteur3 . " ";
// echo $livre5 -> getAuteur()->getNom();
// echo $livre6 -> getAuteur()->getNom();


var_dump($auteur1);
// var_dump($livre);