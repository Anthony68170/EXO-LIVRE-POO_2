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


  public function setTitre($titre){
    return $this->_titre; 
  }
  public function setNbpages($nbpages){
    return $this->_nbpages;
  }
  public function setAnparution($anparution){
    return $this->_anparution;
  }
  public function setPrix($prix){
    return $this->_prix;
  }
  public function setAuteur($auteur){
    return $this->_auteur;
  }
}

$livre= new Livre("Ca" . )
// public function __toString(){
//   return $this->_titre . " " . $this->_anparution . " "
}
// $poste = new Livre ("Ca", 1138,  1983, 20);
// echo $poste->getTitre();
