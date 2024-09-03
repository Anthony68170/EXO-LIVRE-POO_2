<?php
include "Livre.php";
include "Auteur.php";
$auteur = new Auteur("Stephen", "King");
$livre = new Livre($auteur,"Ca", 1138, 1983, 20);


var_dump($auteur);
