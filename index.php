<h1>POO Hotel</h1>
<p>A partir des captures d’écran, réaliser l’application en 
    POO permettant la gestion de réservations de chambres par 
    des clients dans différents hôtels</p>

<?php

spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
    });


$hotel1 = new Hotel ("Hilton", "Strasbourg", "10 route de la Gare", "67000");
$hotel2 = new Hotel ("Regent", "Paris", "22 rue du Bébarcadère", "75017");



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
                                "01-04-2021", "01-04-2021");
$reservation2 = new Reservation ($hotel1, $client1, $chambre3, 
                                "11-03-2021", "15-03-2021");
$reservation3 = new Reservation ($hotel1, $client1, $chambre4, 
                                "01-04-2021", "17-04-2021");



// echo $hotel1 -> infoHotel();
// echo $hotel2 -> infoHotel();
// echo $hotel1 -> reservations();
// echo $hotel2 -> reservations();
// echo $client1 -> reservationClient();
// echo $hotel1 -> statutChambres();



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="uk-card uk-card-secondary uk-card-body uk-width-1-2@m">
    <h3 class="uk-card-title"> </h3>
    <p> <?php echo $hotel1 -> infoHotel()?> </p>
</div>
<div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
    <h3 class="uk-card-title"> </h3>
    <p> <?php echo $hotel2 -> infoHotel()?> </p>
</div>
<div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
    <h3 class="uk-card-title"></h3>
    <p> <?php echo $hotel1 -> reservations() ?> </p>
</div>
<div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
    <h3 class="uk-card-title"></h3>
    <p> <?php echo $hotel2 -> reservations() ?> </p>
</div>
<div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
    <h3 class="uk-card-title"></h3>
    <p> <?php echo $client1 -> reservationClient() ?> </p>
</div>
<div class="uk-overflow-auto uk-height-small">
    <table class="uk-table uk-table-striped uk-table-condensed uk-text-nowrap">
    <?php echo $hotel1 -> statutChambres() ?>
</div>
</body>
</html>

