<h1>POO Hotel</h1>
<p>A partir des captures d’écran, réaliser l’application en 
    POO permettant la gestion de réservations de chambres par 
    des clients dans différents hôtels</p>

<?php

spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
    });


$hotel1 = new Hotel ("Hilton", "Strasbourg", "10 route de la Gare", "67000");
$hotel2 = new Hotel ("Regent", "Paris", "adresse", "code postale");



$client1 = new Client ("MURMANN", "Micka");
$client2 = new Client ("GIBELLO", "Virgile");


$chambre1 = new Chambre ("1", false, 1, 120.0, false, $hotel1);
$chambre2 = new Chambre ("2", false, 1, 120.0, false, $hotel1);
$chambre3 = new Chambre ("3", false, 2, 120.0, true, $hotel1);
$chambre4 = new Chambre ("4", false, 2, 120.0, true, $hotel1);
$chambre16 = new Chambre ("16", true, 1, 300.0, false, $hotel1);
$chambre17 = new Chambre ("17", true, 1, 300.0, true, $hotel1);
$chambre18 = new Chambre ("18", true, 1, 300.0, false, $hotel1);
$chambre19 = new Chambre ("19", true, 1, 300.0, false, $hotel1);



$reservation1 = new Reservation ($hotel1, $client2, $chambre17, 
                                "01-01-2021", "01-01-2021");
$reservation2 = new Reservation ($hotel1, $client1, $chambre3, 
                                "11-03-2021", "15-03-2021");
$reservation3 = new Reservation ($hotel1, $client1, $chambre4, 
                                "01-04-2021", "17-04-2021");


// var_dump($hotel1);

echo $hotel1 -> infoHotel();
echo $hotel1 -> infoReservation();
echo $hotel2 -> infoReservation();
// echo $client1 -> reservationsClient();
echo $hotel1 -> detailHotel();




?>