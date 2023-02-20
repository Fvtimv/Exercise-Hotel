<?php

class Client{
    private string $_nom;
    private string $_prenom;
    private array $_reservations; // c par la suite la creation de reservation

    

    public function __construct($nom, $prenom){
        $this -> _nom = $nom;
        $this -> _prenom = $prenom;
        $this -> _reservations = array();
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


    public function prixTotal(){
        $totalClient = 0;
        foreach ($this -> _reservations as $reservation){
        $totalClient = $totalClient + $reservation -> calcPrix();
        } 
        return $totalClient;
    }


    public function reservationClient(){
        echo "<h3> Réservations de " .$this -> _prenom ." " .$this -> _nom ."</h3>";
        echo '<button class = "btn btn-success" style = "background-color: #9AD06E; color:white; border-color:#9AD06E">' .count($this->_reservations) ." RESERVATIONS" .'</button>' ."<br><br>";
        foreach ($this -> _reservations as $reservation){
            echo $reservation -> infoReservation();
        }
        echo "Total : " .$this -> prixTotal()  ."<br>";
    }


    public function __toString(){
        return $this -> _prenom ." " .$this -> _nom ." " ;
    }





}   






























// public function reservationsClient(){
    //     foreach ($this -> _reservations as $reservation){
    //     echo "<span style = 'font-weight : bold'> Hotel :" .$this -> _hotel = getNomHotel()
    //     ." "  ."****" ." " .$this -> _hotel = getVille() ."</span>";
    // }
    // }

