<?php

class Hotel{
    private string $nom;
    private string $nbEtoiles; // "***"
    private string $adresse;
    private string $ville;
    private string $cp;
    private array $chambres;
    private array $reservations;

    public function __construct(string $nom, string $nbEtoiles, string $adresse, string $ville, string $cp){
        $this->nom=$nom;
        $this->nbEtoiles=$nbEtoiles;
        $this->adresse=$adresse;
        $this->ville=$ville;
        $this->cp=$cp;

        //tableau qui contient toutes les chambres de l'hotel
        $this->chambres=[];
        // tableau qui va contenir l'objet Hotel, objet Client et objet Chambre
        $this->reservations=[];
        
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

    
    public function getChambres()
    {
        return $this->chambres;
    }
    
    
    public function setChambres($chambres)
    {
        $this->chambres = $chambres;
        
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
        return $this->nom." ".$this->nbEtoiles." ".$this->ville;
    }

    // ----------------méthodes------------- 

    //fonction que je vais appeler dans la classe Chambre
    public function ajouterChambre(Chambre $chambre){
        $this->chambres[]=$chambre;
    }

    //fonction que je vais appeler dans l'objet Reservation

    public function ajouterReservation(Reservation $reservation){
        $this->reservations[]=$reservation;
    }

    //affiche toute les infos
    public function afficherInfo(){
        return $this." ".$this->adresse." ".$this->cp;
    }
    // affiche tous les objets Chambres contenus dans le tableau
    public function afficherChambres(){
        $result= "<h3> Les chambres de l'hotel $this : </h3>";
        foreach($this->chambres as $chambre){
            $result.= $chambre."<br>";
        }
        return $result;
    }

    public function nbChambres(){
        return "Nombre de chambres : ".count($this->chambres);
    }

    public function nbReservation(){
        return "Nombre de chambres réservées : ".count($this->reservations);
    }

    public function nbChambresDispo(){
        return (count($this->chambres))-(count($this->reservations));
    }


}