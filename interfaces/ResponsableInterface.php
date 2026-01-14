<?php
    namespace interfaces;
    
    interface ResponsableInterface{
        public function getEquipe();
        public function setEquipe($equipe);
        public function ajouterEmploye(ExploiteInterface $employe);
    }
?>