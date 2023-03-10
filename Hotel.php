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



    public function ajouterChambre($chambre){
      
        $this -> _chambres[] = $chambre;
  
    }
    
    //         variable nb que j'instancie à zero
    //         je boucle sur toute mes chambes
    //         si statut de la chambre est true 
    //         alors nb += 1 


   
    public function chambresReservees(){
        $chambresReservees = count($this -> _reservations);
        if ($chambresReservees += 0){
        foreach ($this -> _reservations as $reservation){  
        }
            return $chambresReservees;
    }
}

    public function chambresDispo(){
            $chambresDispo = count($this->_chambres) - $this-> chambresReservees();
            return $chambresDispo;

    }


    public function statutChambres(){
        echo "<h3>Statuts des chambres de " ."<strong>" .$this -> _nomHotel ." **** "
        .$this -> _ville ."</strong>" ."</h3> <br>";
        echo "<table style='width:700px'>
                <tr style ='text-align:justify'>
                    <th> CHAMBRE </th>
                    <th> PRIX </th>
                    <th> WIFI </th>
                    <th> ETAT </th>
                </tr>";
        foreach ($this -> _chambres as $chambre){
            echo "<tr>
                    <td style = 'padding-bottom:20px; padding-top: 20px'> Chambre " .$chambre -> getNbChambre() ."</td>
                    <td style = 'padding-bottom:20px'>" .$chambre -> getPrix() ." € " ."</td>
                    <td style = 'padding-bottom:20px'>" .$chambre -> getWifi() ."</td>
                    <td style = 'padding-bottom:20px'>" .$chambre -> getEtat() ."</td>
                </tr>";
        }
        echo "</table>";
    }


    // count pour calculer les elements d'un tableau

    public function infoHotel(){
        echo "<h2>" .$this -> _nomHotel ." " ."****" ." " .$this -> _ville ."</h2>";
        echo $this -> _adresse ." " .$this -> _codePostal ." " .strtoupper($this -> _ville) ."<br>";
        echo "Nombre de chambres : " .count($this->_chambres) ."<br>";
        echo "Nombre de chambres réservées : " .$this -> chambresReservees() ."<br>";
        echo "Nombre de chambres dispo : " .$this -> chambresDispo() ."<br>";
    }


    public function reservations(){
        echo "<h3> Réservations de l'hôtel " .$this -> _nomHotel ." " ."****" .$this -> _ville ."</h3>";
        echo '<button class = "btn btn-success" style = "background-color: #9AD06E; color:white; border-color:#9AD06E">'  .count($this->_reservations) ." RESERVATIONS "  .'</button> <br> <br>';
        if ($this -> _reservations > 0){
            foreach ($this -> _reservations as $reservation)
                echo $reservation;
        }
         else {
            echo "Aucune réservation ! <br>";
        }
    }

    


    public function __toString(){
        return $this -> _nomHotel ." " .$this -> _ville ." " .$this -> _adresse
        ." " .$this -> _codePostal ."<br>";
    }
  

}       










// what i tried to make before:

    // public function chambresReservees(){
    //     $chambresReservees = count($this -> reservations);
    //     $nb = 0;
    //     if ($nb += 0){
    //     foreach ($this -> _reservations as $reservation);
    //         return $chambresReservees;

    //     }
    // }

    // public function chambresDispo(){
    //     $chambresDispo = count($this->_chambres) - count($this-> _reservations);
    //     return $chambresDispo;

    // }










 // if ($this -> _hotel -> _reservations > 0){
        //   echo $this -> _client -> getPrenom() .$this -> _client -> getNom() ."-"  .$this -> _hotel -> _reservation ."<br>" ;
 
        //   } else {
        //   echo "Aucune réservation !";






//$reservation, $chambre here above will bring the toString that I made in class Reservation and Chambre
//it just need to be declarer dans les variables 





