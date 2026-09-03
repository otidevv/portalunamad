{{-- Barra de accesibilidad (WCAG 2.1 AA · Ley N° 29973). Ver resources/js/accesibilidad.js --}}
<div id="barra-accesibilidad" class="a11y-barra" role="region" aria-label="Herramientas de accesibilidad">
    <button type="button" class="a11y-barra__boton" data-a11y="abrir"
        aria-expanded="false" aria-controls="panel-accesibilidad"
        aria-label="Abrir herramientas de accesibilidad (Alt + 0)" title="Herramientas de accesibilidad (Alt + 0)">
        <svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 2a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm9 7h-6v13h-2v-6h-2v6H9V9H3V7h18v2Z"/>
        </svg>
    </button>

    <div id="panel-accesibilidad" class="a11y-panel" data-a11y="panel" hidden
        role="group" aria-labelledby="titulo-panel-accesibilidad">
        <div class="a11y-panel__cabecera">
            <h2 id="titulo-panel-accesibilidad" class="a11y-panel__titulo">Accesibilidad</h2>
            <button type="button" class="a11y-panel__cerrar" data-a11y="cerrar" aria-label="Cerrar herramientas de accesibilidad">
                <svg aria-hidden="true" focusable="false" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
                    <path d="M6 6l12 12M18 6L6 18"/>
                </svg>
            </button>
        </div>

        <ul class="a11y-panel__lista">
            <li class="a11y-panel__grupo" role="group" aria-label="Tamaño del texto">
                <span class="a11y-panel__etiqueta" aria-hidden="true">Tamaño del texto</span>
                <button type="button" class="a11y-opcion a11y-opcion--compacta" data-a11y="texto-menos" aria-label="Disminuir tamaño del texto">
                    <span aria-hidden="true">A−</span>
                </button>
                <span class="a11y-panel__nivel" data-a11y="nivel-texto" aria-live="off">100%</span>
                <button type="button" class="a11y-opcion a11y-opcion--compacta" data-a11y="texto-mas" aria-label="Aumentar tamaño del texto">
                    <span aria-hidden="true">A+</span>
                </button>
            </li>

            <li>
                <button type="button" class="a11y-opcion" data-a11y-toggle="contraste" aria-pressed="false">
                    <svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20Zm0 18V4a8 8 0 0 1 0 16Z"/></svg>
                    <span class="a11y-opcion__texto">Alto contraste</span>
                    <span class="a11y-opcion__estado a11y-visualmente-oculto"></span>
                </button>
            </li>

            <li>
                <button type="button" class="a11y-opcion" data-a11y-toggle="grises" aria-pressed="false">
                    <svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="currentColor"><path d="M4 4h16v16H4V4Zm2 2v12h4V6H6Zm6 0v12h2V6h-2Zm4 0v12h2V6h-2Z"/></svg>
                    <span class="a11y-opcion__texto">Escala de grises</span>
                    <span class="a11y-opcion__estado a11y-visualmente-oculto"></span>
                </button>
            </li>

            <li>
                <button type="button" class="a11y-opcion" data-a11y-toggle="enlaces" aria-pressed="false">
                    <svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M10 13a5 5 0 0 0 7 0l3-3a5 5 0 0 0-7-7l-1 1"/><path d="M14 11a5 5 0 0 0-7 0l-3 3a5 5 0 0 0 7 7l1-1"/></svg>
                    <span class="a11y-opcion__texto">Resaltar enlaces</span>
                    <span class="a11y-opcion__estado a11y-visualmente-oculto"></span>
                </button>
            </li>

            <li>
                <button type="button" class="a11y-opcion" data-a11y-toggle="dislexia" aria-pressed="false">
                    <svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="currentColor"><path d="M5 4h6a4 4 0 0 1 3 6.6A4.5 4.5 0 0 1 11.5 19H5V4Zm3 2.5v4h3a2 2 0 0 0 0-4H8Zm0 6.5v3.5h3.5a1.75 1.75 0 0 0 0-3.5H8Z"/></svg>
                    <span class="a11y-opcion__texto">Fuente para dislexia</span>
                    <span class="a11y-opcion__estado a11y-visualmente-oculto"></span>
                </button>
            </li>

            <li>
                <button type="button" class="a11y-opcion" data-a11y-toggle="sinAnimacion" aria-pressed="false">
                    <svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="currentColor"><path d="M6 5h4v14H6V5Zm8 0h4v14h-4V5Z"/></svg>
                    <span class="a11y-opcion__texto">Detener animaciones</span>
                    <span class="a11y-opcion__estado a11y-visualmente-oculto"></span>
                </button>
            </li>

            <li class="a11y-panel__grupo" role="group" aria-label="Lectura en voz alta">
                <button type="button" class="a11y-opcion" data-a11y="leer" aria-pressed="false">
                    <svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="currentColor"><path d="M3 9v6h4l5 4V5L7 9H3Zm13.5 3a4.5 4.5 0 0 0-2.5-4v8a4.5 4.5 0 0 0 2.5-4ZM14 3.2v2.1a7 7 0 0 1 0 13.4v2.1a9 9 0 0 0 0-17.6Z"/></svg>
                    <span class="a11y-opcion__texto">Leer en voz alta</span>
                </button>
                <button type="button" class="a11y-opcion a11y-opcion--compacta" data-a11y="pausar" aria-pressed="false" disabled>
                    <span class="a11y-opcion__texto">Pausar</span>
                </button>
                <button type="button" class="a11y-opcion a11y-opcion--compacta" data-a11y="detener" disabled aria-label="Detener lectura">
                    <svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="currentColor"><path d="M6 6h12v12H6z"/></svg>
                </button>
            </li>

            <li>
                <button type="button" class="a11y-opcion" data-a11y="restablecer">
                    <svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M3 12a9 9 0 1 0 3-6.7"/><path d="M3 4v5h5"/></svg>
                    <span class="a11y-opcion__texto">Restablecer configuración</span>
                </button>
            </li>
        </ul>

        <p class="a11y-panel__estado" data-a11y="estado" role="status" aria-live="polite"></p>
        <p class="a11y-panel__pie">Herramientas conforme a la Ley N° 29973 y WCAG 2.1 nivel AA. Atajo: Alt + 0.</p>
    </div>
</div>
