<?php
    class Hotel{
        private string $_nom;
        private int $_nombreEtoiles;
        private string $_adresse;
        private int $_codePostale;
        private string $_ville;
        private array $_reservationsDansHotel = [];//définit à l'exterieur
        private array $_chambresDansHotel = [];//définit à l'exterieur

        /* Méthode __construct de la classe */
        public function __construct(string $nom, int $nombreEtoiles, string $adresse, int $codePostale, string $ville){
            $this->_nom = $nom;
            $this->_nombreEtoiles = $nombreEtoiles;
            $this->_adresse = $adresse;
            $this->_codePostale = $codePostale;
            $this->_ville = $ville;
        }

        /* Getter et Setter pour le nom de l'hôtel */
        public function getNom() : string{
            return $this->_nom;
        }
        public function setNom(string $nom){
            $this->_nom = $nom;
        }

        /* Getter et Setter pour le nombre d'étoiles de l'hôtel */
        public function getNombreEtoiles() : int{
            return $this->_nombreEtoiles;
        }
        public function setNombreEtoiles(int $nombreEtoiles){
            $this->_nombreEtoiles = $nombreEtoiles;
        }

        /* Getter et Setter pour l'adresse de l'hôtel */
        public function getAdresse() : string{
            return $this->_adresse;
        }
        public function setAdresse(string $adresse){
            $this->_adresse = $adresse;
        }

        /* Getter et Setter pour le code postale de l'hôtel */
        public function getCodePostale() : int{
            return $this->_codePostale;
        }
        public function setCodePostale(int $codePostale){
            $this->_codePostale = $codePostale;
        }

        /* Getter et Setter pour la ville où se situe l'hôtel */
        public function getVille() : string{
            return $this->_ville;
        }
        public function setVille(string $ville){
            $this->_ville = $ville;
        }

        /* Getter et Setter pour les réservations dans l'hôtel */
        public function getReservationsDansHotel() : array{
            return $this->_reservationsDansHotel;
        }
        public function setReservationsDansHotel(Reservation $reservationsDansHotel){
            array_push($this->_reservationsDansHotel, $reservationsDansHotel);
        }

        /* Getter et Setter pour les détails des chambres dans l'hôtel */
        public function getChambresDansHotel() : array{
            return $this->_chambresDansHotel;
        }
        public function setChambresDansHotel(Chambre $chambresDansHotel){
            array_push($this->_chambresDansHotel, $chambresDansHotel);
        }

        /* Méthode pour déterminer le nombre de chambres de l'hôtel */
        public function getNombresChambres() : int{
            return count($this->_chambresDansHotel);
        }

        /* Méthode pour déterminer le nombre de chambre réservée de l'hôtel */
        public function getNombresChambresReservee() : int{
            return count($this->_reservationsDansHotel);
        }

        /* Méthode pour déterminer le nombre de chambre disponibles de l'hôtel */
        public function getNombresChambresDisponible() : int{
            return $this->getNombresChambres() - $this->getNombresChambresReservee();
        }

        /* Méthode pour obtenir l'affichage des informations de l'hôtel */
        public function getInformationsHotel() : string{
            $result = "<b>$this->_nom ";
            for($i=0; $i<$this->_nombreEtoiles; $i++){
                $result .= "*";
            }
            $result .= " $this->_ville :</b><br>";
            $result .= "Nombre de chambres : " . $this->getNombresChambres() . "<br>";
            $result .= "Nombre de chambres réservées : " . $this->getNombresChambresReservee() . "<br>";
            $result .= "Nombre de chambres disponibles : " . $this->getNombresChambresDisponible() . "<br>";
            return $result;
        }

        /* Méthode pour obtenir l'affichage des informations des réservations dans l'hôtel */
        public function getInformationsReservations() : string{
            $result = "<b>Réservation de l'hôtel $this->_nom ";
            for($i=0; $i<$this->_nombreEtoiles; $i++){
                $result .= "*";
            }
            $result .= " $this->_ville :</b><br>";
            if(empty($this->_reservationsDansHotel)){
                $result .= "Aucune réservation !";
            }
            else{
                $result .= "<i>" . $this->getNombresChambresReservee() . " RÉSERVATIONS</b><br>";
                foreach($this->_reservationsDansHotel as $reservation){
                    $result .= $reservation->getClient() . " - " . $reservation->getChambre() . " du " . $reservation->getDateDebut()->format("d-m-Y") . " au " . $reservation->getDateFin()->format("d-m-Y") . "<br>";
                }
            }
            return $result;
        }

        /* Méthode pour obtenir l'affichage des informations de toutes les chambres */
        public function getEtatChambres() : string{
            $result = "<table border=1>
                            <thead>
                                <tr>
                                    <td><b>CHAMBRE</b></td>
                                    <td><b>PRIX</b></td>
                                    <td><b>WIFI</b></td>
                                    <td><b>ETAT</b></td>
                                </tr>
                            </thead>
                            <tbody>";
                            foreach($this->_chambresDansHotel as $chambre){
                                $result .= "<tr>
                                                <td>" . $chambre . "</td>
                                                <td>" . $chambre->getPrix() . " €</td>
                                                <td>" . $chambre->getWifi() . "</td>
                                                <td>";
                                                    if($chambre->getEtat()){
                                                        $result .= "DISPONIBLE";
                                                    }
                                                    else{
                                                        $result .= "<i>RÉSERVÉE</i>";
                                                    }
                                    $result .= "</td>
                                            </tr>";
                             }                            
            $result .= "</tbody></table>";
            return $result;              
        }

        /* Méthode __toString de la classe */
        public function __toString(){
            return $this->_nom . " " . $this->_nombreEtoiles . " " . $this->_ville;
        }
    }
?>
