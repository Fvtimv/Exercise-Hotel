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

// pas de ajouterClient car it's already a variable
    // public function ajouterClient($client){
    //     $this -> _client -> $client;
    // }

  




    public function __toString(){
        //sans sa la page show an error pck I tried to afficher un objet DateTime sous forme de chaîne de caractères, ce qui n'est pas possible.
        //Pour afficher ces dates correctement, vous devez les convertir en chaînes de caractères en utilisant la 
        //méthode "format" de l'objet DateTime, qui accepte un paramètre de formatage pour spécifier comment la date doit être affichée.
        $dateDebut = $this -> _dateDebut -> format('d-m-Y');  
        $dateFin = $this -> _dateFin -> format('d-m-Y'); 
        return $dateDebut ." " .$dateFin ." " ."<br>";
    }

}