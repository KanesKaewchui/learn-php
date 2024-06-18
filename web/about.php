<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="./script_themes.js" defer></script>
    <title>Document</title>
    <style>
        body.dark {
            --tw-bg-opacity: 1;
            background-color: rgba(31, 41, 55, var(--tw-bg-opacity));
            --tw-text-opacity: 1;
            color: rgba(255, 255, 255, var(--tw-text-opacity));
        }
    </style>
</head>
<body class="bg-white text-black">
    <header>
        <div class="w-full bg-green-500 text-center text-4xl text-white h-24">
            <h1 class="pt-5">Welcome</h1>
        </div>
        <div class="Nav w-full h-16 bg-black text-center text-white flex justify-center gap-5 items-center">
            <div class="nav-link" data-target="home">Home</div>
            <div class="nav-link" data-target="about">About</div>
            <div class="nav-link" data-target="contact">Contact</div>
        </div>
    </header>
    <main class="Content h-screen p-5">
        <div id="home" class="page">
            <h1>HOME</h1>
            <p>Welcome to the homepage!</p>

        </div>
        <div id="about" class="page hidden">
            <h1>ABOUT</h1>
            <p>About us content goes here.</p>
            
        </div>
        <div id="contact" class="page hidden">
            <h1>CONTACT</h1>
            <p>Contact us content goes here.</p>
        </div>
        <button class="bg-blue-500 text-white px-4 py-2 mt-4" id="theme-switcher">
            Toggle Theme
        </button>
    </main>
    <footer>
        <div class="bg-black text-center text-white">frontend</div>
    </footer>
</body>
</html>