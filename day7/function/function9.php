<?php
    function get_ip(){
        $ip  =$_SERVER["REMOTE_ADDR"];
        return substr($ip,0,50);
    }


    // session_start();
    // $_SESSION["code"] ="IT123";
    // $_SESSION["name"] ="loki";
    // $_SESSION["type"] ="1";

    // echo "<p>รหัสพนักงาน: ".$_SESSION["code"]."<br>";
    // echo "ชื่อพนักงาน: ".$_SESSION["name"]."<br>";
    // echo "ประเภทพนักงาน: ".$_SESSION["type"]."<br>";
    // print_r($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button type="button">OK</button>
</body>
</html>