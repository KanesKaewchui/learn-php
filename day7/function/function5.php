<?php
    function arraytest() {
        $arr = array("php value"=>"8","nodejs value"=>"10","Css value"=>"20");
        foreach ($arr as $x => $y){
            echo "$x : $y <br>";
        }
    }
?>