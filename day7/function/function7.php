<?php
    function triangle() {
        for ($x = 1; $x <= 20; $x++) {
            if ($x % 5 == 0) {
                for ($i = 0; $i < $x; $i++) {
                    echo "z";
                }
            } else {
                for ($i = 0; $i < $x; $i++) {
                    echo "x";
                }
            }
            echo "<br>";
        }
    }
?>