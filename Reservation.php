<?php

class Reservation{
    private dateTime $debutReservation;
    private DateTime $finReservation;
    private Client $client;
    private Chambre $chambre;


    public function __construct(string $debutReservation, string $finReservation, Client $client, Chambre $chambre){
        $this->debutReservation= new DateTime($debutReservation);
        $this->finReservation= new DateTime($finReservation);
        $this->client=$client;
        $this->chambre=$chambre;

        //methodes dans leurs classes respectives
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
        ?> <h3>Réservations de l'hotel <?= $this->chambre->getHotel() ?></h3>
        <p> <?= $this->client." - ".$this->chambre." du ".$this ?> </p>
        <?php
    }



}