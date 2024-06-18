<?php
    session_start();

    if (isset($_POST['submit'])) {
        


        //add
        $db_servername = "localhost"; //127.0.0.1
        $db_username = "Test";
        $db_password = "12345";
        $dbname = "db_user";

        $conn = new mysqli($db_servername, $db_username, $db_password,$dbname);
        $username = $conn->real_escape_string($_POST['username']);
        $password = $conn->real_escape_string($_POST['password']); 

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $password_md5 = md5($password);


        $sql = "SELECT id, username,password FROM user_info 
        WHERE username ='".$username."' AND 
              password ='".$password_md5."' AND
              status = '1'";

        $result = $conn->query($sql);

            if ($result->num_rows == 1) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "id: " 
                    . $row["id"]. " - Name: " 
                    . $row["username"]. " " 
                    . $row["password"]. "<br>";
                }
            } else {
                    echo "0 results";
                }
                $conn->close();

                //end

        // $arrayUserinfo = array(
        //     "username" => "test01",
        //     "password" => "abc123"
        // );

    //     if ( $arrayUserinfo["username"] == $username && $arrayUserinfo["password"] == $password) {
    //         $_SESSION['username'] = $username;
    //         header("Location:login_success.php");
    //         exit;
            
    //     } else {
    //         echo "Invalid username or password";
    //         exit;
    //     }
    // } else {
    //     echo "plase username and password submit";
    //     exit;
     }
?>





