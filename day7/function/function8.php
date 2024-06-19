<?php
    function showDate($dayAdd, $monthAdd, $yearAdd, $hourAdd, $minuteAdd, $secondAdd) {
        echo "Current date: " . date("Y-m-d H:i:s") . "<br>";
        
        $newdate = date("Y-m-d H:i:s", strtotime(
            "+" . $dayAdd . " days " .
            "+" . $monthAdd . " months " .
            "+" . $yearAdd . " years " .
            "+" . $hourAdd . " hours " .
            "+" . $minuteAdd . " minutes " .
            "+" . $secondAdd . " seconds"
        ));
        
        echo "Date after adding $dayAdd days, $monthAdd months, $yearAdd years, $hourAdd hours, $minuteAdd minutes, $secondAdd seconds: " . $newdate . "<br>";
    }
?>
