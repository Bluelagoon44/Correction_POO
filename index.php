<?php
    require_once("./traits/CreatedAt.php");
    require_once("./traits/UpdatedAt.php");
    require_once("./traits/NomPrenomAgeTrait.php");
    require_once("./interfaces/SocieteRInterface.php");
    require_once("./interfaces/TravailleurInterface.php");
    require_once("./interfaces/ResponsableInterface.php");
    require_once("./interfaces/ExploiteInterface.php");
    require_once("./abstract/Travailleur.php");
    require_once("classes/Employe.php");
    require_once("classes/Responsable.php");
    require_once("classes/Stagiaire.php");
    use classes\Employe;
    use classes\Stagiaire;
    use classes\Responsable;

    try{
        $pierre = new Employe("Yolo", "Pierre", 33, 12);
        $paul = new Employe("Swag", "Paul", 25, 5);
        $jacques = new Employe("Sparrow", "Jacques", 33, 15);
        $stephanie = new Employe("De Monaco", "Stéphanie", 22, 3);
        $stephanie2 = new Employe("De Monaco", "Stéphanie", 22, 3);
        $stephanie3 = new Employe("De Monaco", "Stéphanie", 22, 3);
        $stephanie4 = new Employe("De Monaco", "Stéphanie", 22, 3);
        $stephanie5 = new Employe("De Monaco", "Stéphanie", 22, 3);
        $stephanie6 = new Employe("De Monaco", "Stéphanie", 22, 3);
        $jeanMichel = new Stagiaire("Jean", "Jean-Michel", 50);
        $yolo = new Responsable("King", "Yolo", 20, 18, [$pierre, $paul, $jacques, $stephanie, $jeanMichel]);
        $yolo->faireTravaillerEquipe();

        $stephanie7 = new Employe("De Monaco", "Stéphanie", 22, 3);

        $yolo->faireTravaillerEquipe();
        echo Employe::getEmployesPercentage() . "% d'employés dans l'entreprise";
    }
    catch(\Exception $e){
        echo $e->getMessage();
    }

?>