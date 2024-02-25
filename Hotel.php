<?php

class Hotel{
    private string $nom;
    private string $nbEtoiles; // "***"
    private int $nbChambres;
    private string $adresse;
    private string $ville;
    private string $cp;

    public function __construct(string $nom, string $nbEtoiles, int $nbChambres, string $adresse, string $ville, string $cp){
        $this->nom=$nom;
        $this->nbEtoiles=$nbEtoiles;
        $this->nbChambres=$nbChambres;
        $this->adresse=$adresse;
        $this->ville=$ville;
        $this->cp=$cp;
    }

    // getters et setters


    public function getNom()
    {
        return $this->nom;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }


    public function getNbEtoiles()
    {
        return $this->nbEtoiles;
    }


    public function setNbEtoiles($nbEtoiles)
    {
        $this->nbEtoiles = $nbEtoiles;

        return $this;
    }


    public function getNbChambres()
    {
        return $this->nbChambres;
    }


    public function setNbChambres($nbChambres)
    {
        $this->nbChambres = $nbChambres;

        return $this;
    }

 
    public function getAdresse()
    {
        return $this->adresse;
    }


    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }
    
    
    
    public function getVille()
    {
        return $this->ville;
    }
    
    
    public function setVille($ville)
    {
        $this->ville = $ville;
        
        return $this;
    }
    
    public function getCp()
    {
        return $this->cp;
    }
    
    
    public function setCp($cp)
    {
        $this->cp = $cp;
        
        return $this;
    }

    //tostring
    public function __toString(){
        return $this->nom." ".$this->nbEtoiles." ".$this->ville;
    }
}