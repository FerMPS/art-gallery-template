<x-app-layout>
    <x-slot:title>Inicio | Leonardo da Vinci</x-slot>

    <section
        class="relative min-h-screen flex flex-col items-center justify-center text-center px-12 overflow-hidden bg-[#383a3d]">
        <div class="absolute inset-0 z-0 flex justify-center items-center pointer-events-none">
            <img src="{{ asset('images/da_vinci.webp') }}" alt="Leonardo da Vinci Portrait" class="hero-image-background">
        </div>

        <div data-aos="fade-up" class="relative z-10">
            <div class="h-44 md:h-52"></div>
            <h1 class="text-7xl md:text-9xl font-thin tracking-tighter mt-6 text-white">Leonardo<span
                    class="font-normal text-gallery-accent">.</span>Da<span
                    class="font-normal text-gallery-accent">.</span>Vinci</h1>
            <p class="mt-12 opacity-50 text-[14px] tracking-[0.4em] uppercase font-light text-white">El Genio del
                Renacimiento</p>
        </div>
    </section>

    <section class="painting-section">
        <div class="grid grid-cols-1 md:grid-cols-2 w-full h-full items-stretch">
            <div class="image-wrapper" data-aos="fade-right">
                <img src="{{ asset('images/la_gioconda.webp') }}" alt="La Gioconda (Mona Lisa)" class="painting-image">
            </div>

            <div class="text-content" data-aos="fade-left">
                <h2
                    class="text-5xl md:text-7xl font-extralight uppercase tracking-tighter leading-[0.9] text-gallery-text">
                    La <br><span class="font-normal">Gioconda</span>
                </h2>
                <div class="w-20 h-[1px] bg-gallery-accent my-8"></div>
                <p class="text-lg md:text-xl opacity-70 leading-relaxed font-light italic text-gallery-text">
                    "La pintura es poesía que se ve y no se siente, y la poesía es pintura que se siente y no se ve."
                </p>
                <p class="text-gallery-accent text-xs tracking-[0.5em] uppercase font-bold pt-4">
                    c. 1503 - 1506 / MUSEO DEL LOUVRE
                </p>
            </div>
        </div>
    </section>

    <section class="painting-section">
        <div class="grid grid-cols-1 md:grid-cols-2 w-full h-full items-stretch">
            <div class="text-content md:text-right md:items-end order-2 md:order-1" data-aos="fade-right">
                <h2
                    class="text-5xl md:text-7xl font-extralight uppercase tracking-tighter leading-[0.9] text-gallery-text">
                    La Última <br><span class="font-normal">Cena</span>
                </h2>
                <div class="w-20 h-[1px] bg-gallery-accent my-8 ml-auto"></div>
                <p class="text-lg md:text-xl opacity-70 leading-relaxed font-light italic text-gallery-text">
                    "Atesora el amor. Es el único tesoro que no se puede perder."
                </p>
                <p class="text-gallery-accent text-xs tracking-[0.5em] uppercase font-bold pt-4">
                    1495 - 1498 / SANTA MARIA DELLE GRAZIE
                </p>
            </div>

            <div class="image-wrapper order-1 md:order-2" data-aos="fade-left">
                <img src="{{ asset('images/ultima_cena.webp') }}" alt="La Última Cena" class="painting-image">
            </div>
        </div>
    </section>

</x-app-layout>
