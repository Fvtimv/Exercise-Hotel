<?php

class Hotel{
    private string $_nomHotel;
    private string $_ville;
    private string $_adresse;
    private string $_codePostal; // string bcs we cannot calculate a codePostal
    private array $_reservations;
    private array $_chambres;


    public function __construct($nomHotel, $ville, $adresse, $codePostal){
        $this -> _nomHotel = $nomHotel;
        $this -> _ville = $ville;
        $this -> _adresse = $adresse;
        $this -> _codePostal = $codePostal;
        $this -> _reservations = array();
        $this -> _chambres = array();
    }



    public function getNomHotel(){
        return $this->_nomHotel;
    }

    public function setNomHotel($nomHotel){
        $this->_nomHotel = $nomHotel;

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

    public function getCodePostal(){
        return $this->_codePostal;
    }

    public function setCodePostal($codePostal){
        $this->_codePostal = $codePostal;

        return $this;
    }



    public function ajouterReservation($reservation){
        $this -> _reservations[] = $reservation;
    }

    public function ajouterChambre($chambres){
        for ($i = 1; $i <- 30; $i++){
        // $chambre = new Chambre($i, false, 2, 100.0, false, $this);
        $this -> _chambres[] = $chambre;
    }
    }


    public function infoHotel(){
        echo "<h2>" .$this -> _nomHotel ." " ."****" ." " .$this -> _ville ."</h2>";
        echo $this -> _adresse ." " .$this -> _codePostal ." " .strtoupper($this -> _ville) ."<br>";
    }


    public function infoReservation(){
        if ($this -> _reservations > 0){
        foreach ($this -> _reservations as $reservation){
        echo "<h3>" .$reservation ."de l'hôtel" ." " .$this -> _nomHotel ." "  ."****" ." " .$this -> _ville ."</h3>";

    } } else {
        echo "Aucune réservation !";
    }
   
    }


        // count pour calculer les elemnets d'u tableua
    public function detailHotel(){
        echo "Nombre de chambres :" .$totChambres ."<br>";
            foreach($this -> _chambres as $chambre){
            echo $chambres ."<br>";
        }

    }


    $totChambres = count($chambres);


    public function __toString(){
        return $this -> _nomHotel ." " .$this -> _ville ." " .$this -> _adresse
        ." " .$this -> _codePostal ."<br>";
    }
  

}