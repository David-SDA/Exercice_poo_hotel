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

    $hiltonStrasbourg = new Hotel("Hilton", 4, "10 route de la Gare", "67000", "Strasbourg");
    $regentParis = new Hotel("Regent", 3, "61 Rue Dauphine", "75006", "Paris");

    $chambre1HiltonStrasbourg = new Chambre($hiltonStrasbourg, 1, 2, 120, false, true);
    $chambre2HiltonStrasbourg = new Chambre($hiltonStrasbourg, 2, 2, 120, false, true);
    $chambre3HiltonStrasbourg = new Chambre($hiltonStrasbourg, 3, 2, 120, false, true);
    $chambre4HiltonStrasbourg = new Chambre($hiltonStrasbourg, 4, 2, 120, false, true);
    $chambre5HiltonStrasbourg = new Chambre($hiltonStrasbourg, 5, 2, 120, false, true);
    $chambre6HiltonStrasbourg = new Chambre($hiltonStrasbourg, 6, 2, 120, false, true);
    $chambre7HiltonStrasbourg = new Chambre($hiltonStrasbourg, 7, 2, 120, false, true);
    $chambre8HiltonStrasbourg = new Chambre($hiltonStrasbourg, 8, 2, 120, false, true);
    $chambre9HiltonStrasbourg = new Chambre($hiltonStrasbourg, 9, 2, 120, false, true);
    $chambre10HiltonStrasbourg = new Chambre($hiltonStrasbourg, 10, 2, 120, false, true);
    $chambre11HiltonStrasbourg = new Chambre($hiltonStrasbourg, 11, 2, 120, false, true);
    $chambre12HiltonStrasbourg = new Chambre($hiltonStrasbourg, 12, 2, 120, false, true);
    $chambre13HiltonStrasbourg = new Chambre($hiltonStrasbourg, 13, 2, 120, false, true);
    $chambre14HiltonStrasbourg = new Chambre($hiltonStrasbourg, 14, 2, 120, false, true);
    $chambre15HiltonStrasbourg = new Chambre($hiltonStrasbourg, 15, 2, 120, false, true);
    $chambre16HiltonStrasbourg = new Chambre($hiltonStrasbourg, 16, 3, 300, true, true);
    $chambre17HiltonStrasbourg = new Chambre($hiltonStrasbourg, 17, 3, 300, true, true);
    $chambre18HiltonStrasbourg = new Chambre($hiltonStrasbourg, 18, 3, 300, true, true);
    $chambre19HiltonStrasbourg = new Chambre($hiltonStrasbourg, 19, 4, 500, true, true);
    $chambre20HiltonStrasbourg = new Chambre($hiltonStrasbourg, 20, 4, 500, true, true);
    
    $chambre1RegentParis = new Chambre($regentParis, 1, 2, 150, false, true);
    $chambre2RegentParis = new Chambre($regentParis, 2, 2, 150, false, true);
    $chambre3RegentParis = new Chambre($regentParis, 3, 2, 150, false, true);
    $chambre4RegentParis = new Chambre($regentParis, 4, 2, 150, false, true);
    $chambre5RegentParis = new Chambre($regentParis, 5, 2, 150, false, true);
    $chambre6RegentParis = new Chambre($regentParis, 6, 3, 300, true, true);
    $chambre7RegentParis = new Chambre($regentParis, 7, 3, 300, true, true);
    $chambre8RegentParis = new Chambre($regentParis, 8, 3, 300, true, true);
    $chambre9RegentParis = new Chambre($regentParis, 9, 3, 300, true, true);
    $chambre10RegentParis = new Chambre($regentParis, 10, 3, 300, true, true);

    $clientVirgileGibello = new Client("Virgile", "GIBELLO");
    $clientMickaMurmann = new Client("Micka", "MURMANN");
    $clientDavidSousaDeAraujo = new Client("David", "SOUSA DE ARAUJO");
    
    $reservationVirgileGibelloHiltonStrasbourg1 = new Reservation($clientVirgileGibello, $chambre17HiltonStrasbourg, "2021-01-01", "2021-01-03");
    $reservationMickaMurmannHiltonStrasbourg1 = new Reservation($clientMickaMurmann, $chambre3HiltonStrasbourg, "2021-03-11", "2021-03-15");
    $reservationMickaMurmannHiltonStrasbourg2 = new Reservation($clientMickaMurmann, $chambre4HiltonStrasbourg, "2021-04-01", "2021-04-17");

    echo $hiltonStrasbourg->getInformationsHotel();
    echo "<br>";
    echo $regentParis->getInformationsHotel();
    echo "<br>";

    echo $hiltonStrasbourg->getInformationsReservations();
    echo "<br>";
    echo $regentParis->getInformationsReservations();
    echo "<br><br>";

    echo $clientMickaMurmann->getInformationsReservations();
    echo "<br><br>";
    echo $clientVirgileGibello->getInformationsReservations();
    echo "<br><br>";
    echo $clientDavidSousaDeAraujo->getInformationsReservations();
    echo "<br><br>";

    echo $hiltonStrasbourg->getEtatChambres();
    echo "<br>";
    echo $regentParis->getEtatChambres();
?>