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

    $chambre1HiltonStrasbourg = new Chambre($hiltonStrasbourg, 1, 2, 120, "non", true);
    $chambre2HiltonStrasbourg = new Chambre($hiltonStrasbourg, 2, 2, 120, "non", true);
    $chambre3HiltonStrasbourg = new Chambre($hiltonStrasbourg, 3, 2, 120, "non", true);
    $chambre4HiltonStrasbourg = new Chambre($hiltonStrasbourg, 4, 2, 120, "non", true);
    $chambre5HiltonStrasbourg = new Chambre($hiltonStrasbourg, 5, 2, 120, "non", true);
    $chambre6HiltonStrasbourg = new Chambre($hiltonStrasbourg, 6, 2, 120, "non", true);
    $chambre7HiltonStrasbourg = new Chambre($hiltonStrasbourg, 7, 2, 120, "non", true);
    $chambre8HiltonStrasbourg = new Chambre($hiltonStrasbourg, 8, 2, 120, "non", true);
    $chambre9HiltonStrasbourg = new Chambre($hiltonStrasbourg, 9, 2, 120, "non", true);
    $chambre10HiltonStrasbourg = new Chambre($hiltonStrasbourg, 10, 2, 120, "non", true);
    $chambre11HiltonStrasbourg = new Chambre($hiltonStrasbourg, 11, 2, 120, "non", true);
    $chambre12HiltonStrasbourg = new Chambre($hiltonStrasbourg, 12, 2, 120, "non", true);
    $chambre13HiltonStrasbourg = new Chambre($hiltonStrasbourg, 13, 2, 120, "non", true);
    $chambre14HiltonStrasbourg = new Chambre($hiltonStrasbourg, 14, 2, 120, "non", true);
    $chambre15HiltonStrasbourg = new Chambre($hiltonStrasbourg, 15, 2, 120, "non", true);
    $chambre16HiltonStrasbourg = new Chambre($hiltonStrasbourg, 16, 3, 300, "oui", true);
    $chambre17HiltonStrasbourg = new Chambre($hiltonStrasbourg, 17, 3, 300, "oui", true);
    $chambre18HiltonStrasbourg = new Chambre($hiltonStrasbourg, 18, 3, 300, "oui", true);
    $chambre19HiltonStrasbourg = new Chambre($hiltonStrasbourg, 19, 4, 500, "oui", true);
    $chambre20HiltonStrasbourg = new Chambre($hiltonStrasbourg, 20, 4, 500, "oui", true);
    
    $chambre1RegentParis = new Chambre($regentParis, 1, 2, 150, "non", true);
    $chambre2RegentParis = new Chambre($regentParis, 2, 2, 150, "non", true);
    $chambre3RegentParis = new Chambre($regentParis, 3, 2, 150, "non", true);
    $chambre4RegentParis = new Chambre($regentParis, 4, 2, 150, "non", true);
    $chambre5RegentParis = new Chambre($regentParis, 5, 2, 150, "non", true);
    $chambre6RegentParis = new Chambre($regentParis, 6, 3, 300, "oui", true);
    $chambre7RegentParis = new Chambre($regentParis, 7, 3, 300, "oui", true);
    $chambre8RegentParis = new Chambre($regentParis, 8, 3, 300, "oui", true);
    $chambre9RegentParis = new Chambre($regentParis, 9, 3, 300, "oui", true);
    $chambre10RegentParis = new Chambre($regentParis, 10, 3, 300, "oui", true);

    $clientVirgileGibello = new Client("Virgile", "GIBELLO");
    $clientMickaMurmann = new Client("Micka", "MURMANN");
    
    $reservationVirgileGibelloHiltonStrasbourg1 = new Reservation($clientVirgileGibello, $chambre17HiltonStrasbourg, $hiltonStrasbourg, "2021-01-01", "2021-01-01");
    $reservationMickaMurmannHiltonStrasbourg1 = new Reservation($clientMickaMurmann, $chambre3HiltonStrasbourg, $hiltonStrasbourg, "2021-03-11", "2021-03-15");
    $reservationMickaMurmannHiltonStrasbourg2 = new Reservation($clientMickaMurmann, $chambre4HiltonStrasbourg, $hiltonStrasbourg, "2021-04-01", "2021-04-17");

    echo $hiltonStrasbourg->getNombresChambresReservee();
    echo "<br>";
    echo $regentParis->getNombresChambresReservee();
    echo "<br>";
?>