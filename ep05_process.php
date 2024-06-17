<?php

$text01 = $_POST["text01"];
// $start_time = strt
$summary = 0;
$start_time = strtotime("now");
for ($i = 1; $i <= $text01; $i++){
    // echo "sum : ".($text01 + $i)."<br>";
    $summary = $summary + $i;
}
$end_time = strtotime("now");
$sumTime = $end_time - $start_time;
echo "$sumTime"."<br>";
echo "$summary";
?>
