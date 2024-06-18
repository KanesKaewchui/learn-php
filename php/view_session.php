<?php
    section_strat();
    if (session_id() == '') {
        session_start();
    }

    echo "<per>";
    echo "Session : ";
    echo "<br>";
    print_r($_SESSION);
    echo "<br>";
?>