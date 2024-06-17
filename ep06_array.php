<?php
// $array1 = array(2, 3, 6, 99, 11, 33);
// $array2 = array("a" => "1", "b" => "30");

// foreach ($array1 as $key => $val) {
//     echo "key: " . $key . " = Val: " . $val;
//     echo "<br>";
// }

// $array3 = array(8, 4, 3, 6, 1, 2, 7, 9, 8, 20, 33, 60, 21);
// $arrayCount = count($array3);

// for ($i = 0; $i < $arrayCount; $i++) {
//     echo $array3[$i];
//     echo "<br>";
// }
?>

<?php      
    $array3 = array(8, 4, 3, 6, 1, 2, 7, 9, 8, 20, 33, 60, 21);
    $number = count($array3);

    for ($i = 0; $i < $number - 1; $i++) {
        $swapped = false;
        $j = 0;
        while ($j < $number - $i - 1) { 
            if ($array3[$j] > $array3[$j + 1]) { 
                $value = $array3[$j]; 
                $array3[$j] = $array3[$j + 1]; 
                $array3[$j + 1] = $value;
                $swapped = true;
            }
            $j++;
        }
        if (!$swapped) {
            break;
        }
    }
    echo "Sorting results :";
    print_r($array3);
?>











