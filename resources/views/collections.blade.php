<x-app-layout>
    <x-slot:title>Colecciones | Leonardo da Vinci</x-slot>

    <section class="h-[40vh] flex flex-col items-center justify-center text-center bg-gallery-bg border-b border-black/5">
        <div data-aos="fade-up">
            <span class="text-gallery-accent text-[10px] tracking-[0.8em] uppercase font-bold mb-4 block">Catálogo Maestro</span>
            <h1 class="text-5xl md:text-7xl font-thin tracking-tighter text-gallery-text">
                Obras<span class="font-normal text-gallery-accent">.</span>Maestras
            </h1>
        </div>
    </section>

    <section class="bg-white">
        <div class="grid grid-cols-1 md:grid-cols-2 w-full">
            @php
                $obras = [
                    ['img' => 'la_gioconda.webp', 'title' => 'La Gioconda', 'desc' => 'La cumbre del sfumato y el misterio renacentista.'],
                    ['img' => 'ultima_cena.webp', 'title' => 'La Última Cena', 'desc' => 'El estudio definitivo de la emoción humana.'],
                    ['img' => 'dama_armino.webp', 'title' => 'Dama con Armiño', 'desc' => 'Innovación pura en el retrato y la anatomía.'],
                    ['img' => 'salvator_mundi.webp', 'title' => 'Salvator Mundi', 'desc' => 'La representación de Cristo como salvador del mundo.'],
                    ['img' => 'virgen_rocas.webp', 'title' => 'Virgen de las Rocas', 'desc' => 'Composición perfecta en un entorno onírico.'],
                ];
            @endphp

            @foreach ($obras as $index => $obra)
                <div class="relative h-[80vh] md:h-screen overflow-hidden group" data-aos="fade">
                    <img src="{{ asset('images/' . $obra['img']) }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-[2s] group-hover:scale-110">
                    
                    <div class="absolute inset-0 flex items-center justify-center p-8 opacity-0 group-hover:opacity-100 transition-all duration-700 bg-black/20 backdrop-blur-[2px]">
                        <div class="bg-white p-10 md:p-14 text-center max-w-sm shadow-2xl transform scale-90 group-hover:scale-100 transition-transform duration-700">
                            <h2 class="text-3xl font-extralight uppercase tracking-widest text-gallery-text">{{ $obra['title'] }}</h2>
                            <div class="w-12 h-[1px] bg-gallery-accent mx-auto my-6"></div>
                            <p class="text-sm text-gray-500 leading-relaxed font-light italic mb-8">"{{ $obra['desc'] }}"</p>
                            <button class="btn-quote-capsule" onclick="openModal('{{ asset('images/' . $obra['img']) }}', '{{ $obra['title'] }}', '{{ $obra['desc'] }}')">
                                Cotizar Obra
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <div id="quoteModal" class="fixed inset-0 z-[100] hidden items-center justify-center p-4 md:p-10 bg-black/90 backdrop-blur-md transition-all duration-500">
        <button onclick="closeModal()" class="absolute top-10 right-10 text-white hover:text-gallery-accent transition-colors">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>

        <div class="bg-white w-full max-w-5xl grid grid-cols-1 md:grid-cols-2 overflow-hidden shadow-2xl transform scale-95 opacity-0 transition-all duration-500" id="modalContent">
            <div class="h-64 md:h-[70vh] bg-gallery-bg">
                <img id="modalImg" src="" class="w-full h-full object-contain p-8 md:p-12" alt="Obra">
            </div>

            <div class="p-10 md:p-16 flex flex-col justify-center bg-white">
                <h2 id="modalTitle" class="text-4xl font-extralight uppercase tracking-tighter text-gallery-text"></h2>
                <p id="modalDesc" class="mt-4 text-sm text-gray-400 italic font-light"></p>
                
                <div class="w-full h-[1px] bg-gray-100 my-8"></div>

                <p class="text-xs tracking-widest uppercase font-bold text-gallery-accent mb-6">Solicitud de información</p>
                <p class="text-sm text-gray-600 mb-8 leading-relaxed">
                    Si estás interesado en adquirir esta pieza exclusiva, por favor ingresa tu correo. Un curador se pondrá en contacto contigo a la brevedad.
                </p>

                <div class="space-y-4">
                    <input type="email" placeholder="tu@email.com" class="w-full bg-gray-50 border border-gray-200 px-6 py-4 text-sm focus:outline-none focus:border-gallery-accent transition-colors font-light">
                    <button class="w-full bg-gallery-text text-white py-4 text-[10px] tracking-[0.4em] uppercase font-bold hover:bg-gallery-accent transition-all duration-500">
                        Enviar Solicitud
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openModal(img, title, desc) {
            const modal = document.getElementById('quoteModal');
            const content = document.getElementById('modalContent');
            
            document.getElementById('modalImg').src = img;
            document.getElementById('modalTitle').innerText = title;
            document.getElementById('modalDesc').innerText = '"' + desc + '"';

            modal.classList.remove('hidden');
            modal.classList.add('flex');
            
            // Animación de entrada
            setTimeout(() => {
                content.classList.remove('scale-95', 'opacity-0');
                content.classList.add('scale-100', 'opacity-100');
            }, 10);
        }

        function closeModal() {
            const modal = document.getElementById('quoteModal');
            const content = document.getElementById('modalContent');

            content.classList.remove('scale-100', 'opacity-100');
            content.classList.add('scale-95', 'opacity-0');

            setTimeout(() => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }, 500);
        }
    </script>
</x-app-layout>