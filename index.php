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
    echo $hiltonStrasbourg;
    echo "<br>";
    echo $hiltonStrasbourg->getNom();
    echo "<br>";
    echo $hiltonStrasbourg->getNombreEtoiles();
    echo "<br>";
    echo $hiltonStrasbourg->getAdresse();
    echo "<br>";
    echo $hiltonStrasbourg->getCodePostale();
    echo "<br>";
    echo $hiltonStrasbourg->getVille();
    echo "<br>";
    echo "<br>";
    $hiltonStrasbourg->setNom("Regent");
    $hiltonStrasbourg->setNombreEtoiles(3);
    $hiltonStrasbourg->setAdresse("61 Rue Dauphine");
    $hiltonStrasbourg->setCodePostale(75006);
    $hiltonStrasbourg->setVille("Paris");
    echo $hiltonStrasbourg;
    echo "<br>";
    echo $hiltonStrasbourg->getNom();
    echo "<br>";
    echo $hiltonStrasbourg->getNombreEtoiles();
    echo "<br>";
    echo $hiltonStrasbourg->getAdresse();
    echo "<br>";
    echo $hiltonStrasbourg->getCodePostale();
    echo "<br>";
    echo $hiltonStrasbourg->getVille();
    echo "<br>";
?>