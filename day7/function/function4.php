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
?>
