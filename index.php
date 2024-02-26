<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

//HOTEL string $nom, string $nbEtoiles, string $adresse, string $ville, string $cp
$hilton= new Hotel("Hilton", "****", "10 route de la Gare", "Strasbourg", "67000");
$regent= new Hotel("Le Regent", "****", "61 rue Dauphine, 6e arr.", "Paris", "75006"); 

//CHAMBRE int $numero, float $prix, int $nbLits, bool $wifi, Hotel $hotel
$chambre1= new Chambre(1, 100.0, 2, "oui", $hilton);
$chambre2= new Chambre(2, 200.0, 2, "oui", $hilton);
$chambre3= new Chambre(3, 100.0, 2, "non", $hilton);
$chambre4= new Chambre(4, 100.0, 2, "oui", $hilton);
$chambre5= new Chambre(5, 100.0, 2, "non", $hilton);
$chambre6= new Chambre(6, 250.0, 2, "oui", $hilton);
$chambre7= new Chambre(7, 100.0, 2, "non", $hilton);
$chambre8= new Chambre(8, 100.0, 2, "oui", $hilton);
$chambre9= new Chambre(9, 100.0, 2, "oui", $hilton);
$chambre10= new Chambre(10, 85.0, 2, "non", $hilton);
$chambre11= new Chambre(11, 100.0, 2, "oui", $hilton);
$chambre12= new Chambre(12, 100.0, 2, "oui", $hilton);
$chambre13= new Chambre(13, 80.0, 2, "non", $hilton);
$chambre14= new Chambre(14, 100.0, 2, "oui", $hilton);
$chambre15= new Chambre(15, 100.0, 2, "oui", $hilton);
$chambre15= new Chambre(15, 200, 3, "oui", $hilton);
$chambre16= new Chambre(16, 200, 3, "oui", $hilton);
$chambre17= new Chambre(17, 200, 3, "oui", $hilton);
$chambre18= new Chambre(18, 200, 3, "oui", $hilton);
$chambre19= new Chambre(19, 200, 3, "oui", $hilton);
$chambre20= new Chambre(20, 200, 3, "oui", $hilton);
$chambre21= new Chambre(21, 200, 3, "oui", $hilton);
$chambre22= new Chambre(22, 200, 3, "oui", $hilton);
$chambre23= new Chambre(23, 200, 3, "oui", $hilton);
$chambre24= new Chambre(24, 200, 3, "oui", $hilton);
$chambre25= new Chambre(25, 200, 3, "oui", $hilton);
$chambre26= new Chambre(26, 200, 3, "oui", $hilton);
$chambre27= new Chambre(27, 200, 3, "oui", $hilton);
$chambre28= new Chambre(28, 200, 3, "oui", $hilton);
$chambre29= new Chambre(29, 200, 3, "oui", $hilton);
$chambre30= new Chambre(30, 200, 3, "oui", $hilton);

//CLIENT string $prenom, string $nom
$laureSchaeffer= new Client("Laure", "Schaeffer");
//RESERVATION string $debutReservation, string $finReservation, Hotel $hotel, Client $client, Chambre $chambre
$reserv1= new Reservation("2024-02-25", "2024-02-28", $hilton, $laureSchaeffer, $chambre1);


echo $chambre1;
echo "<br>";
echo $laureSchaeffer;
echo "<br>";
echo $hilton->afficherInfo();
echo "<br>";
// echo $hilton->afficherChambres()."<br>";
echo($hilton->nbChambres());
echo "<br>";
echo($hilton->nbReservation());
echo "<br>";
echo($hilton->nbChambresDispo());
echo "<br>";
echo $reserv1->afficherInfo();
echo "<br>";
echo $reserv1->prixSejour();
