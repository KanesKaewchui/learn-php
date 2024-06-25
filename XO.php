<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>XO</title>
</head>

<body>
    <form method="post" action="">
        <label for="layers">กรอกจำนวนชั้น (ขั้นต่ำ 5 ชั้น สูงสุด 50 ชั้น):</label>
        <input type="number" id="layers" name="layers" min="5" max="50" required>
        <input type="submit" value="วาดรูป">
    </form>

    <!-- สี่เหลี่ยม -->
    <?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $layers = intval($_POST["layers"]);
    //     if ($layers >= 5 && $layers <= 50) {
    //         for ($i = 0; $i < $layers; $i++) {
    //             for ($j = 0; $j <= $i; $j++) {
    //                 echo "X";
    //             }
    //             for ($j = $i + 0; $j < $layers; $j++) {
    //                 echo "O";
    //             }
    //             echo "<br>";
    //         }
    //     }
    // }
    ?>


    <!-- สามเหลี่ยม -->
    <?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $layers = intval($_POST["layers"]);
    //     if ($layers >= 5 && $layers <= 50) {
    //         for ($i = 0; $i < $layers; $i++) {
    //             for ($j = 0; $j <= $i; $j++) {
    //                 echo "X";
    //             }
    //             for ($j = $i; $j < $layers; $j++) {
    //                 echo "O";
    //             }
    //             for ($j = $i + 1; $j < $layers; $j++) {
    //                 echo "O";
    //             }
    //             for ($j = 0; $j <= $i; $j++) {
    //                 echo "X";
    //             }
    //             echo "<br>";
    //         }
    //     }
    // }
    ?>

    <!-- ครึ่งสามาเหลี่ยม -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $layers = intval($_POST["layers"]);
        if ($layers >= 5 && $layers <= 50) {
            for ($i = 0; $i < $layers; $i++) {
                if ($i % 5 == 0) {
                    for ($j = 1; $j <= $i; $j++) {
                        echo "O";
                    }
                } else {
                    for ($j = 1; $j <= $i; $j++) {
                        if ($j == 5) {
                            echo "O";
                        } else {
                            echo "X";
                        }
                    }
                }
                echo "<br>";
            }
        }
    }
    ?>
</body>

</html>