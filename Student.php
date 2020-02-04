<?php
    require_once("Graduate.php");
    require_once("Storage.php");
    require_once("Database.php");

    class Student extends Graduate {
        private $passedSub = [];
        private $mysqli;
        static $file = null; 

      /*  public function __construct($name, $surname, $birthday)
        {
            $this->name = $name;
            $this->surname = $surname;
            $this->birthday  = $birthday;
        }*/
        private function __construct(){
            $this->mysqli = new Database();
            $this->mysqli->connect();
        }
        public static function standardCreate($name, $surname, $birthday) {
            $standardCreate = new static();
            $standardCreate->setName($name);
            $standardCreate->setSurname($surname);
            $standardCreate->setBirthday($birthday);
            return $standardCreate;
        }
        public function getPassedSubject() {
            return $this->passedSub;
        }
        public function addPassedSubject(Subject $subject) {
            array_push($this->passedSub, $subject);
        }
        public function numberPassedSubject() {
            return count($this->passedSub);
        }
        public function avarageSubject() {
            $count = 0; 
            foreach ($this->passedSub as $sub) {
                $count += $sub->getVote();
            }
            $avarage = $count/$this->numberPassedSubject();
            if ($avarage > 6 && $avarage < 7) {
                throw new Exception ("Sei una 🐐");
            }
            return "Sei un 🤓 ".$avarage;
        }
        public function detailsPassedSubject() {
            echo "Materie passate: \n";
            print $this->passedSub;
        }
        private static function getFile ($type="path")
        {
            if ($type == "path"){ 
                return"/Applications/MAMP/htdocs/GlitchXCIV/2020-01-15/2020-01-15SteveJobsAcademy/Students.txt";
            }
            if ($type == "pointer"){
            return fopen('/Applications/MAMP/htdocs/GlitchXCIV/2020-01-15/2020-01-15SteveJobsAcademy/Students.txt', 'r+');
            }
        }
        public function save($type = 'file')
        {
            if ($type == 'file') {
                $row = "🟢 ".$this->getName()." ".$this->getSurname()." ".$this->getBirthday()."\n";
                file_put_contents(self::getFile(), $row, FILE_APPEND);
            }
        }
        public function read($type = 'file'){
            if ($type == 'file') {
                $row = fgets (self::getFile("pointer"));
                echo "\nFile: ".$row;
                str_replace($row, "", self::getFile());
                file_put_contents(self::getFile(), "");
            }
        } 
    }
?>