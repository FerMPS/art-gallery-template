<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Galería de Arte' }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gallery-bg text-gallery-text overflow-x-hidden">

    <div class="fixed top-8 left-0 w-full z-[100] flex justify-center px-4">
        <header class="header-capsule">
            <nav class="hidden md:block">
                <ul class="flex space-x-12">
                    <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li><a href="{{ route('collections') }}" class="nav-link">Obras</a></li>
                    <li><a href="#" class="nav-link">Exposiciones</a></li>
                    <li><a href="{{ route('about') }}" class="nav-link">Acerca de Mi</a></li>
                </ul>
            </nav>

            <button class="md:hidden text-gallery-text p-2" onclick="toggleMobileMenu()">
                <svg id="menu-icon" class="w-6 h-6 transition-transform duration-500" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M4 8h16M4 16h16"></path>
                </svg>
            </button>
        </header>
    </div>

    <div id="mobile-menu"
        class="fixed inset-0 z-[90] bg-gallery-bg/95 backdrop-blur-xl translate-x-full transition-transform duration-700 ease-in-out md:hidden">
        <div class="flex flex-col items-center justify-center h-full space-y-10">
            <span class="text-gallery-accent text-[10px] tracking-[1em] uppercase font-bold opacity-50">Menú</span>
            <nav class="text-center">
                <ul class="space-y-8">
                    <li><a href="{{ route('home') }}"
                            class="text-4xl font-thin tracking-tighter hover:text-gallery-accent transition-colors"
                            onclick="toggleMobileMenu()">Home</a></li>
                    <li><a href="{{ route('collections') }}"
                            class="text-4xl font-thin tracking-tighter hover:text-gallery-accent transition-colors"
                            onclick="toggleMobileMenu()">Obras</a></li>
                    <li><a href="#"
                            class="text-4xl font-thin tracking-tighter hover:text-gallery-accent transition-colors"
                            onclick="toggleMobileMenu()">Exposiciones</a></li>
                    <li><a href="{{ route('about') }}"
                            class="text-4xl font-thin tracking-tighter hover:text-gallery-accent transition-colors"
                            onclick="toggleMobileMenu()">Acerca de Mi</a></li>
                </ul>
            </nav>
            <div class="w-12 h-[1px] bg-gallery-accent opacity-30"></div>
        </div>
    </div>

    <main>
        {{ $slot }}
    </main>

        <div id="quoteModal"
        class="fixed inset-0 z-[100] hidden items-center justify-center p-4 md:p-10 bg-black/90 backdrop-blur-md transition-all duration-500">
        <button onclick="closeModal()"
            class="absolute top-6 right-6 md:top-10 md:right-10 text-white hover:text-gallery-accent transition-colors z-[110]">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <div class="bg-white w-full max-w-5xl grid grid-cols-1 md:grid-cols-2 overflow-y-auto md:overflow-hidden shadow-2xl transform scale-95 opacity-0 transition-all duration-500 max-h-[90vh] md:max-h-none"
            id="modalContent">

            <div class="h-64 sm:h-80 md:h-[70vh] bg-gallery-bg">
                <img id="modalImg" src="" class="w-full h-full object-contain p-6 md:p-12" alt="Obra">
            </div>

            <div class="p-8 md:p-16 flex flex-col justify-center bg-white">
                <h2 id="modalTitle"
                    class="text-3xl md:text-4xl font-extralight uppercase tracking-tighter text-gallery-text leading-tight">
                </h2>
                <p id="modalDesc" class="mt-3 text-xs md:text-sm text-gray-400 italic font-light"></p>

                <div class="w-full h-[1px] bg-gray-100 my-6 md:my-8"></div>

                <p class="text-[10px] tracking-widest uppercase font-bold text-gallery-accent mb-4 md:mb-6">Solicitud de
                    información</p>
                <p class="text-xs md:text-sm text-gray-600 mb-6 md:mb-8 leading-relaxed">
                    Si estás interesado en adquirir esta pieza exclusiva, ingresa tu correo y un curador te contactará.
                </p>

                <div class="space-y-4">
                    <input type="email" placeholder="tu@email.com"
                        class="w-full bg-gray-50 border border-gray-200 px-5 py-3 md:px-6 md:py-4 text-sm focus:outline-none focus:border-gallery-accent transition-colors font-light rounded-none appearance-none">
                    <button
                        class="w-full bg-gallery-text text-white py-4 text-[9px] md:text-[10px] tracking-[0.3em] md:tracking-[0.4em] uppercase font-bold hover:bg-gallery-accent transition-all duration-500">
                        Enviar Solicitud
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>
