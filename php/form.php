<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="form1">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="number">Number:</label><br>
        <input type="text" id="number" name="number"><br>
        <button type="button" onclick="check()">Submit</button>
        <script>
            function check() {
                let f = document.getElementById("name").value.trim();
                let n = document.getElementById("number").value.trim();

                if (f === "" || n === "") {
                    alert("Do not enter blank values.");
                    return false;
                }

                if (!isNaN(f)) {
                    alert("Please enter a valid name (not a number).");
                    console.log("Please enter name");
                    return false;
                }

                if (isNaN(n)) {
                    alert("Please enter a valid number.");
                    console.log("Please enter number");
                    return false;
                }
                alert("Form submitted successfully!");
            }
        </script>
    </form>
</body>
</html>
