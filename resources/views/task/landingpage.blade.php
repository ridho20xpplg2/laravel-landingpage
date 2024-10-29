<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex flex-col items-center p-5">
    <header class="flex justify-between items-center w-full max-w-3xl bg-white p-3 rounded-lg shadow">
        <div class="text-xl font-bold p-2 bg-gray-300 rounded-full w-12 h-12 flex items-center justify-center">R</div>
        <div class="flex">
            <img src="{{ asset('img/search-icon.png') }}" alt="Search Icon" class="w-8 ml-4 cursor-pointer">
            <img src="{{ asset('img/phone-icon.png') }}" alt="Phone Icon" class="w-8 ml-4 cursor-pointer">
            <img src="{{ asset('img/home-icon.png') }}" alt="Home Icon" class="w-8 ml-4 cursor-pointer">
            <img src="{{ asset('img/menu-icon.png') }}" alt="Menu Icon" class="w-8 ml-4 cursor-pointer">
        </div>
    </header>

    <section class="mt-5 w-full max-w-3xl flex flex-col items-center">
        <div class="bg-white p-5 rounded-lg shadow mb-5 flex flex-col items-center max-w-xs w-full">
            <img src="{{ asset('img/image1.png') }}" alt="Image 1" class="w-full rounded-lg">
            <p class="mt-3 text-center text-lg">Design kami memiliki berbagai macam pilihan gambar!!</p>
        </div>

        <div class="bg-white p-5 rounded-lg shadow mb-5 flex flex-col items-center max-w-xs w-full">
            <img src="{{ asset('img/image3.png') }}" alt="Image 3" class="w-full rounded-lg">
            <button class="mt-5 px-4 py-2 bg-white border-2 border-gray-300 rounded-lg text-lg transition duration-300 hover:bg-gray-300">Coba</button>
        </div>

        <div class="bg-white p-5 rounded-lg shadow mb-5 flex flex-col items-center max-w-xs w-full">
            <img src="{{ asset('img/image4.png') }}" alt="Image 4" class="w-full rounded-lg">
            <button class="mt-5 px-4 py-2 bg-white border-2 border-gray-300 rounded-lg text-lg transition duration-300 hover:bg-gray-300">Coba</button>
        </div>
    </section>
</body>
</html>