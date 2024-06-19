<?php
    function arrayrandom(){
        $arr =array (70,20,35,0,45,10);
        foreach ($arr as $x){
            if ($x < 1) continue; {
                print_r($x);
            }
        }
    }
?>