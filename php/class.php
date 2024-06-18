<?php
    class God {
        //properties
        public $name;
        public $color;

        function setname($name){
            //methods
            $this->name = $name;
        }
        function getname(){
            return $this->name;
        }
    }
    $saymyname = new God();
    $saymyname->setname("Loki");
    echo $saymyname->getname();
?>