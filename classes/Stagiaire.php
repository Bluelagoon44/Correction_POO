<?php
    namespace classes;
    use interfaces\ExploiteInterface;
    use traits\NomPrenomAgeTrait;

    class Stagiaire implements ExploiteInterface{
        use NomPrenomAgeTrait;

        public function __construct($nom, $prenom, $age)
        {
            $this->setNom($nom);
            $this->setPrenom($prenom);
            $this->setAge($age);
        }

        public function travailler(){
            echo "<p>Moi, " . $this->prenom . " " . $this->nom . ", je fais le café</p>";
        }
    }
?>