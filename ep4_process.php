<?php
    $text01 =  $_POST["text01"];
    for ($i=1; $i <= $text01; $i++) {
        for ($j=1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    for ($i=$text01-1; $i >= 1; $i--) {
        for ($j=1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
?>
