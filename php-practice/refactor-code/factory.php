<?php 

    class Athlete{
        private $athleteName = "";


        public function getAthleteName():string{
            return $this->athleteName;
        }

        public function setAtheleteName(string $athleteName){
            $this->athleteName = $athleteName;
        }
    }


    class GoldWinner extends Athlete{
        private static $goldAthelete = null;

        public function __construct(String $athleteName)
        {   
            // setAtheleteName($athleteName);
        }

    }


?>