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

    if (!canvas) {
        return;
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
    var PALETA = ['#db0455', '#a00340', '#f59e0b', '#10b981', '#3b82f6', '#8b5cf6',
        '#ec4899', '#14b8a6', '#f97316', '#6366f1', '#84cc16', '#ef4444'];

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
