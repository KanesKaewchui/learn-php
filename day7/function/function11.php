<?php
    session_start();
    session_destroy();
    echo "Session destroyed."."<br>";
    print_r($_SESSION)

    // session_start();
    // session_unset();
    // echo "Session unset."."<br>";
    // print_r($_SESSION)
?>