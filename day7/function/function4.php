<?php
    function randomint() {
        $arr = [];
        for ($i = 0; $i <= 40; $i += 5) {
            $arr[] = $i;
        }
        echo implode(",", $arr);
        echo "<br>";
    }
    
    function back() {
        $arr = [];
        for ($i = 20; $i >= -20; $i -= 5) {
            $arr[] = $i;
        }
        echo implode(",", $arr);
        echo "<br>";
    }

    function arraytest() {
        $arr = array("php value"=>"8","nodejs value"=>"10","Css value"=>"20");
        foreach ($arr as $x => $y){
            echo "$x : $y <br>";
        }
    }

    function arrayrandom(){
        $arr =array (70,20,35,0,45,10);
        foreach ($arr as $x){
            if ($x < 1) continue; {
                print_r($x);
                // echo "TEST";
            }
        }
    }
    
?>


<?php

    // function triangle() {
    //     for($x=0; $x<=20; $x++){        
    //         for($i=0; $i<=$x; $i++){
    //             if ($x % 5 == 0 && $x != 0) {
    //                 echo "z";
    //             } else {
    //                 echo "x";
    //             }
    //         }
    //         echo "<br>";
    //     }
    // }
    
    function triangle() {
        for ($x = 0; $x <= 5; $x++) {
            if (($x + 1) % 5 == 0 && $x != 0) {
                echo str_repeat("z", $x + 1);  
            } else {
                echo str_repeat("x", $x + 1); 
            }
            echo "<br>";
        }
    }
    
?>