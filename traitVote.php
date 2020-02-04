<?php
trait TraitVote {
    private $date;
        private $vote;
        public function getDate() {
            return $this->date;
        }
        public function getVote() {
            return $this->vote;
        }
        public function setDate($date) {
            $this->date = $date;
        }
        public function setVote ($vote) {
            $this->vote = $vote;
        }
}
?>