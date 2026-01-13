<?php
    interface ResponsableInterface{
        public function getEquipe();
        public function setEquipe($equipe);
        public function ajouterEmploye(Employe $employe);
    }
?>