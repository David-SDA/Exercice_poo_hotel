<?php
    class Chambre{
        private Hotel $_hotel;
        private int $_numero;
        private int $_nombresLits;
        private int $_prix;
        private bool $_wifi;
        private bool $_etat;

        /* Méthode __construct de la classe */
        public function __construct(Hotel $hotel, int $numero, int $nombresLits, int $prix, bool $wifi, bool $etat){
            $this->_hotel = $hotel;
            $this->_numero = $numero;
            $this->_nombresLits = $nombresLits;
            $this->_prix = $prix;
            $this->_wifi = $wifi;
            $this->_etat = $etat;
            $this->_hotel->setChambresDansHotel($this);
        }

        /* Getter et Setter de l'hôtel de cette chambre */
        public function getHotel(): Hotel{
            return $this->_hotel;
        }
        public function setHotel(Hotel $hotel){
            $this->_hotel = $hotel;
        }

        /* Getter et Setter du numéro de la chambre */
        public function getNumero() : int{
            return $this->_numero;
        }
        public function setNumero(int $numero){
            $this->_numero = $numero;
        }

        /* Getter et Setter du nombre de lits dans cette chambre */
        public function getNombresLits() : int{
            return $this->_nombresLits;
        }
        public function setNombresLits(int $nombresLits){
            $this->_nombresLits = $nombresLits;
        }

        /* Getter et Setter du prix de la chambre */
        public function getPrix() : int{
            return $this->_prix;
        }
        public function setPrix(int $prix){
            $this->_prix = $prix;
        }

        /* Getter et Setter du wifi de la chambre (oui ou non) */
        public function getWifi() : bool{
            return $this->_wifi;
        }
        public function setWifi(bool $wifi){
            $this->_wifi = $wifi;
        }

        /* Getter et Setter de l'état de la chambre (réservée ou disponible) */
        public function getEtat() : bool{
            return $this->_etat;
        }
        public function setEtat(bool $etat){
            $this->_etat = $etat;
        }

        /* Méthode __toString de la classe */
        public function __toString(){
            return "Chambre " . $this->_numero;
        }
    }
?>