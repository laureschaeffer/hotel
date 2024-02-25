<?php

class Chambre{
    private int $numero;
    private float $prix;
    private int $nbLits;
    private bool $wifi;

    public function __construct(int $numero, float $prix, int $nbLits, bool $wifi){
        $this->numero=$numero;
        $this->prix=$prix;
        $this->nbLits=$nbLits;
        $this->wifi=$wifi;
    }

    // getters et setters


    public function getNumero()
    {
        return $this->numero;
    }


    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }


    public function getPrix()
    {
        return $this->prix;
    }


    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }


    public function getNbLits()
    {
        return $this->nbLits;
    }


    public function setNbLits($nbLits)
    {
        $this->nbLits = $nbLits;

        return $this;
    }


    public function getWifi()
    {
        return $this->wifi;
    }


    public function setWifi($wifi)
    {
        $this->wifi = $wifi;

        return $this;
    }

    //tostring
    public function __toString(){
        return "Chambre : ".$this->numero;
    }
}