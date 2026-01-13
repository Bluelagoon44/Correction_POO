<?php
    require_once("./traits/CreatedAt.php");
    require_once("./traits/UpdatedAt.php");
    require_once("./interfaces/SocieteRInterface.php");
    require_once("classes/Employe.php");
    require_once("classes/Responsable.php");

    $pierre = new Employe("Yolo", "Pierre", 32, 12);
    $pierre->presentation();

    $paul = new Employe("Swag", "Paul", 25, 5);
    $paul->presentation();

    $jacques = new Employe("Sparrow", "Jacques", 33, 15);
    $jacques->presentation();

    $stephanie = new Employe("De Monaco", "Stéphanie", 22, 3);
    $stephanie->presentation();

    $yolo = new Responsable("King", "Yolo", 200, 180, [$pierre, $paul, $jacques, $stephanie]);
    $yolo->presentation();

    echo Employe::getEmployesPercentage() . "% d'employés dans l'entreprise";
?>