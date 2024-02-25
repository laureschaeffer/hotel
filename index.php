<?php
require_once "Chambre.php";
require_once "Hotel.php";
require_once "Client.php";
require_once "Reservation.php";

//hotel string $nom, string $nbEtoiles, int $nbChambres, string $adresse, string $ville, string $cp

//chambre int $numero, float $prix, int $nbLits, bool $wifi

//client string $prenom, string $nom


//reservation string $debutReservation, string $finReservation, Hotel $hotel, Client $client, Chambre $chambre

$hilton= new Hotel("Hilton", "****", 30, "10 route de la Gare", "Strasbourg", "67000");

$chambre1= new Chambre(1, 100, 2, true);

$laureSchaeffer= new Client("Laure", "Schaeffer");

$reserv1= new Reservation("2024-02-25", "2024-02-28", $hilton, $laureSchaeffer, $chambre1);

echo $hilton;
echo "<br>";
echo $chambre1;
echo "<br>";
echo $laureSchaeffer;
echo "<br>";
echo $reserv1;