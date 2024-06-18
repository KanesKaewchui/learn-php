<?php
    session_start();
    if(isset($_SESSION['username']) && $_SESSION["username"] != "") {
        // session_destroy();
        header("Location:login_success.php");
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <form action="login_process.php" method="POST">
        <style>
            table{
                width: 350px;
                margin:50px auto;
                padding:0 auto;
            }
            td{
                padding: 0 auto;
            }
        </style>
        <table>
            <tr>
                <td style="text-align:right">Username:</td>
                <td><input type="text" name="username" id="username" required></td>
            </tr>
            <tr>
                <td style="text-align:right">Password:</td>
                <td><input type="password" name="password" id="password" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>
