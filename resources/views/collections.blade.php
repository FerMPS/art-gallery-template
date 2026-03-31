<x-app-layout>
    <x-slot:title>Colecciones | Leonardo da Vinci</x-slot>

    <section class="relative h-[45vh] flex flex-col items-center justify-center text-center px-12 bg-gallery-bg">
        <div data-aos="fade-up">
            <span class="text-gallery-accent text-[10px] tracking-[0.8em] uppercase font-bold mb-4 block">Catálogo
                Privado</span>
            <h1 class="text-6xl md:text-8xl font-thin tracking-tighter text-gallery-text">
                Obras<span class="font-normal text-gallery-accent">.</span>Maestras
            </h1>
            <div class="w-16 h-[1px] bg-gallery-accent mx-auto mt-6 opacity-30"></div>
        </div>
    </section>

    <section class="pb-32 bg-white">
        <div class="max-w-[1600px] mx-auto px-10 md:px-20">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-24 gap-y-32">

                @php
                    $obras = [
                        [
                            'img' => 'la_gioconda.webp',
                            'title' => 'La Gioconda',
                            'desc' => 'La cumbre del sfumato y el misterio renacentista.',
                        ],
                        [
                            'img' => 'ultima_cena.webp',
                            'title' => 'La Última Cena',
                            'desc' => 'El estudio definitivo de la emoción humana.',
                        ],
                        [
                            'img' => 'dama_armino.webp',
                            'title' => 'Dama con Armiño',
                            'desc' => 'Innovación pura en el retrato y la anatomía.',
                        ],
                        [
                            'img' => 'salvator_mundi.webp',
                            'title' => 'Salvator Mundi',
                            'desc' => 'La representación de Cristo como salvador del mundo.',
                        ],
                        [
                            'img' => 'virgen_rocas.webp',
                            'title' => 'Virgen de las Rocas',
                            'desc' => 'Composición perfecta en un entorno onírico.',
                        ],
                    ];
                @endphp

                @foreach ($obras as $index => $obra)
                    <div class="flex flex-col group w-full" data-aos="fade-up" data-aos-delay="{{ ($index % 3) * 150 }}">
                        <div
                            class="image-wrapper-gallery overflow-hidden bg-gallery-bg grayscale-[40%] group-hover:grayscale-0 transition-all duration-1000">
                            <img src="{{ asset('images/' . $obra['img']) }}" alt="{{ $obra['title'] }}"
                                class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105">
                        </div>

                        <div class="pt-10 space-y-4">
                            <h2
                                class="text-2xl md:text-3xl font-extralight uppercase tracking-[0.2em] text-gallery-text">
                                {{ explode(' ', $obra['title'])[0] }} <span
                                    class="font-normal">{{ str_replace(explode(' ', $obra['title'])[0], '', $obra['title']) }}</span>
                            </h2>
                            <div class="w-10 h-[1px] bg-gallery-accent/50 group-hover:w-20 transition-all duration-500">
                            </div>
                            <p class="text-sm opacity-50 leading-relaxed font-light italic max-w-sm">
                                "{{ $obra['desc'] }}"
                            </p>
                            <div class="pt-2">
                                <button class="btn-quote-capsule">
                                    Cotizar obra
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
</x-app-layout>
