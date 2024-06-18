<?php
    function random($min,$max) {
        $number = rand($min,$max);
        $string = "";

        switch (true) {
            case $number <= 50:
                $string = "F";
                echo "F";
                break;
            case $number <= 60:
                $string = "C";
                break;
            case $number <= 70:
                $string = "D";
                break;
            case $number <= 80:
                $string = "B";
                break;
            case $number > 80:
                $string = "A";
                break;
            default:
                echo "noting";
                break;
        }
        return "number: $number"."<br>"."grade: $string";
    }
?>