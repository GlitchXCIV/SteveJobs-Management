<?php
    interface Person {
        public function getName();
        public function getSurname();
        public function getBirthday();
        public function getAge();
        
        public function infoCareer();

        public function setName($name);
        public function setSurname($surname);
        public function setBirthday($birthday);    
}   
?>