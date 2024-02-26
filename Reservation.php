<?php

class Reservation{
    private dateTime $debutReservation;
    private DateTime $finReservation;
    private Hotel $hotel;
    private Client $client;
    private Chambre $chambre;


    public function __construct(string $debutReservation, string $finReservation, Hotel $hotel, Client $client, Chambre $chambre){
        $this->debutReservation= new DateTime($debutReservation);
        $this->finReservation= new DateTime($finReservation);
        $this->hotel=$hotel;
        $this->client=$client;
        $this->chambre=$chambre;

        //methodes dans leurs classes respectives
        $this->hotel->ajouterReservation($this);
        $this->client->ajouterReservation($this);
        $this->chambre->ajouterReservation($this);

    }

    // getters et setters


    public function getDebutReservation()
    {
        return $this->debutReservation;
    }


    public function setDebutReservation($debutReservation)
    {
        $this->debutReservation = $debutReservation;

        return $this;
    }

 
    public function getFinReservation()
    {
        return $this->finReservation;
    }


    public function setFinReservation($finReservation)
    {
        $this->finReservation = $finReservation;

        return $this;
    }


    public function getHotel()
    {
        return $this->hotel;
    }


    public function setHotel($hotel)
    {
        $this->hotel = $hotel;

        return $this;
    }


    public function getClient()
    {
        return $this->client;
    }


    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }


    public function getChambre()
    {
        return $this->chambre;
    }

    public function setChambre($chambre)
    {
        $this->chambre = $chambre;

        return $this;
    }


    //tostring
    public function __toString(){
        return $this->debutReservation->format('d-m-Y')." au ".$this->finReservation->format('d-m-Y');
    }

    // ---------------------------methodes--------------------- 
    public function afficherInfo(){
        return $this->client." dans l'hotel ".$this->hotel." du ".$this." ".$this->chambre;
    }
    
    // afficher la durée du sejour
    public function nbJours(){
        $dureeSejour = $this->finReservation->diff($this->debutReservation)->days;
        return $dureeSejour;
    }

    // afficher le prix du séjour
    public function prixSejour(){
        $dureeSejour = $this->finReservation->diff($this->debutReservation)->days;
        $prixChambre=$this->chambre->getPrix();
        $prixSejour=$dureeSejour * $prixChambre;
        return $prixSejour;
    }



}