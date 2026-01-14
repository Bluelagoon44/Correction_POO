<?php
    namespace interfaces;
    
    interface TravailleurInterface{
        public function getNom();
        public function setNom($nom);
        public function getPrenom();
        public function setPrenom($prenom);
        public function getAge();
        public function setAge($age);
        public function getAnciennete();
        public function setAnciennete($anciennete);
        public static function incrementeNbEmploye();
        public function presentation();
        public static function getEmployesPercentage();
    }
?>