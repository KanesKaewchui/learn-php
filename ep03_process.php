<?php
    $text01 = 0;
    $text02 = 0;
    echo "text01 : ".$_GET["text01"];
    echo "<br>";
    echo "text02 : ".$_GET["text02"];
    if (isset($_GET["submit"]) && $_GET["submit"] !=""){
        if ($_GET["text01"]!=""){

            if (is_numeric($_GET["text01"])){
                $text01 = $_GET["text01"];
            } else {
                echo "text01 is not numeric";
                exit;
            }
        }  
        if($_GET["text02"]!=""){
            if (is_numeric($_GET["text02"])){
                $text02 = $_GET["text02"];
            } else {
                echo "text02 is not numeric";
                exit;
            }
        }
        echo "<p>result is :</p>".($text01+$text02);
    }else{
        echo"text01 is not a number!";
        echo "Can't get data";
        exit;
    }
?>