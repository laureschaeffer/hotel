<?php

class Chambre{
    private int $numero;
    private float $prix;
    private int $nbLits;
    private string $wifi;
    private Hotel $hotel;
    private array $reservations;

    public function __construct(int $numero, float $prix, int $nbLits, string $wifi, Hotel $hotel){
        $this->numero=$numero;
        $this->prix=$prix;
        $this->nbLits=$nbLits;
        $this->wifi=$wifi;
        $this->hotel=$hotel;
        // dans la méthode déclarée dans la classe Hotel, j'ajoute l'objet Chambre au tableau
        $this->hotel->ajouterChambre($this);
        // tableau qui va contenir l'objet Client et l'objet Chambre (qui contient lui-même l'hotel)
        $this->reservations=[];

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

    public function getHotel()
    {
        return $this->hotel;
    }


    public function setHotel($hotel)
    {
        $this->hotel = $hotel;

        return $this;
    }

    public function getReservations()
    {
        return $this->reservations;
    }


    public function setReservations($reservations)
    {
        $this->reservations = $reservations;

        return $this;
    }
    //tostring
    public function __toString(){
        return "Chambre : ".$this->numero;
    }

    // ----- méthodes -------------

    //fonction que je vais appeler dans l'objet Reservation
    public function ajouterReservation(Reservation $reservation){
        $this->reservations[]=$reservation;
    }


    
    public function afficherInfo(){
        return $this." (".$this->nbLits." lits - ".$this->prix." € - Wifi : ".$this->wifi.")";
    }

    public function dump(){
        var_dump($this->reservations);
    }





}