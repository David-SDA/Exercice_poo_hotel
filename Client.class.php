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

        /* Méthode pour déterminer le nombre de résservation du client */
        public function getNombresReservation() : int{
            return count($this->_reservationsDuClient);
        }

        /* Méthode pour déterminer le total d'argent des réservations du client */
        public function getArgentTotalReservation($reservation) : int{
            $diff = ($reservation->getDateDebut())->diff($reservation->getDateFin());
            $nbJourStr = $diff->format("%d");
            $nbJour = intval($nbJourStr);
            $prix = ($reservation->getChambre()->getPrix()) * $nbJour;
            $result = $prix;
            return $result;
        }

        /* Méthode pour obtenir les informations des réservation du client */
        public function getInformationsReservations() : string{
            $result = "<b>Réservation de $this :</b><br>";
            if (empty($this->_reservationsDuClient)) {
                $result .= "Aucune réservation !";
            } else {
                $total = 0;
                $result .= "<i>" . $this->getNombresReservation() . " RÉSERVATIONS</i><br>";
                foreach ($this->_reservationsDuClient as $reservation) {
                    $wifi = ($reservation->getChambre()->getWifi()) ? "oui" : "non";
                    $total += $this->getArgentTotalReservation($reservation);
                    $result .= "<b>Hotel : " . $reservation->getChambre()->getHotel()->getTitreHotel() . "</b> / " . $reservation->getChambre() . " (" . $reservation->getChambre()->getNombresLits() . " lits - " . $reservation->getChambre()->getPrix() . " € - Wifi : " . $wifi . ") du " . $reservation->getDateDebut()->format("d-m-Y") . " au " . $reservation->getDateFin()->format("d-m-Y") . "<br>";
                }
                $result .= "<i>Total : " .  $total ." €</i>";
            }
            return $result;
        }
    }
?>