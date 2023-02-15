<h1>POO Hotel</h1>
<p>A partir de ces captures d’écran, réaliser l’application en 
    POO permettant la gestion de réservations de chambres par 
    des clients dans différents hôtels</p>

<?php

spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
    });


$hotel1 = new Hotel ("Hilton", "Strasbourg", "10 route de la Gare", "67000");
$hotel2 = new Hotel ("Regent", "Paris");

$reservation1 = new Reservation ($hotel1, $client2, $chambre17, 
                                "01-01-2021", "01-01-2021");
$reservation1 = new Reservation ($hotel1, $client1, $chambre3, 
                                "11-03-2021", "11-03-2021");
$reservation1 = new Reservation ($hotel1, $client1, $chambre4, 
                                "01-04-2021", "01-04-2021");

$client1 = new Client ("MURMANN", "Micka");
$client2 = new Client ("GIBELLO", "Virgile");


$chambre1 = new Chambre ("1", "non", nbLit, "120€", "DISPONIBLE" $hotel1);
$chambre2 = new Chambre ("2", "non", nbLit, "120€", "DISPONIBLE" $hotel1);
$chambre3 = new Chambre ("3", "non", 2, "120€", "RESERVE" $hotel1);
$chambre4 = new Chambre ("4", "non", 2, "120€", "RESERVE" $hotel1);
$chambre16 = new Chambre ("16", "oui", nbLit, "120€", "DISPONIBLE" $hotel1);
$chambre17 = new Chambre ("17", "oui", nbLit, "120€", "RESERVE" $hotel1);
$chambre18 = new Chambre ("18", "oui", nbLit, "120€", "DISPONIBLE" $hotel1);
$chambre19 = new Chambre ("19", "oui", nbLit, "120€", "DISPONIBLE" $hotel1);












?>