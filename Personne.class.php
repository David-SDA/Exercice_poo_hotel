<?php
    class Personne{
        private string $_prenom;
        private string $_nom;

        /* Méthode __construct de la classe */
        public function __construct(string $prenom, string $nom){
            $this->_prenom = $prenom;
            $this->_nom = $nom;
        }

        /* Getter et Setter pour le prénom d'une personne */
        public function getPrenom() : string{
            return $this->_prenom;
        }
        public function setPrenom(string $prenom){
            $this->_prenom = $prenom;
        }

        /* Getter et Setter pour le nom d'une personne */
        public function getNom() : string{
            return $this->_nom;
        }
        public function setNom(string $nom){
            $this->_nom = $nom;
        }

        /* Méthode __toString de la classe */
        public function __toString(){
            return $this->_prenom . ' ' . $this->_nom;
        }
    }
?>