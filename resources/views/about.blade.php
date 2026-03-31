<x-app-layout>
    <x-slot:title>El Artista | Leonardo da Vinci</x-slot>

    <section class="painting-section">
        <div class="grid grid-cols-1 md:grid-cols-2 w-full h-full items-stretch">
            
            <div class="image-wrapper" data-aos="fade-right">
                <img src="{{ asset('images/da_vinci2.webp') }}" alt="Leonardo Portrait" class="painting-image grayscale hover:grayscale-0 duration-[2000ms]">
            </div>

            <div class="text-content bg-gallery-bg" data-aos="fade-left">
                <div class="max-w-md space-y-10">
                    <header>
                        <span class="text-gallery-accent tracking-[0.6em] text-[10px] uppercase font-bold">Biografía</span>
                        <h1 class="text-6xl md:text-8xl font-thin tracking-tighter mt-4 text-gallery-text">
                            Leonardo<span class="font-normal text-gallery-accent">.</span>
                        </h1>
                    </header>

                    <div class="space-y-6 text-gallery-text opacity-80 font-light leading-relaxed text-lg">
                        <p>
                            Nacido en Vinci en 1452, personificó el ideal del hombre renacentista. Su curiosidad no conocía límites, fusionando el rigor de la ciencia con la sensibilidad del arte.
                        </p>
                        <p>
                            Para Leonardo, la pintura era "una cosa mental", un proceso de observación profunda donde el <i>sfumato</i> permitía que las formas se fundieran con la atmósfera, capturando lo intangible.
                        </p>
                    </div>

                    <div class="pt-8">
                        <div class="w-12 h-[1px] bg-gallery-accent mb-6"></div>
                        <p class="text-[10px] tracking-[0.3em] uppercase opacity-40">1452 — 1519</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
</x-app-layout>