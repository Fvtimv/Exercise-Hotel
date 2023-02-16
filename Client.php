<?php

class Client{
    private string $_nom;
    private string $_prenom;
    private array $_reservations; // c par la suite la creation de reservation
    // private Hotel $_hotel;
    

    public function __construct($nom, $prenom){
        $this -> _nom = $nom;
        $this -> _prenom = $prenom;
        $this -> _reservations = array();
        // $this -> _hotel = $hotel;
    }




    public function getNom(){
        return $this->_nom;
    }

    public function setNom($nom){
        $this->_nom = $nom;

        return $this;
    }

    public function getPrenom(){
        return $this->_prenom;
    }

    public function setPrenom($prenom){
        $this->_prenom = $prenom;

        return $this;
    }



    public function ajouterReservation($reservation){
        $this -> _reservations[] = $reservation;
    }

    // public function reservationsClient(){
    //     foreach ($this -> _reservations as $reservation){
    //     echo "<span style = 'font-weight : bold'> Hotel :" .$this -> _hotel = getNomHotel()
    //     ." "  ."****" ." " .$this -> _hotel = getVille() ."</span>";
    // }
    // }



    public function __toString(){
        return $this -> _nom ." " .$this -> _prenom ." " ."<br>";
    }



}