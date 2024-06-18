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
            <p>homepage!</p>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr class="w-full bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-2 px-6 text-left w-5">Name</th>
                            <th class="py-3 px-6 text-left">Email</th>
                            <th class="py-3 px-6 text-left">Phone</th>
                            <th class="py-3 px-6 text-left">Id</th>
                            <th class="py-3 px-6 text-left">img</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-2 px-6 text-left">AAAAAAAAAA</td>
                            <td class="py-2 px-6 text-left">A.com</td>
                            <td class="py-2 px-6 text-left">123-456-7890</td>
                            <td class="py-2 px-6 text-left">123-456-7890</td>
                            <td class="py-2 px-6">
                                <img src="https://s2.coinmarketcap.com/static/img/coins/200x200/1808.png" 
                                     alt="Image Description" class="w-8 h-8 rounded-full">
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="text-gray-600 text-sm font-light">
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-2 px-6 text-left">AAAAAAAAAA</td>
                            <td class="py-2 px-6 text-left">A.com</td>
                            <td class="py-2 px-6 text-left">123-456-7890</td>
                            <td class="py-2 px-6 text-left">123-456-7890</td>
                            <td class="py-2 px-6">
                                <img src="https://s2.coinmarketcap.com/static/img/coins/200x200/1808.png" 
                                     alt="Image Description" class="w-8 h-8 rounded-full">
                            </td>
                        </tr>
                    </tbody>
                    <tbody class="text-gray-600 text-sm font-light">
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-2 px-6 text-left">AAAAAAAAAA</td>
                            <td class="py-2 px-6 text-left">A.com</td>
                            <td class="py-2 px-6 text-left">123-456-7890</td>
                            <td class="py-2 px-6 text-left">123-456-7890</td>
                            <td class="py-2 px-6">
                                <img src="https://s2.coinmarketcap.com/static/img/coins/200x200/1808.png" 
                                     alt="Image Description" class="w-8 h-8 rounded-full">
                            </td>
                        </tr>
                    </tbody>
                    
                </table>
            </div>
        </div>
        <div id="about" class="page hidden">
            <h1>ABOUT</h1>
            <p>About!</p>
        </div>
        <div id="contact" class="page hidden">
            <h1>CONTACT</h1>
            <p>Contact!</p>
        </div>
        <button class="bg-blue-500 text-white px-4 py-2 mt-4" id="theme-switcher">
            Theme
        </button>
    </main>
    <footer>
        <div class="bg-black text-center text-white">frontend</div>
    </footer>
</body>
</html>




