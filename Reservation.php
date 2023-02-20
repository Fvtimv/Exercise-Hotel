<?php

class Reservation{
    private Hotel $_hotel;
    private Client $_client;
    private Chambre $_chambre;
    private DateTime $_dateDebut; // we use DateTime everytime there is a date format
    private DateTime $_dateFin;
    

    public function __construct($hotel, $client, $chambre, $dateDebut, $dateFin){
        $this -> _hotel = $hotel;
        $this -> _client = $client;
        $this -> _chambre = $chambre;
        $this -> _dateDebut = new DateTime ($dateDebut);
        $this -> _dateFin = new DateTime ($dateFin);
        $hotel -> ajouterReservation($this); // ici on declare that the function ajouterreservation it's gonna be put on $hotel
        $client -> ajouterReservation($this);// put on $client
        $chambre -> ajouterReservation($this);// put on $chambre
        $chambre -> setEtat(true);
    }
    // ajouterReservation dans hotel dans construct (dans hotel)


    public function getHotel(){
        return $this->_hotel;
    }

    public function setHotel($hotel){
        $this->_hotel = $hotel;

        return $this;
    }
    public function getClient(){
        return $this->_client;
    }

    public function setClient($client){
        $this->_client = $client;

        return $this;
    }

    public function getChambre(){
        return $this->_chambre;
    }

    public function setChambre($chambre){
        $this->_chambre = $chambre;

        return $this;
    }

    public function getDateDebut(){
        return $this->_dateDebut;
    }
 
    public function setDateDebut($dateDebut){
        $this->_dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(){
        return $this->_dateFin;
    }

    public function setDateFin($dateFin){
        $this->_dateFin = $dateFin;

        return $this;
    }



    public function infoReservation(){
        echo "Hotel : " .$this -> _hotel -> getNomHotel() ." **** " .$this -> _hotel -> getVille() ." / " 
        ."Chambre : " .$this -> _chambre -> getNbChambre() ." ( " .$this -> _chambre -> getNbLit() ." lits - " 
        .$this -> _chambre -> getPrix() ." € - Wifi"  ." : " .$this -> getchambre() -> getWifi() ." ) 
        " ." du "  .$this -> _dateDebut -> format('d-m-Y')." au " .$this -> _dateFin -> format('d-m-Y') ." " ."<br>";
    }


    public function calcDate(){
        $dateDebut = new DateTime ($this -> _dateDebut -> format('d-m-Y'));
        $dateFin = new DateTime ($this -> _dateFin -> format('d-m-Y'));
        $diff = $dateDebut -> diff($dateFin);
        return $diff -> d;
    }
    

   

    public function __toString(){
        //sans ça la page show an error pck I tried to afficher un objet DateTime sous forme de chaîne de caractères, ce qui n'est pas possible.
        //Pour afficher ces dates correctement, vous devez les convertir en chaînes de caractères en utilisant la 
        //méthode "format" de l'objet DateTime, qui accepte un paramètre de formatage pour spécifier comment la date doit être affichée.
        $dateDebut = $this -> _dateDebut -> format('d-m-Y');  
        $dateFin = $this -> _dateFin -> format('d-m-Y'); 
        return $this -> _client ." - " ." Chambre ".$this -> _chambre -> getNbChambre() ." - " .$dateDebut ." au " .$dateFin ." " ."<br>";
    }

}





















// pas de ajouterClient car it's already a variable
    // public function ajouterClient($client){
    //     $this -> _client -> $client;
    // }

  

    // public function infoReservation(){
    //     if ($this -> _hotel -> _reservations > 0){
    //   echo $this -> _client -> getPrenom() .$this -> _client -> getNom() ."-"  .$this -> _hotel -> _reservation ."<br>" ;
    //       //$reservation, $client(pour client et chambre it still doesn't work) here above will bring the toString that I made in class Reservation and Client
    //   } else {
    //   echo "Aucune réservation !";
    //  }
 
    // }



    // public function chambreReserve(){
    //     if ($this -> _chambre -> setEtat(true)){
    //         echo "Réservée <br>";
    //     }elseif ($this -> _chambre -> setEtat(false)) {
    //        echo "Disponible <br>";
    //     }
    // }
