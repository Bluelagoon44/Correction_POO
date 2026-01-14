<?php
    namespace classes;
    use abstract\Travailleur;
    use interfaces\ExploiteInterface;

    class Employe extends Travailleur implements ExploiteInterface{
        public function presentation(){
            echo "<p>Je suis un employé</p>";
        }

        public function travailler(){
            echo "<p>Moi, " . $this->getPrenom() . " " . $this->getNom() . ", je travaille</p>";
        }
    }