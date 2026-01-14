<?php
    namespace classes;
    use abstract\Travailleur;
    use interfaces\ResponsableInterface;
    use interfaces\SocieteRInterface;
    use interfaces\ExploiteInterface;

    class Responsable extends Travailleur implements SocieteRInterface, ResponsableInterface{
        
        private $equipe = [];

        public function __construct($nom, $prenom, $age, $anciennete, $equipe){
            parent::__construct($nom, $prenom, $age, $anciennete);
            $this->setEquipe($equipe);
        }

        public function getEquipe(){
            return $this->equipe;
        }

        public function setEquipe($equipe){
            foreach($equipe as $travailleur){
                $this->ajouterEmploye($travailleur);
            }
        }

        public function ajouterEmploye(ExploiteInterface $employe){
            $this->equipe[] = $employe;
        }

        public function yolo($yolo){
            echo "yolo";
        }

        public function presentation(){
            echo "<p>Je suis un responsable</p>";
        }

        public function faireTravailler(ExploiteInterface $travailleur){
            $travailleur->travailler();
        }

        public function faireTravaillerEquipe(){
            foreach($this->equipe as $travailleur){
                $travailleur->travailler();
            }
        }
    }
?>