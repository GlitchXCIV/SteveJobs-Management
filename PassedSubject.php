<?php 
    require_once("traitVote.php");
    require_once("Subject.php");

    if (trait_exists('TraitVote', false)) {
    class PassedSubject extends Subject {
        use TraitVote;
    }
}
?>