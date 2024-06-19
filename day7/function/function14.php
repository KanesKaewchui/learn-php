<?php
    session_start();

    if (!isset($_SESSION["api_data"]) || !isset($_SESSION["input_value"])) {
        die("ไม่พบข้อมูลที่ส่งมาจาก index.php");
    }

    $json = $_SESSION["api_data"];
    $input_value = $_SESSION["input_value"];

    echo "<h2>ข้อมูลจาก API</h2>";

    foreach ($json as $key => $value) {
        if ((isset($value->data) && $value->data === $input_value) || 
            (isset($value->data2) && $value->data2 === $input_value)) {
            
            echo "<p>{$value->data}, {$value->data2}, {$value->data3->text}</p>";
        }
    }

    unset($_SESSION["api_data"]);
    unset($_SESSION["input_value"]);
?>





