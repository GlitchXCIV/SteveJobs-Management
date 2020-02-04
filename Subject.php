<?php
        class Subject {
        private $name;
        private $description;
        private $duration;

        public function __construct($name, $description, $duration)
        {
            $this->name = $name;
            $this->description = $description;
            $this->duration = $duration;
        }
        public function getName() {
            return $this->name;
        }
        public function getDescription() {
            return $this->description;
        }
        public function getDuration() {
            return $this->duration;
        }
    }
?>