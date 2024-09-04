
<!-- CODE AUTEUR -->
<?php

class Auteur{
    private string $_prenom;
    private string $_nom;
    private array $_livres;// PROPRIETE qui sera un TABLEAU de livres 

    public function __construct($prenom, $nom,){
        $this -> _prenom = $prenom;
        $this -> _nom = $nom;
        
        $this->_livres = array();// le TABLEAU A INITILALISER VIDE de livres est à la base un tableai vide
    }

    public function afficherBibliographie(){
        // tableau de livre dans auteur faire boucle sur le tableau de livre  avec foreach 
        foreach ($_livres as $key => $value) {
            # code...
            echo $_livre->_toString();
        }
    }
    public function ajouterLivre($livre){ //1_DONNER OBJET LIVRE et 2__LIVRE A INJECTER DANS TABLEAU(de l'auteur)
        // 1_en argument de la fonction on va lui donner un objet Livre
        // 2_puis dans la fonction on va lui dire que l'objet donné onzargument sera injecté dans le tableau de livres de l'auteur
        $this ->_livres[] = $livre;
        
    }
    public function getPrenom(){
        return $this->_prenom;
      }
      public function getNom(){
        return $this->_nom;
      }
      public function __toString(){
        return $this->_prenom . " " . $this->_nom;
        }


        // public function getAuteur(){
        //     return $this->_auteur;
        //   }
      }
 
