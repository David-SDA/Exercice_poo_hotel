<?php
    class Hotel{
        private string $_nom;
        private int $_nombreEtoiles;
        private string $_adresse;
        private int $_codePostale;
        private string $_ville;
        /* ce qui est en commentaire sera des fonctions */
        // private int $_nombreChambres;
        // private int $_chambresReservees;
        // private int $_chambresDisponibles;
        private array $_reservationsDansHotel = [];//définit à l'exterieur
        private array $_chambresDansHotel = [];//définit à l'exterieur (il faut bien avoir $_nombreChambres chambres)

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
        public function setChambresDansHotel(Reservation $chambresDansHotel){
            array_push($this->_chambresDansHotel, $chambresDansHotel);
        }

        /* Méthode __toString de la classe */
        public function __toString(){
            return $this->_nom . " " . $this->_nombreEtoiles . " " . $this->_ville;
        }
    }
?>
