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

    


    //reservations d'un client
    public function afficherReservation(){
        ?> <div class="card">
            <div class="card-header">
                <p>Réservation de <?=$this ?></p>
            </div>
            <div class="card-body">
                <p class="green"><?= count($this->reservations); ?> réservation </p>
                <?php $prixTotal=0 ; ?>
               <?php foreach($this->reservations as $reservation){ 
                // calcul prix du sejour = prix de la chambre * (1 + nb de jours du séjour)
                $prixSejour= ($reservation->getChambre()->getPrix()) * (1 + $reservation->dureeSejour()) ;
                $prixTotal+=$prixSejour ;
                ?>
                
                <p><span class="bold"><?=$reservation->getChambre()->getHotel()?> </span> / <?=$reservation->getChambre()->afficherInfo()." du ".$reservation ?> </p>
                <?php
               } ?>
               <p>Prix total : <?= $prixTotal ?> €</p>
            
             </div>
           </div>
<?php
    }

  
}