<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Purrfect Adopt</title>

        <!-- Fonts -->
        <link
            href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap"
            rel="stylesheet">

        <script src="https://kit.fontawesome.com/61cc44f0a1.js" crossorigin="anonymous"></script>

        <style>
            body {
                font-family: 'Poppins', sans-serif;
                background-color: #FFF7D4;
            }
        </style>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @include('components.header');

        <div class="flex items-center justify-center h-screen rounded lg">
            <div class="bg-yellow-300 w-2/3 p-4 rounded-lg">
                <div class="flex">
                    <div class="w-1/2 p-2 rounded-lg">
                        <img src="gambar.jpg" alt="Gambar" class="w-full">
                    </div>
                    <div class="w-1/2 p-2">
                        <div class="bg-white h-16 mb-2 rounded-lg flex items-center pl-4">
                            <input
                                type="text"
                                class="w-full h-full p-4 text-lg text-gray-500 outline-none rounded"
                                placeholder="Title">
                        </div>
                        <div class="bg-white h-16 mb-2 rounded-lg flex items-center pl-4">
                            <input
                                type="text"
                                class="w-full h-full p-4 text-lg text-gray-500 outline-none rounded"
                                placeholder="Your Address">
                        </div>
                        <div class="bg-white h-32 mb-2 rounded-lg">
                            <textarea
                                class="w-full h-full p-4 text-lg text-gray-500 resize-none outline-none rounded"
                                placeholder="Caption"></textarea>
                        </div>
                        <div class="bg-white h-16 mb-2 rounded-lg flex items-center pl-4">
                            <input
                                type="text"
                                class="w-full h-full p-4 text-lg text-gray-500 outline-none rounded"
                                placeholder="Phone Number">
                        </div>
                        <div class="flex items-end">
                            <a href="#" class="text-blue-500 underline text-sm">Clear All</a>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end">
                    <button
                        class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2">
                        Save
                    </button>
                </div>
            </div>
        </div>

        @include('components.footer');
    </body>
</html>