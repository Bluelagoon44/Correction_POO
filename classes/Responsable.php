<?php
    class Responsable extends Employe implements SocieteRInterface, ResponsableInterface{
        
        private $equipe = [];

        public function __construct($nom, $prenom, $age, $anciennete, $equipe){
            parent::__construct($nom, $prenom, $age, $anciennete);
            $this->setEquipe($equipe);
        }

        public function getEquipe(){
            return $this->equipe;
        }

        public function setEquipe($equipe){
            $this->equipe = $equipe;
        }

        public function ajouterEmploye(Employe $employe){
            $this->equipe[] = $employe;
        }

        public function yolo($yolo){
            echo "yolo";
        }
    }
?>