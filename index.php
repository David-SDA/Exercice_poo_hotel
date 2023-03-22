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
    echo $chambre1HiltonStrasbourg;
    echo "<br/>";
    echo "Hotel : " . $chambre1HiltonStrasbourg->getHotel();
    echo "<br>";
    echo "Chambre n°" . $chambre1HiltonStrasbourg->getNumero();
    echo "<br>";
    echo "Nombre de lits :" . $chambre1HiltonStrasbourg->getNombresLits();
    echo "<br>";
    echo "Prix : " . $chambre1HiltonStrasbourg->getPrix() . " €";
    echo "<br>";
    echo "Wifi : " . $chambre1HiltonStrasbourg->getWifi();
    echo "<br>";
    echo "Etat : " . $chambre1HiltonStrasbourg->getEtat();
    echo "<br>";

    $chambre1HiltonStrasbourg->setHotel($regentParis);
    $chambre1HiltonStrasbourg->setNumero(2);
    $chambre1HiltonStrasbourg->setNombresLits(3);
    $chambre1HiltonStrasbourg->setPrix(180);
    $chambre1HiltonStrasbourg->setWifi("oui");
    $chambre1HiltonStrasbourg->setEtat("RÉSERVÉE");

    echo "<br>";
    echo $chambre1HiltonStrasbourg;
    echo "<br>";
    echo "Hotel : " . $chambre1HiltonStrasbourg->getHotel();
    echo "<br>";
    echo "Chambre n°" . $chambre1HiltonStrasbourg->getNumero();
    echo "<br>";
    echo "Nombre de lits :" . $chambre1HiltonStrasbourg->getNombresLits();
    echo "<br>";
    echo "Prix : " . $chambre1HiltonStrasbourg->getPrix() . " €";
    echo "<br>";
    echo "Wifi : " . $chambre1HiltonStrasbourg->getWifi();
    echo "<br>";
    echo "Etat : " . $chambre1HiltonStrasbourg->getEtat();
?>