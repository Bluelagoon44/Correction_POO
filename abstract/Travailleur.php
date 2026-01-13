<?php
    abstract class Travailleur implements TravailleurInterface{
        use CreatedAt;
        use UpdatedAt;

        private $nom;
        private $prenom;
        private $age;
        private $anciennete;
        private static $nbEmploye = 0;
        const NB_EMPLOYE_MAX = 10;

        public function __construct($nom, $prenom, $age, $anciennete){   
            $this->setNom($nom);
            $this->setPrenom($prenom);
            $this->setAge($age);
            $this->setAnciennete($anciennete);
            self::incrementeNbEmploye();
        }

        public function getNom(){
            return $this->nom;
        }

        public function setNom($nom){
            if(preg_match("/^[A-z ]*$/", $nom))
                $this->nom = htmlspecialchars($nom);
        }

        public function getPrenom(){
            return $this->prenom;
        }

        public function setPrenom($prenom){
            $this->prenom = $prenom;
        }

        public function getAge(){
            return $this->age;
        }

        public function setAge($age){
            if($age >= 18 && $age <= 65)
                $this->age = $age;
        }

        public function getAnciennete(){
            return $this->anciennete;
        }

        public function setAnciennete($anciennete){
            if($anciennete<=40)
                $this->anciennete = $anciennete;
        }

        public static function incrementeNbEmploye(){
            self::$nbEmploye++;
        }

        public static function getEmployesPercentage(){
            return (self::$nbEmploye / self::NB_EMPLOYE_MAX) * 100;
        }

        abstract public function presentation();
    }