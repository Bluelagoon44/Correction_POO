<?php
    namespace abstract;
    use interfaces\TravailleurInterface;
    use traits\CreatedAt;
    use traits\UpdatedAt;
    use traits\NomPrenomAgeTrait as Tartiflette;

    abstract class Travailleur implements TravailleurInterface{
        use CreatedAt;
        use UpdatedAt;
        use Tartiflette;
        
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