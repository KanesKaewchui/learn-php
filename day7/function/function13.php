<?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input_value = $_POST['input_value'];

        $api_url = "https://competitive-burton-accommodation-raised.trycloudflare.com/dashboard/apiget.php";
        $res = @file_get_contents($api_url);
        
        if (!$res) {
            die("อ่านข้อมูลจาก API ไม่สำเร็จ");
        }
        
        $json = json_decode($res);

        $_SESSION["api_data"] = $json;
        $_SESSION["input_value"] = $input_value;
        
        header("Location: work3.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API</title>
</head>
<body>
    <h2>แสดงข้อมูล API</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="input_value" placeholder="ใส่ข้อมูล">
        <input type="submit" value="แสดงข้อมูล">
    </form>
</body>
</html>






