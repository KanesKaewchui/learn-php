<?php
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

$sql = "INSERT INTO `user_info` (`username`, `password`, `fname`, `lname`, `email`, `id_card`, `phone_number`, `update_time`) 
VALUES ('test4', '999', 'z', 'x', 'qqq@qq.com', '777', '11111', '2024-06-13 14:40:23');";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

