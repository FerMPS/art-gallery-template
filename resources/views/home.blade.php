<x-app-layout>
    <x-slot:title>Inicio | Leonardo da Vinci</x-slot>

    <section
        class="relative min-h-screen flex flex-col items-center justify-center text-center px-6 md:px-12 overflow-hidden bg-[#383a3d]">
        <div class="absolute inset-0 z-0 flex justify-center items-center pointer-events-none">
            <img src="{{ asset('images/da_vinci.webp') }}" alt="Leonardo da Vinci Portrait" class="hero-image-background">
        </div>

        <div data-aos="fade-up" class="relative z-10 w-full">
            <div class="h-32 md:h-52"></div>

            <h1 class="text-5xl sm:text-6xl md:text-9xl font-thin tracking-tighter mt-6 text-white leading-none">
                Leonardo<span class="font-normal text-gallery-accent">.</span>Da<span
                    class="font-normal text-gallery-accent">.</span>Vinci
            </h1>

            <p
                class="mt-8 md:mt-12 opacity-50 text-[10px] md:text-[14px] tracking-[0.3em] md:tracking-[0.4em] uppercase font-light text-white px-4">
                El Genio del Renacimiento
            </p>
        </div>
    </section>

    <section
        class="painting-section h-auto md:min-h-screen cursor-pointer group transition-all duration-500 hover:bg-black/5"
        onclick="openModal(
        '{{ asset('images/la_gioconda.webp') }}', 
        'La Gioconda', 
        'La cumbre del sfumato y el misterio renacentista.'
    )">
        <div class="grid grid-cols-1 md:grid-cols-2 w-full h-full items-stretch">
            <div class="image-wrapper h-[50vh] md:h-screen overflow-hidden" data-aos="fade-right">
                <img src="{{ asset('images/la_gioconda.webp') }}" alt="La Gioconda (Mona Lisa)"
                    class="painting-image w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105">
            </div>

            <div class="text-content p-10 md:p-24 flex flex-col justify-center" data-aos="fade-left">
                <h2
                    class="text-4xl md:text-7xl font-extralight uppercase tracking-tighter leading-[0.9] text-gallery-text">
                    La <br><span class="font-normal">Gioconda</span>
                </h2>
                <div class="w-16 md:w-20 h-[1px] bg-gallery-accent my-6 md:my-8"></div>
                <p class="text-base md:text-xl opacity-70 leading-relaxed font-light italic text-gallery-text">
                    "La pintura es poesía que se ve y no se siente, y la poesía es pintura que se siente y no se ve."
                </p>
                <p
                    class="text-gallery-accent text-[9px] md:text-xs tracking-[0.3em] md:tracking-[0.5em] uppercase font-bold pt-4">
                    c. 1503 - 1506 / MUSEO DEL LOUVRE
                </p>
                <span
                    class="text-[10px] uppercase tracking-widest text-gray-400 mt-8 opacity-0 group-hover:opacity-100 transition-opacity">Click
                    para cotizar —</span>
            </div>
        </div>
    </section>

    <section
        class="painting-section h-auto md:min-h-screen cursor-pointer group transition-all duration-500 hover:bg-black/5"
        onclick="openModal(
        '{{ asset('images/ultima_cena.webp') }}', 
        'La Última Cena', 
        'El estudio definitivo de la emoción humana.'
    )">
        <div class="flex flex-col-reverse md:grid md:grid-cols-2 w-full h-full items-stretch">
            <div class="text-content p-10 md:p-24 md:text-right md:items-end bg-white md:bg-gallery-bg flex flex-col justify-center"
                data-aos="fade-right">
                <h2
                    class="text-4xl md:text-7xl font-extralight uppercase tracking-tighter leading-[0.9] text-gallery-text">
                    La Última <br><span class="font-normal">Cena</span>
                </h2>
                <div class="w-16 md:w-20 h-[1px] bg-gallery-accent my-6 md:my-8 md:ml-auto"></div>
                <p class="text-base md:text-xl opacity-70 leading-relaxed font-light italic text-gallery-text">
                    "Atesora el amor. Es el único tesoro que no se puede perder."
                </p>
                <p
                    class="text-gallery-accent text-[9px] md:text-xs tracking-[0.3em] md:tracking-[0.5em] uppercase font-bold pt-4">
                    1495 - 1498 / SANTA MARIA DELLE GRAZIE
                </p>
                <span
                    class="text-[10px] uppercase tracking-widest text-gray-400 mt-8 opacity-0 group-hover:opacity-100 transition-opacity">—
                    Click para cotizar</span>
            </div>

            <div class="image-wrapper h-[50vh] md:h-screen overflow-hidden" data-aos="fade-left">
                <img src="{{ asset('images/ultima_cena.webp') }}" alt="La Última Cena"
                    class="painting-image w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105">
            </div>
        </div>
    </section>

</x-app-layout>
