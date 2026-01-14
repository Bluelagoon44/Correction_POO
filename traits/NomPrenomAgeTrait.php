<?php
    namespace traits;

    trait NomPrenomAgeTrait{
        private $nom;
        private $prenom;
        private $age;

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
    }
?>