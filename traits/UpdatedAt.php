<?php
    namespace traits;

    trait UpdatedAt{
        private $creaupdatedAttedAt;

        public function getUpdatedAt(){
            return $this->updatedAt;
        }

        public function setUpdatedAt($updatedAt){
            if($updatedAt < 150)
                $this->updatedAt = $updatedAt;
        }
    }