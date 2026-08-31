{{-- Video emergente de la página de inicio. Se administra en: Panel → Videos Destacados --}}
@if(!empty($videoDestacado) && $videoDestacado->es_valido)
    <div id="video-destacado-modal"
         class="hidden fixed inset-0 z-[9999] items-center justify-center p-3 sm:p-6"
         data-video-id="{{ $videoDestacado->id }}"
         data-video-version="{{ optional($videoDestacado->updated_at)->timestamp }}"
         data-una-vez="{{ $videoDestacado->mostrar_una_vez ? '1' : '0' }}"
         data-retardo="{{ $videoDestacado->retardo }}"
         role="dialog"
         aria-modal="true"
         aria-labelledby="video-destacado-titulo">

        <!-- Fondo oscuro -->
        <div id="video-destacado-fondo"
             class="absolute inset-0 bg-black/75 opacity-0 transition-opacity duration-300"></div>

        <!-- Tarjeta -->
        <div id="video-destacado-tarjeta"
             class="relative w-full max-w-3xl bg-white rounded-2xl shadow-2xl overflow-hidden opacity-0 scale-95 transition-all duration-300">

            <!-- Botón cerrar -->
            <button type="button"
                    id="video-destacado-cerrar"
                    aria-label="Cerrar video"
                    class="absolute top-3 right-3 z-10 flex items-center justify-center w-9 h-9 rounded-full bg-black/50 text-white hover:bg-black/70 focus:outline-none focus:ring-2 focus:ring-white/70 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            <!-- Video -->
            <div class="w-full aspect-video bg-black">
                @if($videoDestacado->tipo === 'archivo')
                    <video id="video-destacado-marco"
                           data-src="{{ $videoDestacado->embed_url }}"
                           class="w-full h-full"
                           controls
                           playsinline
                           @if($videoDestacado->autoplay) muted @endif></video>
                @else
                    <iframe id="video-destacado-marco"
                            data-src="{{ $videoDestacado->embed_url }}"
                            class="w-full h-full"
                            title="{{ $videoDestacado->titulo }}"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                @endif
            </div>

            <!-- Pie -->
            <div class="px-5 py-4 border-t-4 border-[#db0455]">
                <h2 id="video-destacado-titulo" class="text-base sm:text-lg font-bold text-gray-800">
                    {{ $videoDestacado->titulo }}
                </h2>
                @if($videoDestacado->descripcion)
                    <p class="text-sm text-gray-600 mt-1">{{ $videoDestacado->descripcion }}</p>
                @endif
                <div class="flex justify-end mt-3">
                    <button type="button"
                            id="video-destacado-cerrar-pie"
                            class="px-4 py-2 rounded-lg text-sm font-medium text-white bg-gradient-to-r from-[#db0455] to-[#a00340] hover:shadow-lg transition-all duration-200">
                        Continuar al portal
                    </button>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        (function () {
            const modal = document.getElementById('video-destacado-modal');
            if (!modal) return;

            const fondo   = document.getElementById('video-destacado-fondo');
            const tarjeta = document.getElementById('video-destacado-tarjeta');
            const marco   = document.getElementById('video-destacado-marco');
            const esVideo = marco.tagName === 'VIDEO';

            const unaVez  = modal.dataset.unaVez === '1';
            const retardo = parseInt(modal.dataset.retardo, 10) || 0;
            // La versión cambia al editar el video en el admin, así vuelve a mostrarse
            // aunque el visitante ya lo hubiera cerrado antes.
            const clave   = 'video_destacado_' + modal.dataset.videoId + '_' + modal.dataset.videoVersion;

            // Si ya se mostró en esta visita, no se vuelve a abrir.
            if (unaVez) {
                try {
                    if (sessionStorage.getItem(clave) === '1') return;
                } catch (e) {
                    // sessionStorage bloqueado (modo privado): se muestra igual.
                }
            }

            let abierto = false;

            function abrir() {
                if (abierto) return;
                abierto = true;

                if (!marco.src) {
                    marco.src = marco.dataset.src;
                }

                modal.classList.remove('hidden');
                modal.classList.add('flex');
                document.body.style.overflow = 'hidden';

                requestAnimationFrame(function () {
                    fondo.classList.remove('opacity-0');
                    tarjeta.classList.remove('opacity-0', 'scale-95');
                });

                if (esVideo && marco.muted) {
                    const promesa = marco.play();
                    if (promesa && promesa.catch) {
                        promesa.catch(function () { /* el navegador bloqueó el arranque automático */ });
                    }
                }

                if (unaVez) {
                    try { sessionStorage.setItem(clave, '1'); } catch (e) {}
                }
            }

            function cerrar() {
                if (!abierto) return;
                abierto = false;

                fondo.classList.add('opacity-0');
                tarjeta.classList.add('opacity-0', 'scale-95');
                document.body.style.overflow = '';

                setTimeout(function () {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');

                    // Cortar la reproducción al cerrar.
                    if (esVideo) {
                        marco.pause();
                        marco.currentTime = 0;
                    } else {
                        marco.src = '';
                    }
                }, 300);
            }

            document.getElementById('video-destacado-cerrar').addEventListener('click', cerrar);
            document.getElementById('video-destacado-cerrar-pie').addEventListener('click', cerrar);
            fondo.addEventListener('click', cerrar);

            document.addEventListener('keydown', function (evento) {
                if (evento.key === 'Escape') cerrar();
            });

            setTimeout(abrir, retardo);
        })();
    </script>
    @endpush
@endif
