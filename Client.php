<?php

class Client{
    private string $_nom;
    private string $_prenom;
    private array $_reservations;
    

    public function __construct($nom, $prenom, $reservations){
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



    public function __toString(){
        return $this -> _nom ." " .$this -> _prenom ." " ."<br>";
    }
}