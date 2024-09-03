<?php

class Auteur{
    private $_prenom;
    private $_nom;


    public function __construct($prenom, $nom,){
        $this -> _prenom = $prenom;
        $this -> _nom = $nom;
    }

    public function getPrenom(){
        return $this->_prenom;
      }
      public function getnom(){
        return $this->_prenom;
      }
      public function toString(){
        return $this->_prenom;
      }
}
