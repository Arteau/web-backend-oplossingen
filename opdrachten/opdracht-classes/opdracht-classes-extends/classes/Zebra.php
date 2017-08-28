<?php 
    class Zebra extends Animal {
        protected $species;

        public function __construct($name, $gender, $health, $species)
        {
            parent::__construct($name, $gender, $health);
            $this->species = $species;
        }

        public function getSpecies(){
            return $this->species;
        }
        
        public function printInfo()
        {
            echo "De speciale move van ".$this->getName()." (soort: ".$this->getSpecies()."): ".$this->doSpecialMove().".";
        }
    }
?>