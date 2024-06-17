<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Input1 : <input type="text" id="input1"><br>
    Input2 : <input type="text" id="input2"><br>
    <button type="button" name="ok" onclick="showRes()">OK</button>
    <div id="out_put">
        Waiting result...
    </div>
    <script>
        function showRes() {
            var input1 = parseFloat(document.getElementById("input1").value);
            var input2 = parseFloat(document.getElementById("input2").value);
            var result = input1 + input2;
            document.getElementById("out_put").textContent = isNaN(result) ? "Invalid input" : "Result: " + result;
        }
    </script>
</body>
</html>




