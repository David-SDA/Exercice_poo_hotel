<?php
    /* Fonction pour charger les classes nécessaires automatiquement */
    spl_autoload_register(function ($class) {
        require $class . '.class.php';
    });

    //1) Création d'un hotel (nom, nombre d'étoiles, adresse, code postale, ville)
    //2) Il faut définir toutes les chambres de celle-ci (30 par exemple)
    //3) On aura ensuite une création de différents clients
    //4) On pourra ajouter des réservations pour ces clients
    //5) On pourra afficher les informations de l'hotel
    //6) On pourra afficher les réservations d'un hôtel
    //7) On pourra afficher les réservations d'un client
    //8) On pourra afficher les informations des chambres d'un hôtel

    $hiltonStrasbourg = new Hotel("Hilton", 4, "10 route de la Gare", 67200, "Strasbourg");
    $regentParis = new Hotel("Regent", 3, "61 Rue Dauphine", 75006, "Paris");

    $chambre1HiltonStrasbourg = new Chambre($hiltonStrasbourg, 1, 2, 120, "non", "DISPONIBLE");
    $chambre2HiltonStrasbourg = new Chambre($hiltonStrasbourg, 2, 2, 120, "non", "DISPONIBLE");
    $chambre3HiltonStrasbourg = new Chambre($hiltonStrasbourg, 3, 2, 120, "non", "DISPONIBLE");
    $chambre4HiltonStrasbourg = new Chambre($hiltonStrasbourg, 4, 2, 120, "non", "DISPONIBLE");
    $chambre5HiltonStrasbourg = new Chambre($hiltonStrasbourg, 5, 2, 120, "non", "DISPONIBLE");
    $chambre6HiltonStrasbourg = new Chambre($hiltonStrasbourg, 6, 2, 120, "non", "DISPONIBLE");
    $chambre7HiltonStrasbourg = new Chambre($hiltonStrasbourg, 7, 2, 120, "non", "DISPONIBLE");
    $chambre8HiltonStrasbourg = new Chambre($hiltonStrasbourg, 8, 2, 120, "non", "DISPONIBLE");
    $chambre9HiltonStrasbourg = new Chambre($hiltonStrasbourg, 9, 2, 120, "non", "DISPONIBLE");
    $chambre10HiltonStrasbourg = new Chambre($hiltonStrasbourg, 10, 2, 120, "non", "DISPONIBLE");
    $chambre11HiltonStrasbourg = new Chambre($hiltonStrasbourg, 11, 2, 120, "non", "DISPONIBLE");
    $chambre12HiltonStrasbourg = new Chambre($hiltonStrasbourg, 12, 2, 120, "non", "DISPONIBLE");
    $chambre13HiltonStrasbourg = new Chambre($hiltonStrasbourg, 13, 2, 120, "non", "DISPONIBLE");
    $chambre14HiltonStrasbourg = new Chambre($hiltonStrasbourg, 14, 2, 120, "non", "DISPONIBLE");
    $chambre15HiltonStrasbourg = new Chambre($hiltonStrasbourg, 15, 2, 120, "non", "DISPONIBLE");
    $chambre16HiltonStrasbourg = new Chambre($hiltonStrasbourg, 16, 3, 300, "oui", "DISPONIBLE");
    $chambre17HiltonStrasbourg = new Chambre($hiltonStrasbourg, 17, 3, 300, "oui", "DISPONIBLE");
    $chambre18HiltonStrasbourg = new Chambre($hiltonStrasbourg, 18, 3, 300, "oui", "DISPONIBLE");
    $chambre19HiltonStrasbourg = new Chambre($hiltonStrasbourg, 19, 4, 500, "oui", "DISPONIBLE");
    $chambre20HiltonStrasbourg = new Chambre($hiltonStrasbourg, 20, 4, 500, "oui", "DISPONIBLE");
    
    $chambre1RegentParis = new Chambre($regentParis, 1, 2, 150, "non", "DISPONIBLE");
    $chambre2RegentParis = new Chambre($regentParis, 2, 2, 150, "non", "DISPONIBLE");
    $chambre3RegentParis = new Chambre($regentParis, 3, 2, 150, "non", "DISPONIBLE");
    $chambre4RegentParis = new Chambre($regentParis, 4, 2, 150, "non", "DISPONIBLE");
    $chambre5RegentParis = new Chambre($regentParis, 5, 2, 150, "non", "DISPONIBLE");
    $chambre6RegentParis = new Chambre($regentParis, 6, 3, 300, "oui", "DISPONIBLE");
    $chambre7RegentParis = new Chambre($regentParis, 7, 3, 300, "oui", "DISPONIBLE");
    $chambre8RegentParis = new Chambre($regentParis, 8, 3, 300, "oui", "DISPONIBLE");
    $chambre9RegentParis = new Chambre($regentParis, 9, 3, 300, "oui", "DISPONIBLE");
    $chambre10RegentParis = new Chambre($regentParis, 10, 3, 300, "oui", "DISPONIBLE");

    $clientVirgileGibello = new Client("Virgile", "GIBELLO");
    $clientMickaMurmann = new Client("Micka", "MURMANN");
    
    $reservationVirgileGibelloHiltonStrasbourg1 = new Reservation($clientVirgileGibello, $chambre17HiltonStrasbourg, $hiltonStrasbourg, "2021-01-01", "2021-01-01");
    echo $reservationVirgileGibelloHiltonStrasbourg1;
    echo "<br>";
    echo $reservationVirgileGibelloHiltonStrasbourg1->getClient();
    echo "<br>";
    echo $reservationVirgileGibelloHiltonStrasbourg1->getChambre();
    echo "<br>";
    echo $reservationVirgileGibelloHiltonStrasbourg1->getHotel();
    echo "<br>";
    echo date_format($reservationVirgileGibelloHiltonStrasbourg1->getDateDebut(), "d-m-Y");
    echo "<br>";
    echo date_format($reservationVirgileGibelloHiltonStrasbourg1->getDateFin(), "d-m-Y");
    echo "<br>";

    $reservationVirgileGibelloHiltonStrasbourg1->setClient($clientMickaMurmann);
    $reservationVirgileGibelloHiltonStrasbourg1->setChambre($chambre3RegentParis);
    $reservationVirgileGibelloHiltonStrasbourg1->setHotel($regentParis);
    $reservationVirgileGibelloHiltonStrasbourg1->setDateDebut("2021-03-15");
    $reservationVirgileGibelloHiltonStrasbourg1->setDateFin("2021-04-01");

    echo $reservationVirgileGibelloHiltonStrasbourg1;
    echo "<br>";
    echo $reservationVirgileGibelloHiltonStrasbourg1->getClient();
    echo "<br>";
    echo $reservationVirgileGibelloHiltonStrasbourg1->getChambre();
    echo "<br>";
    echo $reservationVirgileGibelloHiltonStrasbourg1->getHotel();
    echo "<br>";
    echo date_format($reservationVirgileGibelloHiltonStrasbourg1->getDateDebut(), "d-m-Y");
    echo "<br>";
    echo date_format($reservationVirgileGibelloHiltonStrasbourg1->getDateFin(), "d-m-Y");
?>