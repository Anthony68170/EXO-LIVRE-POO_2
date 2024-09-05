
<!-- CODE AUTEUR -->
<?php

class Auteur{
    private string $_prenom;
    private string $_nom;
    private array $_livres;// PROPRIETE qui sera un TABLEAU de livres 

    public function __construct($prenom, $nom,){// Initialise les propriétés intégrées à l'auteur
        $this -> _prenom = $prenom;
        $this -> _nom = $nom;
        
        //Stock les livres de l'auteur
        $this->_livres = array();// le TABLEAU A INITILALISER VIDE de livre est à la base un tableai vide
    }

    public function afficherBibliographie(){ //PARCOURIR LES LIVRES DE L'AUTEUR
        // le tableau de livres lié à auteur fait une boucle le tableau de livre avec foreach 
        echo "Binliographie de " .$this->$auteur;
        foreach ($this -> _livres as $value) { // Pour parcourir chaque livre du tableau
            # code...
            echo _livres->__toString($auteur);
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
      public function __toString(){ //TOSTRING RETOURNE PRENOM ET NOM par la function public
        return $this->_prenom . " " . $this->_nom;
        }


        // public function getAuteur(){
        //     return $this->_auteur;
        //   }
      }
 
