<?php

class Chambre {
    private string $_nbChambre;
    private bool $_wifi;
    private int $_nbLit;
    private float $_prix;
    private bool $_etat;
    private Hotel $_hotel;


    public function __construct($nbChambre, $wifi, $$nbLit, $prix, $etat, $hotel){
        $this -> _nbChambre = $nbChambre;
        $this -> _wifi = $wifi;
        $this -> _nbLit = $nbLit;
        $this -> _prix = $prix;
        $this -> _etat = $etat;
        $this -> _hotel = $hotel;
        $hotel -> ajouterChambre($this);
    }


    public function getNbChambre(){
        return $this->_nbChambre;
    }

    public function setNbChambre($nbChambre){
        $this->_nbChambre = $nbChambre;

        return $this;
    }

    public function getWifi(){
        return $this->_wifi;
    }

    public function setWifi($wifi){
        $this->_wifi = $wifi;

        return $this;
    }

    public function getNbLit(){
        return $this->_nbLit;
    }

 
    public function setNbLit($nbLit){
        $this->_nbLit = $nbLit;

        return $this;
    }

    public function getPrix(){
        return $this->_prix;
    }
 
    public function setPrix($prix){
        $this->_prix = $prix;

        return $this;
    }

    public function getEtat(){
        return $this->_etat;
    }
 
    public function setEtat($etat){
        $this->_etat = $etat;

        return $this;
    }

    public function getHotel(){
        return $this->_hotel;
    }

    public function setHotel($hotel){
        $this->_hotel = $hotel;

        return $this;
    }



    public function ajouterHotel($hotel){
        $this -> _hotel = $hotel;
    }


    public function __toString(){
        return $this -> _nbChambre ." " .$this -> _wifi ." " .$this -> _nbLit
        ." " .$this -> _prix .$this -> _etat ."<br>";
    }
}