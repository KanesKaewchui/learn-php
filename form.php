<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="" id="form1"> -->
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="number">number:</label><br>
        <input type="text" id="number" name="number"><br>
        <button type="submit" onclick="check()">submit</button>
        <script>
            function check() {
                console.log("TEST");
                let f = document.getElementById("name").value; console.log(f);
                let n = document.getElementById("number").value; console.log(n);

                // let checkstring = f.name.match("^[A-Za-z][A-Za-z]$"); console.log(checkstring);
                // let checknumber = f.number.match("^[0-9]$"); console.log(checknumber);

                if(f && n == ""){
                    alert("Do not enter blank values.");
                    return false;
                } 
                if (isNaN(f)) {
                    alert("please not enter number input 2");
                    console.log("please enter name");
                    return false;
                }
                if (isNaN(n)) {
                    alert("only enter number input 1");
                    console.log("please enter number");
                    return false;
                }
                // alert("name: " + checkstring + "number: " + checknumber)
            }
        </script>
    <!-- </form> -->
</body>
</html>