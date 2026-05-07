<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAWEECORE 2023</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    @stack('styles')
</head>
<body>
    <header>
        <a href="#home" class="logo"><img src="{{ asset('assets/logo.png') }}" alt="Logo"></a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navlist">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#portfolio">Interests</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <a href="{{ asset('assets/RECTIN CV.pdf') }}" class="top-btn">Download CV</a>
    </header>

    <main>
        @yield('content')
    </main>

    <div class="ends">
        <p>Made with love by Marielle J. Rectin © 2023</p>
    </div>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
