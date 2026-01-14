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
            else
                throw new \Exception("Trop ancien dans la boîte, nous te remercions");
        }

        public static function incrementeNbEmploye(){
            if(self::$nbEmploye < self::NB_EMPLOYE_MAX)
                self::$nbEmploye++;
            else{
                throw new \Exception("Trop d'employés dans l'entreprise, nous n'acceptons plus personne");
            }
        }

        public static function getEmployesPercentage(){
            return (self::$nbEmploye / self::NB_EMPLOYE_MAX) * 100;
        }

        abstract public function presentation();
    }