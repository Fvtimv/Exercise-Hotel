<?php

class Chambre {
    private string $_nbChambre;
    private bool $_wifi; // bool bcs it either true or false like is there wifi or not?
    private int $_nbLit;
    private float $_prix; //no " " when declarer in index
    private bool $_etat; // same as wifi is either disponible = false or reservee = true
    private array $_reservations;// on la declare ici aussi 
    private Hotel $_hotel;


    public function __construct($nbChambre, $wifi, $nbLit, $prix, $etat, $hotel){
        $this -> _nbChambre = $nbChambre;
        $this -> _wifi = $wifi;
        $this -> _nbLit = $nbLit;
        $this -> _prix = $prix;
        $this -> _etat = $etat;
        $this -> _hotel = $hotel;
        $this -> _reservations = array(); // this c pour declarer la function ajouterReservation in this class if we put it here we need to declarer it after at the bottom
        $hotel -> ajouterChambre($this); // ici on declare that the function ajouterChambre it's gonna be put on $hotel
    }


    public function getNbChambre(){
        return $this->_nbChambre;
    }

    public function setNbChambre($nbChambre){
        $this->_nbChambre = $nbChambre;

        return $this;
    }

    public function getWifi(){
        if ($this -> _wifi === true){
            return "oui ";
        }else{
            return "non";
        }
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




    public function ajouterReservation($reservation){ // this is how we state it the $this -> _reservations = array()
        $this -> _reservations[] = $reservation;
    }



    // public function calcPrix(){
        
    //     foreach ($this -> _reservations as $reservation){
    //         $this -> _prix  += $prix;
    //     return $this -> calcPrix();
    //     }
    // }


    // public function chambreDispo(){
    //     $nChambres = 0;
    //     $nChambres = count($this -> $nChambres);
        // $nChambres = $this -> $chambre - 

        // echo "Nombre de chambres dispo : " .$nChambres ."<br>";

    // }


    
    // c juste ça: 

    // public function chambreReservees(){
    //     $nb = 0;
    //     foreach ($this -> _chambres as $chambre){
    //     if ($this -> _chambre -> etat === true){
    //             echo $nb += 1;
    //         }
    //     }
    // }


  

    // essaie pour vois si ça marche
    // public function chambreReservees(){
    //     $nb = 0;
    //     foreach ($this -> _reservations as $reservation){
    //     if ($this -> _etat === true){
    //             $nb += 1;
    //         }
    //     }
    // }
    






    public function __toString(){
        return $this -> _nbChambre ." " .$this -> _nbLit ."<br>";
    }
}