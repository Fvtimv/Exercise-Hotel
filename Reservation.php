<?php

class Reservation{
    private Hotel $_hotel;
    private Client $_client;
    private Chambre $_chambre;
    private DateTime $_dateDebut;
    private DateTime $_dateFin;
    

    public function __construct($hotel, $client, $chambre, $dataDebut, $dateFin){
        $this -> _hotel = $hotel;
        $this -> _client = $client;
        $this -> _chambre = $chambre;
        $this -> _dateDebut = $dateDebut;
        $this -> _dateFin = $dateFin;
        $hotel -> ajouterReservation($this);
        $client -> ajouterClient($this);
        $chambre -> ajouterChambre($this);
    }
    // ajouterreservation dans hotel dans construct (dans hotel)


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


    public function ajouterClient($client){
        $this -> _client -> $client;
    }









    public function __toString(){
        return $this -> _dateDebut ." " .$this -> _dateFin ." " ."<br>";
    }

}