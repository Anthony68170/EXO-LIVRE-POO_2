<?php


class Livre{
    private $_titre;
    private $_nbpages;
    private $_anparution;
    private $_prix;
    private $_auteur;
    
    
    public function __construct($titre, $nbpages, $anparution, $prix, $auteur,) {
        $this->_titre = $titre;
        $this->_nbpages = $nbpages;
        $this->_anparution = $anparution;
        $this->_prix = $prix;
        $this->_auteur = $auteur;
    }
    
  public function getTitre(){
    return $this->_titre;
  }
  public function getNbpages(){
    return $this->_nbpages;
  }
  public function getAnparution(){
    return $this->_anparution;
  }
  public function getPrix(){
    return $this->_prix;
  }


  public function setTitre(){
    return $this->_titre; 
  }
  public function setNbpages(){
    return $this->_nbpages;
  }
  public function setAnparution(){
    return $this->_anparution;
  }
  public function setPrix(){
    return $this->_prix;
  }
  public function setAuteur(){
    return $this->_auteur;
  }
}

$poste = new Livre ("Ca", 1138,  1983, 20);
echo $poste->getTitre();
