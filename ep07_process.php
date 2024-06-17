<?php
    $username = $_POST["username"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $account = $_POST["account"];
    $password = $_POST["password"];
    $confirm = $_POST["confirmpassword"];
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    


    $username_check = preg_match("/^[a-zA-Z0-9]{4,12}$/",$username);
    $email_check = preg_match("/^[a-zA-Z0-9_.±]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$/",$email);
    $number_check = preg_match("/^[0-9]+$/",$number);
    $account_check = preg_match("/^[0-9]{13}$/",$account);
    $password_check = ($password != $confirm);
    


    if (!$username_check){
        echo "username is wrong";
        exit;
    }

    if(!$email_check) {
        echo "email is wrong";
        exit;
    }

    if (!$number_check) {
        echo "number is wrong";
        exit;
    }

    if (!$account_check) {
        echo "account is wrong";
        exit;
    }

    if ($password_check) {
        echo "password is wrong";
        exit;
    }

    $db_servername = "localhost"; //127.0.0.1
$db_username = "Test";
$db_password = "12345";
$dbname = "db_user";

// Create connection
$conn = new mysqli($db_servername, $db_username, $db_password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$password_md5 = md5($password);
$create_time = date("Y-m-d H:i:s");

$sql = "INSERT INTO `user_info` (`username`, `password`, `fname`, `lname`, `email`, `id_card`, `phone_number`, `create_time`) 
        VALUES ('{$username}', '{$password_md5}', '{$name}', '{$lastname}', '{$email}', '{$account}', '{$number}', '{$create_time}');";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table style="width:350px; margin:0 auto">
            <th>Label</th>
            <th>data</th>
            <tr>
                <td style="text-align:right">Username:</td>
                <td><?php echo $username;?></td>
            </tr>    
            <tr>
                <td style="text-align:right">Name:</td>
                <td><?= $username;?></td>
            </tr>
            <tr>
                <td style="text-align:right">Last Name:</td>
                <td><?php echo $username;?></td>
            </tr>
            <tr>
                <td style="text-align:right">Number: </td>
                <td><?php echo $number;?></td>
            </tr>
            <tr>
                <td style="text-align:right">Email:</td>
                <td><?php echo $email;?></td>
            </tr>
            <tr>
                <td style="text-align:right">Account:</td>
                <td><?php echo $account;?></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="button" onclick="window.location.href='ep07_form.php'">back</button></td>
            </tr>
        </table>
</body>
</html>

