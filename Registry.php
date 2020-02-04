<?php
    trait Registry {
    private $name;
    private $surname;
    private $birthday;

        public function getName() {
            return $this->name;
        }
        public function getSurname(){
            return $this->surname;
        }
        public function getBirthday() {
            return $this->birthday;
        }
        public function getAge() {
            return date_diff(date_create(), date_create($this->birthday));
        }

        public function setName($name){
            $this->name = $name; 
        }
        public function setSurname($surname){
            $this->surname = $surname;  
        }
        public function setBirthday($birthday){
            $this->birthday = $birthday;
        }
    }
?>