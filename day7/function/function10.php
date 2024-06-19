<?php
    session_start();
    $_SESSION["code"] ="IT123";
    $_SESSION["name"] ="loki";
    $_SESSION["type"] ="1";

    echo "<p>รหัสพนักงาน: ".$_SESSION["code"]."<br>";
    echo "ชื่อพนักงาน: ".$_SESSION["name"]."<br>";
    echo "ประเภทพนักงาน: ".$_SESSION["type"]."<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="../day7/work3.php">
        <button type="submit">OK</button>
    </form>
</body>
</html>