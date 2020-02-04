<?php
    require_once("Registry.php");
    require_once("Person.php");
    require_once("traitVote.php");

    abstract class Graduate implements Person/*, Storage*/ {
        use Registry;
        use TraitVote;
        public function infoCareer()
        {
            echo "Ciao mi sono diplomato il".$this->getDate()."con".$this->getVote();
        }

    }
?>