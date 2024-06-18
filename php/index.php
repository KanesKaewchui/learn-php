<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script scr="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="w-full bg-green-500 text-center text-4xl text-white h-24">
            <h1 class="pt-5">Welcome</h1>
        </div>
        <div class="Nav w-full h-16 bg-black text-center text-white flex justify-center gap-5 items-center">
            <div>Home</div>
            <div>About</div>
            <div>Contract</div>
        </div>
        <div class="Content h-screen">
            <div>Home</div>
            <button class="">
                <a href="./about.php" target="_blank" rel="noopener noreferrer">Click</a>
            </button>
            <script>alert("TEST");</script>
            <script>console.log("TEST2");</script>
            <script>document.write("TEST3");</script>
            <div id="home">
                <script> let A = "cominghome";
                document.getElementById("home").innerHTML = A;
                document.write("cominghome");
                </script>
            </div>
            <div id="grade">
                <script>
                    function grade(value) {
                        switch (true) {
                            case value >= 80:
                                document.getElementById("grade").innerHTML = "good";
                                break;
                            case value >= 50:
                                break;
                            case value < 50:
                                break;
                            default:
                                break;
                        }
                    
                        // if (value >= 80){
                        //     //  console.log("good");
                        //      document.getElementById("grade").innerHTML = "good";
                        // } else if (value >= 50) {
                        //     console.log("D");
                        // } else if (value < 50) {
                        //     console.log("F");
                        // } else {
                        //     console.log("Invalid");
                        // }
                    }
                    grade(90);
                </script>
            </div>
            <div id="loop">
                <script>
                    let N;
                    let min = 5 ,max = 500;
                    document.write("loop");
                    for(i = 1; i<= 20; i++){
                        N = Math.floor(Math.random() * 500) + 1;
                        if (N < min) min = N;
                        if (N > max) max = N;
                        if (N >= 300 ) { break; }          
                        document.write("<br>" + N);
                    }
                    document.write("<hr> Min =" + min + "Max = " + max);
                </script>
            </div>
        </div>
    </header>
    <footer>
        <div class="bg-black text-center text-white">frontend</div>
    </footer>
</body>
</html>