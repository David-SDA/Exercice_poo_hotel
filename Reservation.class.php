<?php
    class Reservation{
        private Client $_client;
        private Chambre $_chambre;
        private Hotel $_hotel;
        private DateTime $_dateDebut;
        private DateTime $_dateFin;

        /* Méthode __construct de la classe */
        public function __construct(Client $client, Chambre $chambre, Hotel $hotel, string $dateDebut, string $dateFin){
            $this->_client = $client;
            $this->_chambre = $chambre;
            $this->_hotel = $hotel;
            $this->_dateDebut = new DateTime($dateDebut);
            $this->_dateFin = new DateTime($dateFin);
        }

        /* Getter et Setter du client qui a fait cette réservation */
        public function getClient() : Client{
            return $this->_client;
        }
        public function setClient(Client $client){
            $this->_client = $client;
        }

        /* Getter et Setter de la chambre réservé */
        public function getChambre() : Chambre{
            return $this->_chambre;
        }
        public function setChambre(Chambre $chambre){
            $this->_chambre = $chambre;
        }

        /* Getter et Setter de l'hôtel de la réservation */
        public function getHotel() : Hotel{
            return $this->_hotel;
        }
        public function setHotel(Hotel $hotel){
            $this->_hotel = $hotel;
        }

        /* Getter et Setter de la date de début de la réservation */
        public function getDateDebut() : DateTime{
            return $this->_dateDebut;
        }
        public function setDateDebut(string $dateDebut){
            $this->_dateDebut = new DateTime($dateDebut);
        }

        /* Getter et Setter de la date de fin de la réservation */
        public function getDateFin() : DateTime{
            return $this->_dateFin;
        }
        public function setDateFin(string $dateFin){
            $this->_dateFin = new DateTime($dateFin);
        }

        /* Méthode __toString de la classe */
        public function __toString(){
            return $this->_client . " " . $this->_hotel . " " . $this->_chambre;
        }
    }
?>