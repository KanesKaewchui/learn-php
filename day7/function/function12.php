<?php
    // $cars = array("Audi","Benz","BMW","Volvo");
    // $product = array("Cutter" => 55, "Pencil" => 5,"Eraser" => 12);

    // echo json_encode($cars);
    // echo "<br>";
    // echo json_encode($product);

    // $jsonObj = '{"Cutter":55,"Pencil":5,"Eraser":1}';
    // // $Obj = json_decode($jsonObj);
    // $arr = json_decode($jsonObj,true);
    // echo $arr["Cutter"]."<br>";
    // echo $arr["Eraser"]."<hr>";
    // // echo $Obj->Pencil."<br>";

    // foreach($arr as $a => $b){
    //     echo "$a ราคา $b บาท <br>";
    // }

    // $str = file_get_contents("C:/xampp/htdocs/EP01/day7/function/get.text");
    // echo "DIR: ".__DIR__;
    // echo $str;

    $api_url = "https://competitive-burton-accommodation-raised.trycloudflare.com/dashboard/apiget.php";
    $res = @file_get_contents($api_url);

    if (!$res) {
        die("อ่านข้อมูลจาก API ไม่สำเร็จ");
    }

    $json = json_decode($res);

    if ($json->code == 300 && strtolower($json->message) == "ok") {
        echo "สินค้าในสต๊อก: ";
        echo "<ol>";

        foreach ($json->data as $product) {
            echo "<li>ID " . $product->id . 
            " Name " . $product->name . 
            " ราคา " . $product->data->price . 
            " บาท</li>";
        }

        echo "</ol>";
    } else {
        die("เกิดข้อผิดพลาด " . $json->code . ": " . $json->message); 
    }

    
?>