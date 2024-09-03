<?php

$auteur = new Auteur("Stephen", "King");
$poste = new Livre($auteur,"Ca", 1138, 1983, 20);

public function __toString(){
    return $this->_auteur . " " . $this->_livre;
}

afficherBibliographie();