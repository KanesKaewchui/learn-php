<?php
// fact(5);
function fact($x) {
    if ($x > 0) { //ถ้า x เท่ากับจำนวนที่มากกว่า 0 จะแสงดออกมา
        echo $x." ";
    } else if ($x == 0) { //แล้วถ้าเกิด x มีจำนวนเท่ากับ 0 เมื่อไรจะ exit
        exit;
    }
    fact($x - 1); // จะลดจำนวนลดเรื่อยๆจนเข้าเงื่อนไข else if 
}

function testcat($x) {
    
    $sum = 1;
    for($i = $x; $i > 0;$i--) {
        $sum = $sum * $i;
        // echo $i.",";
    }
    return $sum;

}
echo testcat(0);


// echo test(4);
function test($i) {
    if ($i == 0 || $i == 1 ) {
        return 1;
    }
    if ($i > 0) {
        // echo $i." ";
        return  $i * test($i - 1);
    }

    // test($i + 1);
}


sometime(7);
 function sometime($y,$a = 0, $b = 1) {
    // $number = 1; 
    if ($y == 0){
        return;
    }
    echo $a.",";
    $next = $a + $b;
    sometime($y - 1,$b,$next);
 }

?>

