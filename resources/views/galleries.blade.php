<x-app-layout>
    <x-slot:title>Exposiciones | Leonardo da Vinci</x-slot>

    <section
        class="h-[45vh] md:h-[55vh] flex flex-col items-center justify-center text-center bg-gallery-bg border-b border-black/5 px-6">
        <div data-aos="fade-up" class="pt-16">
            <span
                class="text-gallery-accent text-[9px] md:text-[11px] tracking-[1em] uppercase font-bold mb-6 block opacity-80">
                Sedes Globales
            </span>
            <h1 class="text-5xl md:text-8xl font-thin tracking-tighter text-gallery-text leading-none">
                Museos<span class="font-normal text-gallery-accent">.</span>Exposiciones
            </h1>
        </div>
    </section>

    <section class="bg-white">
        <div class="flex flex-col w-full">
            @php
                $museos = [
                    [
                        'nombre' => 'Museo del Louvre',
                        'ubicacion' => 'París, Francia',
                        'img' => 'louvre.webp',
                        'obras' => 'Hogar de la Mona Lisa y La Virgen de las Rocas.',
                    ],
                    [
                        'nombre' => 'Galería Uffizi',
                        'ubicacion' => 'Florencia, Italia',
                        'img' => 'uffizi.webp',
                        'obras' => 'Alberga la Anunciación y la Adoración de los Magos.',
                    ],
                    [
                        'nombre' => 'National Gallery',
                        'ubicacion' => 'Londres, Reino Unido',
                        'img' => 'gallery.webp',
                        'obras' => 'Exhibe la versión londinense de la Virgen de las Rocas.',
                    ],
                ];
            @endphp

            @foreach ($museos as $museo)
                <div class="relative h-[45vh] md:h-[50vh] overflow-hidden group border-b border-black/5" 
                    data-aos="fade-up">

                    <img src="{{ asset('images/' . $museo['img']) }}" 
                        class="absolute inset-0 w-full h-full object-cover transition-all duration-[2s] ease-in-out group-hover:blur-sm group-hover:scale-110 pointer-events-none">

                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/50 transition-colors duration-700"></div>

                    <div class="absolute inset-0 flex items-center justify-start px-8 md:px-24">
                        <div class="max-w-2xl text-white transform translate-x-0 group-hover:translate-x-4 transition-transform duration-700">
                            
                            <span class="text-gallery-accent text-[10px] md:text-[11px] tracking-[0.4em] uppercase font-bold mb-3 block">
                                {{ $museo['ubicacion'] }}
                            </span>
                            
                            <h2 class="text-3xl md:text-6xl font-extralight tracking-widest uppercase mb-4 leading-tight">
                                {{ $museo['nombre'] }}
                            </h2>
                            
                            <p class="text-xs md:text-base font-light italic opacity-90 max-w-md mb-8 leading-relaxed">
                                {{ $museo['obras'] }}
                            </p>

                            <button onclick="openAvailabilityModal()" class="btn-quote-capsule !border-white !text-white hover:!bg-white hover:!text-gallery-text !font-normal">
                                Planear Visita
                            </button>
                        </div>
                    </div>

                    <span class="absolute bottom-10 right-16 text-white/10 text-8xl font-thin hidden md:block">
                        0{{ $loop->iteration }}
                    </span>
                </div>
            @endforeach
        </div>
    </section>

    <div id="availabilityModal" class="fixed inset-0 z-[10000] hidden flex items-center justify-center p-6 bg-black/60 backdrop-blur-sm transition-all duration-500">
        <div class="bg-white p-10 md:p-16 max-w-lg w-full text-center shadow-2xl transform transition-all">
            <span class="text-gallery-accent text-[10px] tracking-[0.4em] uppercase font-bold mb-4 block">Aviso Importante</span>
            
            <h3 class="text-2xl md:text-3xl font-extralight text-gallery-text uppercase tracking-widest mb-6 leading-tight">
                Sin Fechas Disponibles
            </h3>
            
            <div class="w-12 h-[1px] bg-gallery-accent mx-auto mb-8"></div>
            
            <p class="text-sm text-gray-500 font-light italic leading-relaxed mb-10">
                "Debido a la alta demanda y protocolos de restauración, actualmente no hay fechas disponibles para reservas directas. Por favor, consulte nuevamente en los próximos días."
            </p>

            <button onclick="closeAvailabilityModal()" class="btn-quote-capsule">
                Entendido
            </button>
        </div>
    </div>

    <script>
        function openAvailabilityModal() {
            const modal = document.getElementById('availabilityModal');
            modal.classList.remove('hidden');
            // Desactivar scroll del body
            document.body.style.overflow = 'hidden';
        }

        function closeAvailabilityModal() {
            const modal = document.getElementById('availabilityModal');
            modal.classList.add('hidden');
            // Reactivar scroll del body
            document.body.style.overflow = 'auto';
        }

        // Cerrar modal si se hace clic fuera del cuadro blanco
        window.onclick = function(event) {
            const modal = document.getElementById('availabilityModal');
            if (event.target == modal) {
                closeAvailabilityModal();
            }
        }
    </script>
</x-app-layout>