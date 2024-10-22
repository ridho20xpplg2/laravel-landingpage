<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
</head>
<body>
    <header class="header">
        <div class="logo">R</div>
        <div class="header-icons">
            <img src="{{ asset('img/search-icon.png') }}" alt="Search Icon">
            <img src="{{ asset('img/phone-icon.png') }}" alt="Phone Icon">
            <img src="{{ asset('img/home-icon.png') }}" alt="Home Icon">
            <img src="{{ asset('img/menu-icon.png') }}" alt="Menu Icon">
        </div>
    </header>

    <section class="main-content">
        <div class="image-card">
            <img src="{{ asset('img/image1.png') }}" alt="Image 1">
            <p>Design kami memiliki berbagai macam pilihan gambar!!</p>
        </div>
    </section>

    <section class="main-content">
        <div class="image-card">
            <img src="{{ asset('img/image3.png') }}" alt="Image 3">
            <button>Coba</button>
        </div>
    </section>

    <section class="main-content">
        <div class="image-card">
            <img src="{{ asset('img/image4.png') }}" alt="Image 4">
            <button>Coba</button>
        </div>
    </section>
</body>
</html>