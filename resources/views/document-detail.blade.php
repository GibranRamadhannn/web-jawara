<!DOCTYPE html>
<html lang="en" class="font-montserrat scroll-smooth subpixel-antialiased">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- TAILWIND --}}
    @vite('resources/css/app.css')

    {{-- FONT --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    {{-- LINKS --}}
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>

    <title>JAWARA 2.0</title>
</head>

<body>

    {{-- STYLESHEET --}}

    {{-- NAVBAR --}}
    <x-navbar></x-navbar>
    {{-- NAVBAR --}}

    {{-- HERO --}}
    <x-hero-document-detail></x-hero-document-detail>
    {{-- HERO --}}
</body>

<footer>
    <x-footer></x-footer>
</footer>

{{-- SCRIPTS JS --}}

{{-- Script navbar anti-scroll --}}
<script>
    window.addEventListener('scroll', function() {
        var navbar = document.getElementById('navbar');
        if (window.scrollY > 0) {
            navbar.classList.add('shadow-lg');
        } else {
            navbar.classList.remove('shadow-lg');
        }
    });
</script>
{{-- Script navbar anti-scroll --}}

</html>
