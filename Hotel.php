<?php

class Hotel{
    private string $nom;
    private string $nbEtoiles; // "***"
    private string $adresse;
    private string $ville;
    private string $cp;
    private array $chambres;

    public function __construct(string $nom, string $nbEtoiles, string $adresse, string $ville, string $cp){
        $this->nom=$nom;
        $this->nbEtoiles=$nbEtoiles;
        $this->adresse=$adresse;
        $this->ville=$ville;
        $this->cp=$cp;

        //tableau qui contient toutes les chambres de l'hotel
        $this->chambres=[];
        
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



    //tostring
    public function __toString(){
        return $this->nom." ".$this->nbEtoiles." ".$this->ville;
    }

    // ----------------méthodes------------- 

    //fonction que je vais appeler dans la classe Chambre
    public function ajouterChambre(Chambre $chambre){
        $this->chambres[]=$chambre;
    }


    //affiche toute les infos de l'hotel
    public function afficherInfo(){
        return $this->adresse." ".$this->cp." ".$this->ville;
    }


    public function nbChambres(){
        $nbChambres=count($this->chambres);
        return $nbChambres;
    }

    // calcule le nb de chambres prises ; je parcours le tableau chambre et cherche le getter getReservation, si ce tableau n'est pas vide alors il y a une réservation, à chaque tour il en ajoute un au compte
    public function nbChambresRsv(){
        $nbChambresRsv=0;
        foreach($this->chambres as $chambre){
            if(count($chambre->getReservations()) > 0){
                $nbChambresRsv ++;
            }
        }
        return $nbChambresRsv;
    }
    
    public function nbChambresDispo(){
        $nbChambresDispo= ($this->nbChambres()) - ($this->nbChambresRsv());
        return $nbChambresDispo ;
    }

    // listes des chambres avec leurs statuts
    public function statutChambre(){
        ?> <div class="card-header"> 
            <p>Statuts des chambres de <span class="bold"><?=$this ?> </span></p>
        
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Chambre</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Wifi</th>
                    <th scope="col">Etat</th>
                </tr>
            </thead>
            <tbody>
                
                <?php foreach ($this->chambres as $chambre) {
                ?> <tr>
                    <td> <?= $chambre ?> </td> 
                    <td><?= $chambre->getPrix() ?> € </td>
                    <?php if ($chambre->getWifi()=="oui"){
                      ?>  <td><i class="fa-solid fa-wifi"></i></td>
                        <?php
                    } else {
                        ?> <td></td>
                   <?php }
                    if (count($chambre->getReservations()) > 0) {
                    ?><td class="red">RESERVE</td>
                     <?php } else {
                    ?><td class="green">DISPONIBLE</td> 
                    </tr>
                    
                    <?php
            }
        } ?> 
            </tbody>
        </table>
<?php

}
        
    // chiffres sur les chambres de l'hotel
    public function infoHotel(){
        ?>
        <div class="card">
            <div class="card-header">
                <p><?=$this ?></p>
            </div>
            <div class="card-body">
                <p><?= $this->afficherInfo() ?></p>
                <p>Nombres de chambres : <?=$this->nbChambres() ?></p>
                <p>Nombre de chambres réservées : <?=$this->nbChambresRsv() ?></p>
                <p>Nombre de chambres dispo :  <?=$this->nbChambresDispo() ?></p>
            </div>
        </div>
        <?php
    }


    // affiche s'il y en a les réservations de l'hotel
    public function afficherReservation(){ ?>
        <div class="card">
            <div class="card-header">
                <p>Réservations de l'hotel <?= $this ?></p>
            </div>
            <div class="card-body">
        <?php
        if ($this->nbChambresRsv() >= 1) { ?>
            <p class="green"> <?=$this->nbChambresRsv() ?> réservations </p>
                
            <?php
            // comme getReservations renvoie un tableau il faut deux boucles pour le parcourir et accéder aux getters nécessaires
            foreach ($this->chambres as $chambre) {
                foreach ($chambre->getReservations() as $reservation) { ?>
                <p><?= $reservation->getClient() ?> - <?=$chambre?> du <?= $reservation ?></p>
                <?php
                }
            }
        } else { ?>
                <p>Aucune réservation ! </p>
                <?php
        } ?>
            </div> 
        </div>
        <?php
    }


}