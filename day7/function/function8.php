<?php
function showDate($dayAdd) {
    echo "Current date: " . date("Y-m-d H:i:s") . "<br>";
    $newdate = date("Y-m-d H:i:s", strtotime("+" . $dayAdd . " days"));
    echo "Date after adding $dayAdd day: " . $newdate . "<br>";
}
?>