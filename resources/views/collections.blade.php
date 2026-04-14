<x-app-layout>
    <x-slot:title>Colecciones | Leonardo da Vinci</x-slot>

    <section
        class="h-[45vh] md:h-[55vh] flex flex-col items-center justify-center text-center bg-gallery-bg border-b border-black/5 px-6">
        <div data-aos="fade-up" class="pt-16">
            <span
                class="text-gallery-accent text-[9px] md:text-[11px] tracking-[0.6em] md:tracking-[1em] uppercase font-bold mb-6 block opacity-80">
                Catálogo Maestro
            </span>
            <h1 class="text-5xl md:text-8xl font-thin tracking-tighter text-gallery-text leading-none">
                Obras<span class="font-normal text-gallery-accent">.</span>Destacadas
            </h1>
        </div>
    </section>

    <section class="bg-white">
        <div class="grid grid-cols-1 md:grid-cols-3 w-full">
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
                <div class="relative h-[65vh] md:h-[75vh] overflow-hidden group js-card border-[0.5px] border-black/5"
                    onclick="handleCardClick(this)" data-aos="fade">

                    <img src="{{ asset('images/' . $obra['img']) }}"
                        class="absolute inset-0 w-full h-full object-cover transition-all duration-1000 ease-in-out group-hover:blur-md group-hover:scale-105 pointer-events-none">

                    <div
                        class="overlay-info absolute inset-0 flex items-center justify-center p-4 opacity-0 group-hover:opacity-100 transition-all duration-500 bg-black/20">

                        <div
                            class="bg-white py-16 px-8 text-center w-full max-w-[300px] shadow-2xl transform translate-y-8 group-hover:translate-y-0 transition-transform duration-700 ease-out">

                            <h2
                                class="text-2xl md:text-3xl font-extralight uppercase tracking-[0.25em] text-gallery-text leading-tight">
                                {{ $obra['title'] }}
                            </h2>

                            <div class="w-12 h-[1px] bg-gallery-accent mx-auto my-8"></div>

                            <p class="text-xs md:text-sm text-gray-500 leading-relaxed font-light italic mb-10 px-2">
                                "{{ $obra['desc'] }}"
                            </p>

                            <button class="btn-quote-capsule text-[14px]! px-8! py-4!"
                                onclick="event.stopPropagation(); openModal('{{ asset('images/' . $obra['img']) }}', '{{ $obra['title'] }}', '{{ $obra['desc'] }}')">
                                Ver Obra
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</x-app-layout>
