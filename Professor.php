<?php
    require_once("CollageGraduate.php");

    class Professor extends CollageGraduate {
        private $subjs = [];

        public function __construct($name, $surname, $birthday)
        {
            $this->name = $name;
            $this->surname = $surname;
            $this->birthday  = $birthday;
        }

        public function addSubject($subject) {
            array_push($this->subjs, $subject);
        }
        public function getSubject() {
            return $this->subjs;
        }
        public function countSubject(){
            return count($this->subjs);
        }
        public function getDetails() {
            echo "Materie insegnate: \n";
            print $this->subjs;
        }
        
    }

?>