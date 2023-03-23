<?php
    class Client extends Personne{
        private array $_reservationsDuClient = [];//définit à l'exterieur

        /* Méthode __construct de la classe */
        public function __construct(string $prenom, string $nom){
            parent::__construct($prenom, $nom);
        }

        /* Getter et Setter des réservations du client */
        public function getReservationsDuClient() : array{
            return $this->_reservationsDuClient;
        }
        public function setReservationsDuClient(Reservation $reservationsDuClient){
            array_push($this->_reservationsDuClient, $reservationsDuClient);
        }
    }
?>