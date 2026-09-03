/**
 * Barra de accesibilidad UNAMAD
 * -------------------------------------------------------------
 * Funciones: tamaño de texto, alto contraste, escala de grises,
 * resaltar enlaces, fuente para dislexia, lectura en voz alta
 * (Web Speech API) y restablecer. Persistencia en localStorage.
 *
 * Las preferencias se aplican como clases sobre <html> para que
 * afecten a todo el sitio. Un pequeño script inline en el layout
 * las reaplica antes del primer render para evitar parpadeos.
 */
(function () {
    'use strict';

    var CLAVE = 'unamad_a11y';
    var MAX_TEXTO = 5;
    var MIN_TEXTO = -2;

    var porDefecto = {
        texto: 0,
        contraste: false,
        grises: false,
        enlaces: false,
        dislexia: false,
        sinAnimacion: false
    };

    var estado = cargar();
    var html = document.documentElement;

    // ------------------------------------------------------------
    // Persistencia
    // ------------------------------------------------------------
    function cargar() {
        try {
            var guardado = window.localStorage.getItem(CLAVE);
            if (!guardado) return Object.assign({}, porDefecto);
            var datos = JSON.parse(guardado);
            return Object.assign({}, porDefecto, datos);
        } catch (e) {
            return Object.assign({}, porDefecto);
        }
    }

    function guardar() {
        try {
            window.localStorage.setItem(CLAVE, JSON.stringify(estado));
        } catch (e) {
            /* almacenamiento no disponible: se mantiene solo en sesión */
        }
    }

    // ------------------------------------------------------------
    // Aplicación de clases sobre <html>
    // ------------------------------------------------------------
    function aplicar() {
        var clases = html.className.split(/\s+/).filter(function (c) {
            return c && c.indexOf('a11y-') !== 0;
        });

        if (estado.texto !== 0) {
            clases.push('a11y-texto-' + estado.texto);
        }
        if (estado.contraste) clases.push('a11y-contraste');
        if (estado.grises) clases.push('a11y-grises');
        if (estado.enlaces) clases.push('a11y-enlaces');
        if (estado.dislexia) clases.push('a11y-dislexia');
        if (estado.sinAnimacion) clases.push('a11y-sin-animacion');

        html.className = clases.join(' ');
        actualizarControles();
        guardar();
    }

    // ------------------------------------------------------------
    // Referencias al DOM de la barra
    // ------------------------------------------------------------
    var barra = document.getElementById('barra-accesibilidad');
    if (!barra) return;

    var botonAbrir = barra.querySelector('[data-a11y="abrir"]');
    var panel = barra.querySelector('[data-a11y="panel"]');
    var botonCerrar = barra.querySelector('[data-a11y="cerrar"]');
    var nivelTexto = barra.querySelector('[data-a11y="nivel-texto"]');
    var estadoLive = barra.querySelector('[data-a11y="estado"]');
    var botonLeer = barra.querySelector('[data-a11y="leer"]');
    var botonPausar = barra.querySelector('[data-a11y="pausar"]');
    var botonDetener = barra.querySelector('[data-a11y="detener"]');

    function anunciar(mensaje) {
        if (!estadoLive) return;
        estadoLive.textContent = '';
        window.setTimeout(function () {
            estadoLive.textContent = mensaje;
        }, 50);
    }

    function actualizarControles() {
        barra.querySelectorAll('[data-a11y-toggle]').forEach(function (btn) {
            var clave = btn.getAttribute('data-a11y-toggle');
            btn.setAttribute('aria-pressed', estado[clave] ? 'true' : 'false');
        });
        if (nivelTexto) {
            var porcentaje = { '-2': 80, '-1': 90, '0': 100, '1': 110, '2': 120, '3': 130, '4': 145, '5': 160 }[String(estado.texto)];
            nivelTexto.textContent = porcentaje + '%';
        }
        var btnMas = barra.querySelector('[data-a11y="texto-mas"]');
        var btnMenos = barra.querySelector('[data-a11y="texto-menos"]');
        if (btnMas) btnMas.disabled = estado.texto >= MAX_TEXTO;
        if (btnMenos) btnMenos.disabled = estado.texto <= MIN_TEXTO;
    }

    // ------------------------------------------------------------
    // Abrir / cerrar panel
    // ------------------------------------------------------------
    function abrirPanel() {
        panel.hidden = false;
        botonAbrir.setAttribute('aria-expanded', 'true');
        var primero = panel.querySelector('button, [href]');
        if (primero) primero.focus();
    }

    function cerrarPanel(devolverFoco) {
        panel.hidden = true;
        botonAbrir.setAttribute('aria-expanded', 'false');
        if (devolverFoco !== false) botonAbrir.focus();
    }

    botonAbrir.addEventListener('click', function () {
        if (panel.hidden) abrirPanel(); else cerrarPanel();
    });

    if (botonCerrar) {
        botonCerrar.addEventListener('click', function () { cerrarPanel(); });
    }

    barra.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && !panel.hidden) {
            e.preventDefault();
            cerrarPanel();
        }
    });

    document.addEventListener('click', function (e) {
        if (!panel.hidden && !barra.contains(e.target)) cerrarPanel(false);
    });

    // Atajo de teclado: Alt + 0 abre la barra (patrón habitual en portales públicos)
    document.addEventListener('keydown', function (e) {
        if (e.altKey && (e.key === '0' || e.code === 'Digit0')) {
            e.preventDefault();
            abrirPanel();
        }
    });

    // ------------------------------------------------------------
    // Acciones
    // ------------------------------------------------------------
    barra.addEventListener('click', function (e) {
        var btn = e.target.closest('[data-a11y], [data-a11y-toggle]');
        if (!btn) return;

        var toggle = btn.getAttribute('data-a11y-toggle');
        if (toggle) {
            estado[toggle] = !estado[toggle];
            aplicar();
            anunciar(btn.querySelector('.a11y-opcion__texto').textContent.trim() + ': ' + (estado[toggle] ? 'activado' : 'desactivado'));
            return;
        }

        var accion = btn.getAttribute('data-a11y');
        switch (accion) {
            case 'texto-mas':
                if (estado.texto < MAX_TEXTO) estado.texto += 1;
                aplicar();
                anunciar('Tamaño de texto: ' + nivelTexto.textContent);
                break;
            case 'texto-menos':
                if (estado.texto > MIN_TEXTO) estado.texto -= 1;
                aplicar();
                anunciar('Tamaño de texto: ' + nivelTexto.textContent);
                break;
            case 'restablecer':
                detenerLectura();
                estado = Object.assign({}, porDefecto);
                aplicar();
                anunciar('Configuración de accesibilidad restablecida');
                break;
            case 'leer':
                iniciarLectura();
                break;
            case 'pausar':
                alternarPausa();
                break;
            case 'detener':
                detenerLectura();
                anunciar('Lectura detenida');
                break;
        }
    });

    // ------------------------------------------------------------
    // Lectura en voz alta (Web Speech API)
    // ------------------------------------------------------------
    var sintesis = window.speechSynthesis;
    var soportaVoz = !!(sintesis && window.SpeechSynthesisUtterance);
    var colaBloques = [];
    var indiceBloque = 0;
    var leyendo = false;
    var bloqueActual = null;

    if (!soportaVoz) {
        [botonLeer, botonPausar, botonDetener].forEach(function (b) {
            if (b) {
                b.disabled = true;
                b.setAttribute('title', 'Su navegador no admite la lectura en voz alta');
            }
        });
    }

    function elegirVoz() {
        var voces = sintesis.getVoices() || [];
        var preferidas = ['es-PE', 'es-MX', 'es-US', 'es-ES', 'es'];
        for (var i = 0; i < preferidas.length; i++) {
            for (var j = 0; j < voces.length; j++) {
                if (voces[j].lang && voces[j].lang.replace('_', '-').toLowerCase().indexOf(preferidas[i].toLowerCase()) === 0) {
                    return voces[j];
                }
            }
        }
        return null;
    }

    function textoSeleccionado() {
        var sel = window.getSelection ? window.getSelection() : null;
        return sel && sel.toString().trim().length > 20 ? sel.toString().trim() : '';
    }

    function recolectarBloques() {
        var raiz = document.getElementById('contenido-principal') || document.querySelector('main') || document.body;
        var selector = 'h1, h2, h3, h4, h5, h6, p, li, td, th, dt, dd, blockquote, figcaption, label, summary';
        var nodos = raiz.querySelectorAll(selector);
        var bloques = [];
        var vistos = [];
        nodos.forEach(function (n) {
            if (n.closest('#barra-accesibilidad, [aria-hidden="true"], script, style, noscript, template')) return;
            // Omitir bloques ocultos
            if (n.offsetParent === null && window.getComputedStyle(n).position !== 'fixed') return;
            // Evitar anidados (li que contiene p, etc.)
            for (var k = 0; k < vistos.length; k++) {
                if (vistos[k].contains(n)) return;
            }
            var t = (n.innerText || n.textContent || '').replace(/\s+/g, ' ').trim();
            if (t.length < 2) return;
            vistos.push(n);
            bloques.push({ el: n, texto: t });
        });
        return bloques;
    }

    function iniciarLectura() {
        if (!soportaVoz) return;
        detenerLectura();

        var seleccion = textoSeleccionado();
        if (seleccion) {
            colaBloques = [{ el: null, texto: seleccion }];
        } else {
            var titulo = document.title ? [{ el: null, texto: document.title }] : [];
            colaBloques = titulo.concat(recolectarBloques());
        }

        if (!colaBloques.length) {
            anunciar('No se encontró contenido para leer');
            return;
        }

        indiceBloque = 0;
        leyendo = true;
        actualizarBotonesLectura();
        anunciar(seleccion ? 'Leyendo el texto seleccionado' : 'Leyendo el contenido de la página');
        leerSiguiente();
    }

    function leerSiguiente() {
        if (!leyendo || indiceBloque >= colaBloques.length) {
            finalizarLectura();
            return;
        }
        var bloque = colaBloques[indiceBloque];
        marcarBloque(bloque.el);

        var frase = new window.SpeechSynthesisUtterance(bloque.texto);
        frase.lang = 'es-PE';
        var voz = elegirVoz();
        if (voz) frase.voice = voz;
        frase.rate = 0.95;
        frase.pitch = 1;
        frase.onend = function () {
            indiceBloque += 1;
            if (leyendo) leerSiguiente();
        };
        frase.onerror = function (ev) {
            if (ev.error === 'interrupted' || ev.error === 'canceled') return;
            indiceBloque += 1;
            if (leyendo) leerSiguiente();
        };
        sintesis.speak(frase);
    }

    function marcarBloque(el) {
        if (bloqueActual) bloqueActual.classList.remove('a11y-leyendo');
        bloqueActual = el;
        if (el) {
            el.classList.add('a11y-leyendo');
            if (el.scrollIntoView) {
                try { el.scrollIntoView({ block: 'center', behavior: 'smooth' }); } catch (e) { el.scrollIntoView(); }
            }
        }
    }

    function alternarPausa() {
        if (!soportaVoz || !leyendo) return;
        if (sintesis.paused) {
            sintesis.resume();
            anunciar('Lectura reanudada');
            botonPausar.querySelector('.a11y-opcion__texto').textContent = 'Pausar';
            botonPausar.setAttribute('aria-pressed', 'false');
        } else {
            sintesis.pause();
            anunciar('Lectura en pausa');
            botonPausar.querySelector('.a11y-opcion__texto').textContent = 'Reanudar';
            botonPausar.setAttribute('aria-pressed', 'true');
        }
    }

    function detenerLectura() {
        if (!soportaVoz) return;
        leyendo = false;
        sintesis.cancel();
        marcarBloque(null);
        actualizarBotonesLectura();
    }

    function finalizarLectura() {
        leyendo = false;
        marcarBloque(null);
        actualizarBotonesLectura();
        anunciar('Lectura finalizada');
    }

    function actualizarBotonesLectura() {
        if (!soportaVoz) return;
        botonPausar.disabled = !leyendo;
        botonDetener.disabled = !leyendo;
        botonLeer.setAttribute('aria-pressed', leyendo ? 'true' : 'false');
        botonPausar.querySelector('.a11y-opcion__texto').textContent = 'Pausar';
        botonPausar.setAttribute('aria-pressed', 'false');
    }

    // Detener la lectura al abandonar la página
    window.addEventListener('beforeunload', function () {
        if (soportaVoz) sintesis.cancel();
    });

    // Cargar voces (en Chrome llegan de forma asíncrona)
    if (soportaVoz && typeof sintesis.onvoiceschanged !== 'undefined') {
        sintesis.onvoiceschanged = function () { sintesis.getVoices(); };
    }

    // ------------------------------------------------------------
    // Inicialización
    // ------------------------------------------------------------
    aplicar();
    actualizarBotonesLectura();
})();
