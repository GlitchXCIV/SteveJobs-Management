<?php
    require_once("Registry.php");
    require_once("Person.php");
    require_once("traitVote.php");
    //require_once("Storage.php");

    abstract class CollageGraduate implements Person/*, Storage*/ {
        use Registry;
        use TraitVote;
        public function infoCareer()
        {
            echo "Ciao mi sono laureato il".$this->getDate()."con".$this->getVote();
        }
    }

?>