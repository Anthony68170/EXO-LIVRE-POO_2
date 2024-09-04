<!-- CODE LIVRE -->
<?php

class Livre{
    private $_titre;
    private $_nbPages;
    private $_anParution;
    private $_prix;
    private $_auteur;
    
    

    public function __construct($titre, $nbpages, $anparution, $prix, $auteur,){
        $this->_titre = $titre;
        $this->_nbPages = $nbpages;
        $this->_anParution = $anparution;
        $this->_prix = $prix;
        $this->_auteur = $auteur;
    }
    

// Placer les getters

  public function getTitre(){
    return $this->_titre;
  }
  public function getNbpages(){
    return $this->_nbPages;
  }
  public function getAnparution(){
    return $this->_anParution;
  }
  public function getPrix(){
    return $this->_prix;
  }
  public function getAuteur(){
    return $this->_auteur;
  }


// Placer les setters
  public function setTitre($titre){
    return $this->_titre = $titre; 
  }
  public function setNbpages($nbpages){
    return $this->_nbPages = $nbpages;
  }
  public function setAnparution($anparution){
    return $this->_anParution = $anparution;
  }
  public function setPrix($prix){
    return $this->_prix = $prix;
  }
  public function setAuteur($auteur){
    return $this->_auteur = $auteur;
  }

  public function __toString(){
    return $this->_titre . " : " . $this->_nbPages . " pages. (" . $this->_anParution . ") " . $this->_prix . "€ ";
  }
}
// $auteur = new Auteur ("Stephen", "King");
// $livre1 = new Livre("Ca", 1138, 1983, 20, $auteur);
// $livre2 = new Livre("Simetiere", 374, 1983, 15, $auteur);

// echo "Bibliographie de " . $auteur . " ";

// var_dump($auteur);

// $livre= new Livre("Ca" . )
// public function __toString(){
//   return $this->_titre . " " . $this->_anparution . " "

// $poste = new Livre ("Ca", 1138,  1983, 20);
// echo $poste->getTitre();
