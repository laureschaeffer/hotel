<?php

class Client{
    private string $prenom;
    private string $nom;
    private array $reservations;

    public function __construct(string $prenom, string $nom){
        $this->prenom=$prenom;
        $this->nom=$nom;

        // tableau qui va contenir l'objet Client et objet Chambre (qui contient lui-même l'hotel)
        $this->reservations=[];
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
        return $this->prenom." ".$this->nom;
    }
    
    // ------------méthodes-----------
    
    //fonction que je vais appeler dans l'objet Reservation
    public function ajouterReservation(Reservation $reservation){
        $this->reservations[]=$reservation;
    }
    // prix du séjour
public function prixSejour(){
    foreach($this->reservations as $reservation){
        $dureeSejour=$reservation->getFinReservation()->diff($reservation->getDebutReservation())->days;
        $prixSejour=$dureeSejour * ($reservation->getChambre()->getPrix());
    }
    return $prixSejour ;
    }

    //reservations d'un client
    public function afficherReservation(){
        foreach($this->reservations as $reservation){
            echo "<h3> Réservation de : ".$this."</h3> Hotel : ".$reservation->getChambre()->getHotel()." / ".$reservation->getChambre()->afficherInfo()." du ".$reservation."<br> Prix total : ".$this->prixSejour()." € ";
        }
    }

    
    
}