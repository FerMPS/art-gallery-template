<x-app-layout>
    <x-slot:title>Colecciones | Leonardo da Vinci</x-slot>

    <section
        class="h-[35vh] md:h-[40vh] flex flex-col items-center justify-center text-center bg-gallery-bg border-b border-black/5 px-6">
        <div data-aos="fade-up">
            <span
                class="text-gallery-accent text-[10px] tracking-[0.6em] md:tracking-[0.8em] uppercase font-bold mb-4 block">Catálogo
                Maestro</span>
            <h1 class="text-4xl md:text-7xl font-thin tracking-tighter text-gallery-text">
                Obras<span class="font-normal text-gallery-accent">.</span>Maestras
            </h1>
        </div>
    </section>

    <section class="bg-white">
        <div class="grid grid-cols-1 md:grid-cols-2 w-full">
            {{-- REINSERCIÓN DE LA VARIABLE OBRAS --}}
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
                <div class="relative h-[70vh] md:h-screen overflow-hidden group js-card" onclick="handleCardClick(this)"
                    data-aos="fade">

                    <img src="{{ asset('images/' . $obra['img']) }}"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-[2s] group-hover:scale-110 pointer-events-none">

                    <div
                        class="overlay-info absolute inset-0 flex items-center justify-center p-6 md:p-8 opacity-0 group-hover:opacity-100 transition-all duration-700 bg-black/20 backdrop-blur-[2px]">
                        <div
                            class="bg-white p-8 md:p-14 text-center max-w-sm shadow-2xl transform scale-90 group-hover:scale-100 transition-transform duration-700">
                            <h2
                                class="text-2xl md:text-3xl font-extralight uppercase tracking-widest text-gallery-text">
                                {{ $obra['title'] }}</h2>
                            <div class="w-12 h-[1px] bg-gallery-accent mx-auto my-4 md:my-6"></div>
                            <p class="text-xs md:text-sm text-gray-500 leading-relaxed font-light italic mb-6 md:mb-8">
                                "{{ $obra['desc'] }}"</p>

                            <button class="btn-quote-capsule"
                                onclick="event.stopPropagation(); openModal('{{ asset('images/' . $obra['img']) }}', '{{ $obra['title'] }}', '{{ $obra['desc'] }}')">
                                Cotizar Obra
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</x-app-layout>
