<?php

class Auteur{
    private string $_prenom;
    private string $_nom;


    public function __construct($prenom, $nom,){
        $this -> _prenom = $prenom;
        $this -> _nom = $nom;
    }

    public function getPrenom(){
        return $this->_prenom;
      }
      public function getnom(){
        return $this->_nom;
      }
      public function __toString(){
        return $this->_prenom . " " . $this->_nom;
        }
      }
 
