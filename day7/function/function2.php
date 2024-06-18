<?php
    // if else
    function ch($x,$y,$i){
        $a = 0;
        if($x >= 100 && $x <= 150 && $y >= 200 && $i == true){
            $a = 200;
        } elseif ($x >= 151 && $x <= 200 && $y >= 100 && $y <= 199 && $i == false) {
            $a = 300;
        } else {
            $a = 400;
        }
        return $a;
    }
    //switch
    function chswitch($x,$y,$i) {
        $b = 0;
        switch (true) {
            case $x >= 100 && $x <= 150 && $y >= 200 && $i == true:
                $b = 200;
                break;
            case $x >= 151 && $x <= 200 && $y >= 100 && $y <= 199 && $i == false:
                $b = 300;
                break;
            default:
                $b = 400;
                break;
        }
        return $b;
    }
?>