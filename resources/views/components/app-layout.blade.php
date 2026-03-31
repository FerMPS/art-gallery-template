<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Galería de Arte' }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    @vite(['resources/css/app.css'])
</head>

<body class="font-sans antialiased bg-gallery-bg text-gallery-text">

    <div class="fixed top-8 left-0 w-full z-50 flex justify-center px-4">
        <header class="header-capsule">
            <nav class="hidden md:block">
                <ul class="flex space-x-12">
                    <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li><a href="#" class="nav-link">Obras</a></li>
                    <li><a href="#" class="nav-link">Exposiciones</a></li>
                    <li><a href="{{ route('about') }}" class="nav-link">Acerca de Mi</a></li>
                </ul>
            </nav>

            <button class="md:hidden text-gallery-accent">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 8h16M4 16h16"></path>
                </svg>
            </button>
        </header>
    </div>

    <main>
        {{ $slot }}
    </main>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 700,
                once: true,
                offset: 100,
                delay: 50,
                easing: 'ease-out-quad',
                disable: function() {
                    return window.innerWidth < 768;
                }
            });
        });

        window.addEventListener('load', function() {
            AOS.refresh();
        });
    </script>
</body>

</html>