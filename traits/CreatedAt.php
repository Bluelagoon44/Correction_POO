<?php
    trait CreatedAt{
        private $createdAt;

        public function getCreatedAt(){
            return $this->createdAt;
        }

        public function setCreatedAt($createdAt){
            if($createdAt < 150)
                $this->createdAt = $createdAt;
        }
    }