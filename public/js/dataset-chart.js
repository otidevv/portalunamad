/*
 * Gráfico de datasets (compartido entre el panel admin y el portal público).
 * Espera una variable global window.DATASET_CONFIG = { columnas: [...], endpoint: "..." }
 * y un <canvas id="grafico-dataset"> más los selects #sel-x, #sel-y, #sel-agg, #sel-tipo.
 */
(function () {
    var cfg = window.DATASET_CONFIG || {};
    var columnas = cfg.columnas || [];
    var endpoint = cfg.endpoint;

    var canvas = document.getElementById('grafico-dataset');
    var selX = document.getElementById('sel-x');
    var selY = document.getElementById('sel-y');
    var selAgg = document.getElementById('sel-agg');
    var selTipo = document.getElementById('sel-tipo');
    var aviso = document.getElementById('grafico-aviso');
    var tabla = document.getElementById('grafico-tabla');
    var btnTabla = document.getElementById('toggle-tabla-grafico');

    if (!canvas) {
        return;
    }

    // Alternativa textual del gráfico (WCAG 1.1.1): el <canvas> se expone como imagen
    // con nombre accesible y los datos se vuelcan en una tabla (oculta visualmente
    // pero disponible para lectores de pantalla; un botón permite mostrarla).
    canvas.setAttribute('role', 'img');
    if (!canvas.getAttribute('aria-label')) {
        canvas.setAttribute('aria-label', 'Gráfico de datos del dataset');
    }
    if (!tabla) {
        tabla = document.createElement('div');
        tabla.id = 'grafico-tabla';
        tabla.className = 'sr-only';
        canvas.parentNode.insertAdjacentElement('afterend', tabla);
    }
    if (btnTabla && tabla) {
        btnTabla.addEventListener('click', function () {
            var visible = btnTabla.getAttribute('aria-expanded') === 'true';
            btnTabla.setAttribute('aria-expanded', visible ? 'false' : 'true');
            tabla.className = visible ? 'sr-only' : 'mt-2 overflow-x-auto';
            btnTabla.textContent = visible
                ? 'Ver los datos del gráfico en una tabla'
                : 'Ocultar la tabla de datos del gráfico';
        });
    }

    // Los avisos del gráfico son mensajes de estado (WCAG 4.1.3).
    if (aviso) {
        aviso.setAttribute('role', 'status');
        aviso.setAttribute('aria-live', 'polite');
    }

    // Si la librería de gráficos no cargó, avisar en pantalla en vez de fallar en silencio.
    if (typeof Chart === 'undefined') {
        if (aviso) {
            aviso.textContent = 'No se pudo cargar la librería de gráficos (Chart.js). Recarga la página o verifica tu conexión.';
            aviso.classList.remove('hidden');
        }
        return;
    }

    if (!columnas.length) {
        if (aviso) {
            aviso.textContent = 'Este dataset no tiene columnas para graficar.';
            aviso.classList.remove('hidden');
        }
        return;
    }

    var COLOR = '#db0455';
    // Paleta con contraste >= 3:1 sobre blanco para sectores y muestras de leyenda (WCAG 1.4.11).
    var PALETA = ['#db0455', '#a00340', '#b45309', '#047857', '#1d4ed8', '#6d28d9',
        '#be185d', '#0f766e', '#c2410c', '#4338ca', '#4d7c0f', '#b91c1c'];

    var chart = null;

    function opcion(value, label, selected) {
        var o = document.createElement('option');
        o.value = value;
        o.textContent = label;
        if (selected) o.selected = true;
        return o;
    }

    // Poblar eje X con todas las columnas; preferir fecha/texto como predeterminada.
    var defaultX = (columnas.find(function (c) { return c.tipo === 'fecha'; })
        || columnas.find(function (c) { return c.tipo === 'texto'; })
        || columnas[0]).key;

    columnas.forEach(function (c) {
        if (selX) selX.appendChild(opcion(c.key, c.label, c.key === defaultX));
    });

    // Columnas que son numéricas pero en realidad son identificadores/fechas
    // (códigos, UBIGEO, años, fechas YYYYMMDD): no tienen sentido como métrica a sumar.
    function pareceIdentificador(key) {
        return /(^|_)(fecha|anio|año|ano|ubigeo|codigo|cod|dni|id|year|periodo)(_|$)/i.test(key)
            || /fecha|ubigeo|codigo/i.test(key);
    }

    // Poblar eje Y solo con columnas numéricas, más la opción de conteo de filas.
    var numericas = columnas.filter(function (c) { return c.tipo === 'numero'; });

    // Por defecto, preferir la primera columna numérica "real" (no identificador/fecha);
    // si todas parecen identificadores, usar el conteo de filas.
    var idxDefaultY = -1;
    for (var iY = 0; iY < numericas.length; iY++) {
        if (!pareceIdentificador(numericas[iY].key)) { idxDefaultY = iY; break; }
    }

    if (selY) {
        if (numericas.length) {
            numericas.forEach(function (c, i) {
                selY.appendChild(opcion(c.key, c.label, i === idxDefaultY));
            });
        }
        selY.appendChild(opcion('', '(Conteo de filas)', idxDefaultY === -1));
    }

    function actualizar() {
        var x = selX ? selX.value : '';
        var y = selY ? selY.value : '';
        var agg = selAgg ? selAgg.value : 'sum';
        var tipo = selTipo ? selTipo.value : 'bar';

        // Sin columna de valor, la única agregación posible es contar.
        if (selAgg) {
            selAgg.disabled = (y === '');
            if (y === '') selAgg.value = 'count';
        }
        agg = selAgg ? selAgg.value : agg;

        var url = endpoint + '?x=' + encodeURIComponent(x) + '&y=' + encodeURIComponent(y) + '&agg=' + encodeURIComponent(agg);

        fetch(url)
            .then(function (r) { return r.json(); })
            .then(function (data) { render(data, tipo); })
            .catch(function () {
                if (aviso) {
                    aviso.textContent = 'No se pudieron cargar los datos del gráfico.';
                    aviso.classList.remove('hidden');
                }
            });
    }

    function escapeHtml(str) {
        return String(str)
            .replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
    }

    function etiquetaX(key) {
        var col = columnas.find(function (c) { return c.key === key; });
        return col ? col.label : key;
    }

    // Vuelca labels/values en una tabla de datos accesible.
    function renderTabla(labels, values, ejeX, etiquetaSerie) {
        if (!tabla) return;
        if (!labels.length) {
            tabla.innerHTML = '';
            return;
        }
        var html = '<table class="w-full text-sm border-collapse">' +
            '<caption class="sr-only">Datos del gráfico: ' + escapeHtml(etiquetaSerie) + ' por ' + escapeHtml(ejeX) + '</caption>' +
            '<thead><tr>' +
            '<th scope="col" class="px-3 py-1 text-left bg-gray-50 border-b">' + escapeHtml(ejeX) + '</th>' +
            '<th scope="col" class="px-3 py-1 text-right bg-gray-50 border-b">' + escapeHtml(etiquetaSerie) + '</th>' +
            '</tr></thead><tbody>';
        for (var i = 0; i < labels.length; i++) {
            html += '<tr><th scope="row" class="px-3 py-1 text-left font-normal border-b border-gray-100">' + escapeHtml(labels[i]) + '</th>' +
                '<td class="px-3 py-1 text-right border-b border-gray-100">' + escapeHtml(values[i]) + '</td></tr>';
        }
        html += '</tbody></table>';
        tabla.innerHTML = html;
    }

    function render(data, tipo) {
        var labels = data.labels || [];
        var values = data.values || [];

        if (aviso) {
            if (data.truncado) {
                aviso.textContent = 'Mostrando las 50 categorías con mayor valor (hay más en el dataset).';
                aviso.classList.remove('hidden');
            } else if (!labels.length) {
                aviso.textContent = 'No hay datos para esta combinación.';
                aviso.classList.remove('hidden');
            } else {
                aviso.classList.add('hidden');
            }
        }

        var esCircular = (tipo === 'pie' || tipo === 'doughnut');
        var colorY = columnas.find(function (c) { return c.key === data.ejeY; });
        var etiquetaSerie = data.ejeY
            ? (colorY ? colorY.label : data.ejeY) + ' (' + data.agregacion + ')'
            : 'Conteo';

        var nombreX = etiquetaX(selX ? selX.value : '');
        var tiposNombre = { bar: 'Gráfico de barras', line: 'Gráfico de líneas', pie: 'Gráfico circular', doughnut: 'Gráfico de dona' };
        canvas.setAttribute('aria-label', (tiposNombre[tipo] || 'Gráfico') + ': ' + etiquetaSerie + ' por ' + nombreX +
            ' (' + labels.length + ' categorías). Los valores están disponibles en la tabla de datos.');
        renderTabla(labels, values, nombreX, etiquetaSerie);

        var dataset = {
            label: etiquetaSerie,
            data: values,
            backgroundColor: esCircular ? PALETA : (tipo === 'line' ? 'rgba(219,4,85,0.15)' : COLOR),
            borderColor: COLOR,
            borderWidth: tipo === 'line' ? 2 : 1,
            fill: tipo === 'line',
            tension: 0.3
        };

        if (chart) {
            chart.destroy();
        }

        chart = new Chart(canvas.getContext('2d'), {
            type: tipo,
            data: { labels: labels, datasets: [dataset] },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: esCircular },
                    title: { display: false }
                },
                scales: esCircular ? {} : {
                    y: { beginAtZero: true }
                }
            }
        });
    }

    [selX, selY, selAgg, selTipo].forEach(function (s) {
        if (s) s.addEventListener('change', actualizar);
    });

    actualizar();
})();
