<?php
    class Car{
        public $color = "red";
        private $numberOftire = 4;
        public static $country = "Canada";

        public function __construct($color) {
            $this->color = $color;
        }

        public function __destruct() {

           echo "O Objeto esta sendo destruído <br>";
        }

        public function setColor($val){

            $this->color = $val;
        }

        public function getColor(){

            return $this->color ;
            
        }

    }

    $bmw = new Car("white");
    echo $bmw ->color;
    echo $bmw -> getColor();
    $bmw->setColor("black");
    echo $bmw -> getColor();
    echo Car ::$country;
?>