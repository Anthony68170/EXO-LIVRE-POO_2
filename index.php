<!-- CODE INDEX -->


<?php

// INTEGRER LES DONNEES DES CLASSES PRECEDEMMENT DEFINIES
include "Livre.php";
include "Auteur.php";

// CREER OBJETS
$auteur = new Auteur("Stephen", "King");
$livre = new Livre("Ca", 1138, 1983, 20, $auteur);


var_dump($auteur);
var_dump($livre);