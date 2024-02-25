<?php

class Client{
    private string $prenom;
    private string $nom;

    public function __construct(string $prenom, string $nom){
        $this->prenom=$prenom;
        $this->nom=$nom;
    }

    //getters et setters


    public function getPrenom()
    {
        return $this->prenom;
    }


    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }


    public function getNom()
    {
        return $this->nom;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    //tostring
    public function __toString(){
        return $this->prenom." ".$this->nom;
    }
}