<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <script>
        let arr = [];
        for (i=0; i < 5; i++){
            let number = Math.floor(Math.random() * 300) + 1;
            arr.push(number);
        }
        arr.sort((a,b) => a-b);
        console.log(arr);
        document.write("result: " + arr );
    </script> -->
    <script>
        let arr1 = [];
        let arr2 = [];
        for (i=0; i < 3; i++){

            let number1;  
            do {
                number1 = Math.floor(Math.random() * 3) + 1;
            } while (number1 == 1 );

            let number2;
            do {
                number2 = Math.floor(Math.random() * 3) + 1;
            } while (number2 == 2);

            arr1.push(number1);
            arr2.push(number2);

        }
        arr1.sort((a,b) => a-b);
        console.log(arr1);
        console.log(arr2);
        document.write("result: " + arr1 + "<br>");
        document.write("result: " + arr2 + "<br>");
        let combyArray = arr1.concat(arr2);
        document.write("Combined result: " + combyArray);
    </script>
</body>
</html>