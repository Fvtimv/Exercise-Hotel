<?php

class Hotel{
    private string $_nomHotel;
    private string $_ville;
    private string $_adresse;
    private string $_codePostal;
    private array $_reservations;
    private array $_chambres;


    public function __construct($nomHotel, $ville, $adresse, $codePostal){
        $this -> _nomHotel = $nomHotel;
        $this -> _ville = $ville;
        $this -> _adresse = $adresse;
        $this -> _codePostal = $codePostal;
        $this -> _reservations = array();
        $this -> _chambre = array();
    }



    public function getNomHotel(){
        return $this->_nomHotel;
    }

    public function setNomHotel($nomHotel){
        $this->_nomHotel = $nomHotel;

        return $this;
    }

   public function getNbChambre(){
        return $this->_nbChambre;
    }

    public function setNbChambre($nbChambre){
        $this->_nbChambre = $nbChambre;

        return $this;
    }

    public function getVille(){
        return $this->_ville;
    }

    public function setVille($ville){
        $this->_ville = $ville;

        return $this;
    }

    public function getAdresse(){
        return $this->_adresse;
    }

    public function setAdresse($adresse){
        $this->_adresse = $adresse;

        return $this;
    }

    public function getChambreReserve(){
        return $this->_chambreReserve;
    }

    public function setChambreReserve($chambreReserve){
        $this->_chambreReserve = $chambreReserve;

        return $this;
    }

    public function getChambreDispo(){
        return $this->_chambreDispo;
    }

    public function setChambreDispo($chambreDispo){
        $this->_chambreDispo = $chambreDispo;

        return $this;
    }




    public function ajouterReservation($reservation){
        $this -> _reservations[] = $reservation;
    }

    public function ajouterChambre($chambre){
        $this -> _chambres[] = $chambre;
    }














    public function __toString(){
        return $this -> _nomHotel ." " .$this -> _ville ." " .$this -> _adresse
        ." " .$this -> _codePostal ."<br>";
    }
  

}