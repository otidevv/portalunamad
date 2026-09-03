# Auditoría de accesibilidad web – Portal UNAMAD

**Norma de referencia:** WCAG 2.1 nivel AA (equivalente a la NTP-ISO/IEC 40500:2012 adoptada por la Ley N° 29973, Ley General de la Persona con Discapacidad, art. 22, y su reglamento D.S. 002-2014-MIMP; requisito de SUNEDU sobre accesibilidad del portal institucional).
**Fecha de la auditoría:** 3 de septiembre de 2026.
**Sistema auditado:** portal web institucional (Laravel 12, plantillas Blade, Tailwind CSS 4, JavaScript sin framework, Chart.js para datos abiertos). Código en `resources/views` (163 plantillas), `resources/css`, `resources/js` y `public/js`.

## 1. Metodología

1. **Revisión manual de código** de las 163 plantillas Blade, hojas de estilo y scripts, con una rúbrica común de 17 criterios WCAG 2.1 (ver §3). Cada hallazgo se anota con archivo y número de línea (estado del repositorio en el commit `9a8435b`, antes de las correcciones).
2. **Cálculo de contraste** con la fórmula de luminancia relativa de WCAG para la paleta institucional y los colores de Tailwind CSS 4 empleados.
3. **Verificación automática** con pa11y-ci 4 (motores axe-core 4.11 y HTML_CodeSniffer, estándar WCAG2AA) sobre 17 páginas representativas del sitio en ejecución (`npm run a11y`). Los resultados "incompletos" de axe (que requieren revisión humana, p. ej. texto sobre imágenes) se registran como avisos, no como errores.

### Resultado automático inicial (antes de corregir)

| Indicador | Valor |
|---|---|
| Páginas analizadas | 17 |
| Páginas sin errores | 0 |
| Errores confirmados | 175 |
| Avisos que requieren revisión manual | 1457 |

Reglas con más errores: contraste de color (`color-contrast` / `1_4_3.G18`, 130), enlaces sin nombre accesible (`link-name`, 17+17), campos de formulario sin etiqueta (`F68`, `H91`, 7), botón sin nombre (2), encabezado vacío (1), id duplicado (1). El informe completo está en `docs/accesibilidad/reporte-antes.json`.

## 2. Resumen de hallazgos por criterio y grupo de vistas

| Criterio | Layouts | Portada y generales | Facultades | Oficinas y proyectos | Transparencia | Admin | Total |
|---|---:|---:|---:|---:|---:|---:|---:|
| 1.1.1 Contenido no textual (A) | 12 | 48 | 56 | 80 | 29 | 67 | **292** |
| 1.2.1 – 1.2.5 Contenido multimedia (A/AA) | 5 | 6 | 0 | 0 | 0 | 2 | **13** |
| 1.3.1 Información y relaciones (A) | 6 | 48 | 81 | 97 | 34 | 87 | **353** |
| 1.3.3 Características sensoriales / 1.4.1 Uso del color (A) | 2 | 7 | 17 | 21 | 3 | 4 | **54** |
| 1.4.3 Contraste mínimo (AA) y 1.4.11 Contraste no textual (AA) | 13 | 35 | 54 | 54 | 21 | 32 | **209** |
| 1.4.4 Cambio de tamaño del texto / 1.4.10 Reflujo (AA) | 7 | 3 | 6 | 1 | 8 | 4 | **29** |
| 2.1.1 Teclado (A) y 2.1.2 Sin trampas de foco (A) | 8 | 6 | 0 | 1 | 0 | 4 | **19** |
| 2.4.1 Evitar bloques (A) | 4 | 4 | 47 | 39 | 18 | 0 | **112** |
| 2.4.2 Título de página (A) | 2 | 4 | 28 | 15 | 9 | 21 | **79** |
| 2.4.4 Propósito de los enlaces (A) | 8 | 18 | 54 | 31 | 33 | 13 | **157** |
| 2.4.6 Encabezados y etiquetas (AA) | 1 | 2 | 2 | 2 | 0 | 0 | **7** |
| 2.4.7 Foco visible (AA) | 2 | 3 | 4 | 0 | 0 | 9 | **18** |
| 3.1.2 Idioma de las partes (AA) | 4 | 9 | 28 | 3 | 0 | 3 | **47** |
| 3.2.1 – 3.2.5 Previsible (A/AA) | 2 | 1 | 0 | 0 | 0 | 5 | **8** |
| 3.3.1 – 3.3.3 Ayuda a la entrada de datos (A/AA) | 1 | 4 | 0 | 0 | 0 | 18 | **23** |
| 4.1.2 Nombre, función, valor (A) | 13 | 18 | 13 | 23 | 20 | 31 | **118** |
| 4.1.3 Mensajes de estado (AA) | 4 | 12 | 0 | 3 | 0 | 17 | **36** |
| Observaciones adicionales (buenas prácticas, WCAG 2.2 y redacción) | 0 | 0 | 3 | 7 | 0 | 7 | **17** |
| **Total** | **94** | **228** | **393** | **377** | **175** | **324** | **1591** |

Archivos con al menos un hallazgo: 165. Los hallazgos repetidos en varias líneas de un mismo archivo se cuentan como una sola viñeta.

### Hallazgos de mayor impacto (resumen ejecutivo)

1. **Contraste del color institucional.** El fucsia `#ed145b` usado en enlaces, títulos de menú, estados activos y botones ofrece 4.33:1 sobre blanco (mínimo 4.5:1). Afecta a todas las páginas (cabecera, menús, pie) y a más de 500 usos en las vistas.
2. **Mega-menús no operables por teclado.** Se abrían solo por `:hover`/`:focus-within`, el foco recorría ~60 enlaces por menú y Escape dejaba el foco en `body`; los botones de Vicerrectorados no respondían. `aria-controls` apuntaba a ids aleatorios y `aria-haspopup` era incorrecto.
3. **Imágenes sin texto alternativo o con alt genérico** en más de 100 plantillas (fotos de autoridades y docentes, banners, logos, infografías con texto).
4. **Jerarquía de encabezados rota.** La cabecera inyectaba h3/h5/h6 antes del h1 de cada página; muchas vistas sin h1, con saltos h2→h4 o títulos maquetados con `<p>`/`<div>`.
5. **Formularios sin etiquetas** (buscadores, filtros y todo el panel de administración), sin `aria-required`, sin asociación de errores.
6. **Enlaces y botones sin nombre accesible** (solo icono: redes sociales, YouTube, editar/eliminar, cerrar) y enlaces genéricos "Ver más"/"Descargar" repetidos.
7. **Componentes dinámicos sin semántica ARIA:** carrusel sin pausa ni controles accesibles, modal de anuncios que se abre solo sin gestión de foco, pestañas, acordeones y avisos sin `aria-live`.
8. **Multimedia sin subtítulos ni transcripción** (video emergente, iframes de YouTube, himno en reproductor personalizado).

## 3. Hallazgos detallados por criterio

Formato: `L<línea>`: descripción del incumplimiento. Propuesta de corrección. Las líneas corresponden al commit `9a8435b`.

### 1.1.1 Contenido no textual (A)

_Toda imagen, icono o gráfico debe tener una alternativa textual equivalente; los elementos decorativos deben ocultarse a la tecnología de asistencia._

**Hallazgos: 292**

#### Layouts, partials y JS global

**`resources/views/layouts/app.blade.php`**

- L129: `<img … alt="Logo UNAMAD">` (pantalla de carga) genérico. Propuesta: `alt="Logotipo de la Universidad Nacional Amazónica de Madre de Dios"`; o `alt=""` porque la pantalla de carga es puramente decorativa y desaparece a los 0,5 s.
- L132-134: `.loading-dots` con tres `<span>.</span>` reales: el lector de pantalla lee "punto punto punto". Propuesta: `aria-hidden="true"` en el `<span class="loading-dots">`.
- L206: logo dentro del enlace a inicio con `alt="Logo UNAMAD"`; el alt debe describir el destino del enlace. Propuesta: `alt="UNAMAD – Ir a la página de inicio"`.
- L1427: `alt="Portal de Transparencia"` en enlace externo que abre pestaña nueva. Propuesta: `alt="Portal de Transparencia Estándar del Estado Peruano (se abre en una ventana nueva)"`.
- L1435: `alt="GOB.PE"` (siglas). Propuesta: `alt="gob.pe – Plataforma digital única del Estado Peruano (se abre en una ventana nueva)"`.

**`resources/views/admin/layouts/app.blade.php`**

- L21: `<img … alt="UNAMAD">` (logo). Propuesta: `alt="Logotipo de la UNAMAD"`.
- L38, L47, L56, L65, L73, L82, L91, L100, L109, L118, L127, L135, L143, L160: SVG decorativos junto a texto sin `aria-hidden="true"`.
- L177-183: botón hamburguesa cuyo único contenido es un SVG sin `aria-hidden` y sin nombre accesible. Propuesta: `aria-label="Mostrar u ocultar menú lateral"` + `aria-hidden="true"` en el svg.
- L190-196: botón de notificaciones solo con icono, sin nombre. Propuesta: `aria-label="Notificaciones"`.
- L200-208: botón de perfil cuyo nombre accesible es solo la inicial del usuario ("A") + svg flecha sin `aria-hidden`. Propuesta: `aria-label="Menú de usuario"`.

**`resources/views/partials/video-destacado.blade.php`**

- L26-28: SVG dentro del botón "Cerrar video" sin `aria-hidden="true"` (el botón ya tiene `aria-label`, L24). Propuesta: añadir `aria-hidden="true"`.

**`public/js/dataset-chart.js`**

- L150-164: el gráfico se dibuja en `<canvas>` sin alternativa textual: no se asigna `role="img"`/`aria-label` al canvas ni se genera una tabla de datos equivalente; Chart.js no expone valores a la tecnología de asistencia. Propuesta: en `render()` rellenar una `<table>` (visible o `sr-only`) con `labels`/`values` y `canvas.setAttribute('role','img'); canvas.setAttribute('aria-label', etiquetaSerie + ' por ' + <etiqueta eje X>)`.

#### Portada y vistas generales (comunicados, posgrado, datos abiertos, documentos, acceso, universidad)

**`resources/views/home.blade.php`**

- L15, L22, L29, L36, L43, L50, L57, L64: banners del slider con `alt` genérico ("Campus UNAMAD", "Estudiantes UNAMAD", "Investigación UNAMAD", "Amazonía y Biodiversidad", "Tecnología e Innovación", "Cultura y Tradición Amazónica", "Futuro y Desarrollo Sostenible"). Los banners institucionales suelen llevar texto (convocatorias, fechas, lemas) que debe reproducirse. Propuesta: alt que describa el contenido real de cada imagen, p. ej. `alt="Estudiantes de la UNAMAD en el campus de Puerto Maldonado"`, `alt="Investigadores en laboratorio de la UNAMAD"`, `alt="Vista aérea de la Amazonía de Madre de Dios"`; si el banner contiene texto, transcribirlo en el alt.
- L89: `<img src="logounamad.png" alt="UNAMAD">` inmediatamente antes del `<h1>` con el nombre completo. Propuesta: `alt="Logotipo de la Universidad Nacional Amazónica de Madre de Dios"` o `alt=""` (decorativa, el h1 ya nombra la institución).
- L115: `<img src="mascota.png" alt="Mascota UNAMAD">` junto al botón "Admisión 2026"; es decorativa. Propuesta: `alt=""` (no aporta información; evita ruido junto al enlace).
- L183, L651: `<img alt="{{ $noticia['titulo'] }}">` dentro del mismo `<a>` que contiene el `<h3>` con el mismo título → el lector de pantalla lee el título dos veces. Propuesta: `alt=""` (la imagen es redundante con el encabezado del enlace).
- L787, L798, L809, L820, L831: iconos SVG de la sección "cifras" con `alt="Investigadores"`, `"Fundación"`, `"Estudiantes"`, `"Escuelas"`, `"Convenios"` repiten la etiqueta textual contigua. Propuesta: `alt=""` en los cinco.
- L1093: `<img src="boletin2025.JPG" alt="Boletín UNAMAD">` (portada con texto). Propuesta: `alt="Portada del Boletín Digital UNAMAD al Día 2025: Felices Bodas de Plata, 25 años impulsando el desarrollo en la Amazonía"`.
- L1127, L1135, L1143, L1151, L1158, L1165, L1175, L1183, L1191, L1199, L1206, L1213: logos de entidades externas con `alt="SUNEDU"`, etc., dentro de un enlace cuyo `<h3>` repite el mismo nombre → lectura duplicada. Propuesta: `alt=""` (o `alt="Logotipo de SUNEDU"` y eliminar el h3 visible duplicado).
- L1316, L1324: emojis `🖼️` y `🔗` dentro de `<h3>` sin `aria-hidden` → se leen como "cuadro enmarcado" / "eslabón". Propuesta: `<span aria-hidden="true">🖼️</span> Más imágenes`.
- L2188: emoji `⭐` en badge "Destacado" (JS) sin `aria-hidden`. Propuesta: `<span aria-hidden="true">⭐</span> Destacado`.
- L1305: `<img id="modal-imagen" alt="Imagen del anuncio">` alt genérico inicial; el JS (L1934) lo reemplaza por el título, pero las imágenes adicionales (L1953) reciben todas el mismo alt del título. Propuesta: `alt="{{ titulo }} – imagen 1 de N"`.
- L1236-1237: `<svg ... aria-hidden="true" ... aria-hidden="true">` atributo duplicado (HTML inválido). Propuesta: dejar uno.
- L2062-2066: lightbox generado por `abrirImagenLightbox()` con botón de cierre solo-icono sin `aria-label` y contenedor sin `role="dialog"`. (Función no invocada actualmente; si se mantiene, corregir: `aria-label="Cerrar imagen"`.)

**`resources/views/comunicados.blade.php`**

- L10, L18, L44, L67, L106, L136, L157, L165: SVG decorativos junto a texto sin `aria-hidden="true"`. Propuesta: añadir `aria-hidden="true" focusable="false"`.
- L100-102: `<img alt="{{ titulo }}">` repite el `<h3>` L122 de la misma tarjeta. Propuesta: `alt=""`.

**`resources/views/comunicado.blade.php`**

- L10, L18, L26, L57, L65, L95, L113, L166, L174, L182: SVG decorativos sin `aria-hidden="true"`.
- L77-79: `<img alt="{{ titulo }}">` repite el h1. Propuesta: alt descriptivo de la imagen (campo `descripcion_imagen` en admin) o `alt=""` si es meramente ilustrativa.

**`resources/views/capacitaciones-servir.blade.php`**

- L9-11: imagen de fondo del hero (`opacity-30`, `mix-blend-overlay`) con `alt="Videos de Capacitación SERVIR"` que duplica el h1. Propuesta: `alt=""`.
- L15, L34, L49, L73, L90, L103, L112, L119, L134, L151, L164, L173, L180, L198, L211, L220, L227, L245, L258, L267, L274, L289, L306, L319, L328, L335, L353, L366, L375, L382, L400, L413, L422, L429, L452, L468, L485, L499, L506, L524, L538, L545, L563, L577, L584, L602, L616, L623, L674, L691, L705, L712, L719, L775, L794, L804, L811, L826: 58 SVG decorativos sin `aria-hidden="true"`.
- L89, L150, L197, L244, L305, L352, L399, L484, L523, L562, L601, L690: enlaces "play" superpuestos solo con icono, sin `aria-label`. Propuesta: `aria-label="Ver «{{ título }}» en YouTube (se abre en una ventana nueva)"`.
- L84, L145, L192, L239, L300, L347, L394, L479, L518, L557, L596, L685: miniaturas con `alt` = título (redundante con el h3 de la tarjeta). Propuesta: `alt=""`.

**`resources/views/posgrado.blade.php`**

- L9-11: imagen de fondo con `alt="Escuela de Posgrado"` (duplica h1; decorativa al 30 %). Propuesta: `alt=""`.
- L15, L35, L39, L57, L78: SVG sin `aria-hidden="true"`.

**`resources/views/posgrado/partials/navigation.blade.php`**

- L5, L17, L26, L40, L46: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/datasets/show.blade.php`**

- L31, L102: SVG sin `aria-hidden="true"` (icono de enlace externo e icono chevron).
- L93: `<canvas id="grafico-dataset">` sin contenido alternativo, `role="img"` ni `aria-label`; el gráfico (Chart.js, `public/js/dataset-chart.js`) no tiene alternativa textual. Propuesta: `role="img"` + `aria-label` dinámico ("Gráfico de barras: {{ Y }} por {{ X }}") y una tabla de datos (`<table>` oculta/visible con botón "Ver datos en tabla") generada desde `data.labels/values`.

**`resources/views/documentos/publicos/index.blade.php`**

- L21, L39, L92, L189, L343: SVG decorativos sin `aria-hidden="true"`.
- L49-52, L127-130, L357-360: spinners SVG sin `aria-hidden` y sin `role="status"`. Propuesta: `aria-hidden="true"` en el SVG y `role="status"` en el contenedor con texto "Buscando…"/"Cargando…".
- L100-106, L144, L260, L348, L374, L397-401: emojis usados como iconos (📁 🗃️ 💼 📚 🏛️, `icono_completo`) sin `aria-hidden` → se verbalizan ("carpeta de archivos"). Propuesta: `<span aria-hidden="true">`.
- L152-154: badge con solo `⭐` (sin texto) → sin nombre accesible. Propuesta: `<span aria-hidden="true">⭐</span><span class="sr-only">Destacado</span>`.
- L157-159: badge con solo `🔗`. Propuesta: sr-only "Enlace externo".
- L98-99, L347: `style="color: {{ $carpeta->color }}"` color definido por el administrador sin validación de contraste (1.4.3 no verificable).

**`resources/views/auth/login.blade.php`**

- L14, L35, L57, L111, L124: SVG decorativos sin `aria-hidden="true"`.
- L66-74: botón mostrar/ocultar contraseña solo con icono, sin `aria-label`. Propuesta: `aria-label="Mostrar contraseña"` + `aria-pressed="false"`, actualizados en `togglePassword()` (L153-171); `aria-hidden="true"` en el SVG L68.

**`resources/views/universidad/autoridades.blade.php`**

- L23, L31, L39, L56, L82, L90, L106, L149, L182, L223, L249, L257, L273, L331, L364: 15 SVG decorativos sin `aria-hidden="true"`.
- L70: foto con `alt="Dr. Joab Maquera Ramírez"` (correcto pero mejorable). Propuesta: `alt="Fotografía del Dr. Joab Maquera Ramírez, Rector (e) de la UNAMAD"`.
- L237: `alt="Dra. Luz Marina Almanza Huamán"`. Propuesta: `alt="Fotografía de la Dra. Luz Marina Almanza Huamán, Vicerrectora de Investigación"`.
- L6: imagen de fondo del hero por CSS (`background-image`) con texto encima; capa `#db0455/80` mitiga, pero el contraste depende de la foto. Propuesta: capa `bg-black/40` adicional o `text-shadow`.

**`resources/views/universidad/historia.blade.php`**

- L10: `<img alt="Historia UNAMAD">` imagen de fondo cubierta por degradado al 90 % → decorativa. Propuesta: `alt=""`.
- L17, L35, L43, L51, L68, L140, L168, L187: SVG decorativos sin `aria-hidden="true"`.
- L147, L151, L155, L159: viñetas hechas con `<div>` (decorativas, aceptable). Propuesta: `list-disc` nativo.

**`resources/views/universidad/politicas.blade.php`**

- L10: `<img alt="Política Institucional UNAMAD">` de fondo → `alt=""`.
- L17, L35, L43, L51, L68, L79, L89, L129, L171, L182, L195, L208, L221, L234, L248, L262, L272, L280: 18 SVG decorativos sin `aria-hidden="true"`.

**`resources/views/universidad/presentacion.blade.php`**

- L23, L31, L39, L59, L81, L101, L113, L148, L171, L179, L187, L196: 12 SVG decorativos sin `aria-hidden="true"`.
- L130: `alt="Dr. Joab Maquera Ramírez"`. Propuesta: `alt="Fotografía del Dr. Joab Maquera Ramírez, Rector (e)"`.
- L132-134: badge "RECTOR" sobre la foto duplica L139-141. Propuesta: `aria-hidden="true"`.
- L6: fondo por CSS con texto encima (ver autoridades).

**`resources/views/universidad/sedes.blade.php`**

- L10: `<img alt="Sedes UNAMAD">` de fondo → `alt=""`.
- L17, L36, L44, L52, L69, L82, L94, L105, L153, L175, L198: 11 SVG decorativos sin `aria-hidden="true"`.

#### Facultades y escuelas profesionales

**`resources/views/facultades/administracion.blade.php`**

- L9-11: `<img src="…presentacionbackground.jpg" alt="Facultad de Administración y Negocios Internacionales">` es una foto genérica de fondo al 30 % (decorativa) y el alt es engañoso (no es la facultad; el h1 ya nombra la carrera). Propuesta: `alt=""`.
- L15, L34, L38, L56, L76, L100: SVG decorativos (icono hero, chevrons de migas, iconos de tarjeta junto a h2) sin `aria-hidden="true"`. Propuesta: `aria-hidden="true" focusable="false"`.

**`resources/views/facultades/administracion/partials/navigation.blade.php`**

- L5, L16, L25, L38, L58, L69: SVG decorativos sin `aria-hidden="true"` (L16 va dentro de un enlace con texto "Inicio").

**`resources/views/facultades/agroindustrial.blade.php`**

- L23 (icono casa dentro del enlace "Inicio"), L31, L39 (chevrons), L63, L85, L97, L108, L119, L130, L145: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/agroindustrial/partials/navigation.blade.php`**

- L5, L15, L20, L26, L31, L37, L43, L49, L54, L60, L65, L71, L76, L87, L94: SVG decorativos sin `aria-hidden="true"` (todos dentro de enlaces/encabezados con texto).
- L96: `d="…3 3 0 616 0z"` path SVG malformado (icono de ubicación se dibuja incorrectamente).

**`resources/views/facultades/agroindustrial/campo-ocupacional.blade.php`**

- L23, L31, L39, L47, L71, L91, L98, L104, L110, L116, L127, L134, L140, L146, L152, L163, L170, L176, L182, L188, L199, L206, L212, L218, L224, L241, L253, L265, L279: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/agroindustrial/objetivos-academicos.blade.php`**

- L23, L31, L39, L47, L71: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/agroindustrial/perfil-profesional.blade.php`**

- L23, L31, L39, L47, L71, L91, L104, L116, L129, L141, L157, L170, L182, L194, L206, L222, L235, L245, L255: SVG decorativos sin `aria-hidden="true"`.
- L236: path SVG malformado (`515.356`, `919.288`, `616 0z`, `414 0z`) → icono se dibuja mal.

**`resources/views/facultades/agroindustrial/resena-historica.blade.php`**

- L23, L31, L39, L47, L71, L85, L101, L111, L125, L139, L153, L169, L181, L189, L197, L209: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/agroindustrial/vision-mision.blade.php`**

- L23, L31, L39, L47, L72, L98, L112, L126, L140, L158, L183, L197, L211, L225: SVG decorativos sin `aria-hidden="true"`.
- L73 (`616 0z`) y L113 (`713.138`): paths SVG malformados.

**`resources/views/facultades/biologia.blade.php`**

- L23, L31, L39, L63, L85, L93, L104, L115, L126, L141: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/biologia/partials/navigation.blade.php`**

- L5, L15, L20, L26, L31, L37, L43, L49, L54, L60, L65, L71, L76, L87, L94, L103, L110: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/biologia/campo-ocupacional.blade.php`**

- L23, L31, L39, L47, L71, L91, L98, L102, L106, L115, L122, L126, L130, L139, L146, L150, L154, L163, L170, L174, L178, L214: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/biologia/objetivos-academicos.blade.php`**

- L23, L31, L39, L47, L71, L156: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/biologia/perfil-profesional.blade.php`**

- L23, L31, L39, L47, L71, L87, L98, L112, L126, L140, L154: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/biologia/resena-historica.blade.php`**

- L23, L31, L39, L47, L71, L85, L101, L112, L127, L142, L158, L171: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/biologia/vision-mision.blade.php`**

- L23, L31, L39, L47, L72, L95, L109, L123, L137, L155, L177, L191, L205, L219: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/contabilidad.blade.php`**

- L9-11: `<img alt="Facultad de Contabilidad y Finanzas">` foto genérica decorativa con alt engañoso. Propuesta: `alt=""`.
- L15, L34, L38, L56, L76, L96, L116: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/contabilidad/partials/navigation.blade.php`**

- L5, L16, L25, L38, L47, L58, L71: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/derecho.blade.php`**

- L9-11: `<img alt="Facultad de Derecho y Ciencias Políticas">` decorativa con alt engañoso. Propuesta: `alt=""`.
- L15, L34, L38, L56, L80, L104: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/derecho/partials/navigation.blade.php`**

- L5, L16, L25, L38, L58, L69: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/ecoturismo.blade.php`**

- L9-11: `<img alt="Facultad de Ecoturismo">` decorativa con alt engañoso. Propuesta: `alt=""`.
- L15, L34, L38, L56, L76, L100, L120: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/ecoturismo/partials/navigation.blade.php`**

- L5, L16, L25, L38, L58, L69: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/en-desarrollo.blade.php`**

- L9-11: `<img alt="{{ $carrera }}">` foto genérica decorativa; el alt repite el h1. Propuesta: `alt=""`.
- L15, L35, L52, L76: SVG decorativos sin `aria-hidden="true"` (L76 dentro del enlace "Volver al inicio").

**`resources/views/facultades/enfermeria.blade.php`**

- L9-11: `<img alt="Facultad de Enfermería">` decorativa con alt engañoso. Propuesta: `alt=""`.
- L15, L34, L38, L56, L76, L96: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/enfermeria/partials/navigation.blade.php`**

- L5, L16, L25, L38, L58, L69: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/forestal.blade.php`**

- L23, L31, L39, L63, L81, L94, L104, L110, L116, L127, L139, L148, L157, L169: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/forestal/partials/navigation.blade.php`**

- L5, L16, L25, L38, L47, L58: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/matematica.blade.php`**

- L23, L31, L39, L63, L81, L122, L131, L141, L151, L164, L176, L185, L194, L203, L215: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/matematica/partials/navigation.blade.php`**

- L5, L16, L25, L38, L58, L69: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/medicina-humana.blade.php`**

- L23, L31, L39, L63, L85, L93, L104, L115, L126, L141: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/medicina-humana/partials/navigation.blade.php`**

- L5, L15, L20, L26, L31, L37, L43, L49, L54, L60, L65, L71, L76, L87, L94, L100, L107, L113: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/medicina-humana/campo-ocupacional.blade.php`**

- L23, L31, L39, L47, L71, L91, L98, L102, L106, L115, L122, L126, L130, L139, L146, L150, L163, L170, L181: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/medicina-humana/objetivos-academicos.blade.php`**

- L23, L31, L39, L47, L71, L156: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/medicina-humana/perfil-profesional.blade.php`**

- L23, L31, L39, L47, L71, L88, L122, L132, L150, L168, L186: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/medicina-humana/resena-historica.blade.php`**

- L23, L31, L39, L47, L71, L85, L101, L112, L127, L142, L158, L171: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/medicina-humana/vision-mision.blade.php`**

- L23, L31, L39, L47, L72, L94, L108, L122, L140, L163, L177, L191, L205: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/psicologia.blade.php`**

- L23, L31, L39, L63, L85, L93, L104, L115, L126, L141: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/psicologia/partials/navigation.blade.php`**

- L5, L15, L20, L26, L31, L37, L43, L49, L54, L60, L65, L71, L76, L87, L94, L100, L107: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/psicologia/campo-ocupacional.blade.php`**

- L23, L31, L39, L47, L71, L90, L99, L108, L117, L126, L135, L147, L161: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/psicologia/objetivos-academicos.blade.php`**

- L23, L31, L39, L47, L71, L156: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/psicologia/perfil-profesional.blade.php`**

- L23, L31, L39, L47, L71, L88, L122, L132, L150, L168, L186, L204: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/psicologia/resena-historica.blade.php`**

- L23, L31, L39, L47, L71, L85, L101, L112, L127, L142, L158, L171: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/psicologia/vision-mision.blade.php`**

- L23, L31, L39, L47, L72, L94, L108, L122, L140, L163, L177, L191, L206: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/sistemas.blade.php`**

- L23, L31, L39, L63, L81, L94, L106, L118, L130, L142, L157, L167, L173, L179, L190: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/sistemas/partials/navigation.blade.php`**

- L5, L16, L25, L38, L58, L69: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/veterinaria.blade.php`**

- L23, L31, L39, L63, L81, L92, L100, L108, L120, L133, L193, L224: SVG decorativos sin `aria-hidden="true"`.

**`resources/views/facultades/veterinaria/partials/navigation.blade.php`**

- L5, L16, L25, L38, L58, L69: SVG decorativos sin `aria-hidden="true"`.

#### Oficinas y proyectos

**`resources/views/oficinas/academicos.blade.php`**

- L21-25: enlace "/" con solo SVG (casa) sin texto ni `aria-label` (P1). Propuesta: `aria-label="Inicio"`.
- L22, L26, L30, L52, L69, L81, L85, L89, L93, L97, L101, L105, L109, L113, L117, L121: SVG/`div` de viñeta decorativos sin `aria-hidden="true"` (P2).

**`resources/views/oficinas/academicos/partials/navigation.blade.php`**

- L5, L16, L25, L38, L58, L70: SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/oficinas/administracion.blade.php`**

- L23, L31, L39, L63, L81, L92, L101, L110, L119, L128, L137, L146, L155, L164, L173, L182, L191, L200, L209, L221: SVG decorativos sin `aria-hidden="true"` (P2).
- L6: imagen de fondo `presentacionbackground.jpg` vía `style=` — decorativa con velo; correcto que no tenga alt, pero ver contraste.

**`resources/views/oficinas/administracion/partials/navigation.blade.php`**

- L5, L15, L20, L31, L38: SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/oficinas/admision.blade.php`**

- L21-25: enlace "/" solo con SVG sin nombre accesible (P1).
- L22, L26, L30, L51, L66, L75: SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/oficinas/admision/partials/navigation.blade.php`**

- L5, L16, L25, L38, L58, L70: SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/oficinas/ambiental.blade.php`**

- L23, L31, L39, L63, L88, L101, L109, L120, L131, L142: SVG decorativos sin `aria-hidden="true"` (P2).
- L76-78: `<img alt="Comité Ambiental Universitario - UNAMAD">` — el comentario indica que es un logo; alt aceptable. Propuesta más precisa: `alt="Logotipo del Comité Ambiental Universitario de la UNAMAD"`.

**`resources/views/oficinas/ambiental/actividades.blade.php`**

- L23, L31, L39, L47, L71, L90, L101, L112, L123, L134, L154, L161, L176: SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/oficinas/ambiental/partials/navigation.blade.php`**

- L5, L15, L20, L26, L31, L42, L49, L56, L62: SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/oficinas/asamblea.blade.php`**

- L10: `<img src="presentacionbackground.jpg" alt="Asamblea Universitaria UNAMAD">` es la foto genérica de fondo bajo un velo de color (decorativa); el alt actual la anuncia como contenido. Propuesta: `alt=""` (y `aria-hidden="true"`).
- L17 (dentro del h1), L35, L43, L51, L68, L80, L100, L307, L317, L326, L335: SVG decorativos sin `aria-hidden="true"` (P2). Los de L17/L68 están dentro de un encabezado; añadir además `focusable="false"`.

**`resources/views/oficinas/biblioteca.blade.php`**

- L21-25: enlace "/" solo con SVG sin nombre accesible (P1).
- L22, L26, L30, L52, L69, L81, L85, L89, L93, L97, L101, L105: SVG/viñetas decorativas sin `aria-hidden="true"` (P2).

**`resources/views/oficinas/biblioteca/partials/navigation.blade.php`**

- L5, L16, L25, L38, L58: SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/oficinas/bienestar.blade.php`**

- L21-25: enlace "/" solo con SVG sin nombre accesible (P1).
- L22, L26, L30, L52, L64, L68, L72, L76, L80, L96, L113: SVG/viñetas decorativas sin `aria-hidden="true"` (P2).

**`resources/views/oficinas/bienestar/actividades.blade.php`**

- L21-25: enlace "/" solo con SVG sin nombre accesible (P1).
- L22, L26, L30, L34, L55, L68: SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/oficinas/bienestar/partials/navigation.blade.php`**

- L5, L16, L23, L32, L45, L54, L65, L76: SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/oficinas/calidad.blade.php`**

- L23, L31, L39, L59, L70, L75, L83, L94, L105, L116, L136, L145, L154, L180, L192, L209, L222, L240, L343, L418, L430, L490, L552, L561, L570, L579, L597, L645, L655, L665, L675: SVG decorativos sin `aria-hidden="true"` (P2).
- L522, L523, L528, L529, L534, L535, L540, L541: emojis 📞 y 📧 usados como iconos; el lector de pantalla anuncia "auricular de teléfono"/"correo electrónico". Propuesta: `<span aria-hidden="true">📞</span>` + texto "Teléfono:"/"Correo:" visible o `sr-only`.

**`resources/views/oficinas/consejo.blade.php`**

- L10: `<img … alt="Consejo Universitario UNAMAD">` foto genérica de fondo bajo velo (decorativa). Propuesta: `alt=""`.
- L17 (en h1), L35, L43, L51, L68, L80, L100, L487, L498, L511, L524, L537, L550, L563, L577, L587, L596, L605: SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/oficinas/cooperacion.blade.php`**

- L23, L31, L39, L63, L93: SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/oficinas/cooperacion/partials/navigation.blade.php`**

- L5, L15, L20, L26, L32, L38, L43, L49, L54, L60, L65, L71, L76, L82, L87, L98, L105, L112, L118: SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/oficinas/cooperacion/convenios.blade.php`**

- L26, L36, L46, L57, L83, L100, L137, L251, L267, L278, L293, L304, L320, L377, L401, L416: SVG decorativos sin `aria-hidden="true"` (P2).
- L387-389: `<img alt="Flujograma de Suscripción de Convenios">` es una imagen compleja (diagrama de flujo con texto). Propuesta: `<figure>` + `<figcaption>` (L393) y descripción larga textual: los pasos A-B-C de L329-370 pueden vincularse con `aria-describedby`.
- L152, L180, L194, L208, L222, L236 (letras A-F) y L333, L346, L361 (A-C): badges de letra que se leen como "A", "B"… antes del título; propuesta `aria-hidden="true"` o `<ol type="A">`.

**`resources/views/oficinas/cooperacion/directorio.blade.php`**

- L23, L31, L39, L47, L71, L92, L103, L113, L131, L159, L188: SVG decorativos sin `aria-hidden="true"` (P2). El avatar L91-95 es un placeholder (no hay foto real de la persona): `aria-hidden="true"`.

**`resources/views/oficinas/cooperacion/estructura-organica.blade.php`**

- L23, L31, L39, L47, L71, L89, L109, L141: SVG decorativos sin `aria-hidden="true"` (P2).
- L96-98: `<img alt="Estructura Orgánica - Oficina de Cooperación y Relaciones Internacionales">` es un organigrama (imagen compleja). Propuesta: `<figure>` con `<figcaption>` (L102) y descripción larga textual (L115-135 ya describe los niveles: vincular con `aria-describedby`).
- L118, L128: badges "1°", "2°" que se leen antes del h4; `aria-hidden="true"`.

**`resources/views/oficinas/cooperacion/mision-vision.blade.php`**

- L23, L31, L39, L47, L71, L88, L101, L116: SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/oficinas/cooperacion/personal-administrativo.blade.php`**

- L23, L31, L39, L47, L71, L92, L100, L106, L112, L126, L134, L140, L146, L160: SVG decorativos sin `aria-hidden="true"` (P2). Avatares L91-95 y L125-129 son placeholders: `aria-hidden="true"`.

**`resources/views/oficinas/cooperacion/servicios.blade.php`**

- L23, L31, L39, L47, L71, L92, L109, L126, L143, L161, L178, L186, L195: SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/oficinas/decanatura.blade.php`**

- L10: `<img … alt="Decanatura UNAMAD">` foto genérica de fondo (decorativa). Propuesta: `alt=""`.
- L17 (en h1), L35, L43, L51, L68, L80, L103, L385, L396, L409, L422, L435, L450, L463, L477, L487, L496: SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/oficinas/incubadora.blade.php`**

- L21-25: enlace "/" solo con SVG sin nombre accesible (P1).
- L22, L26, L30, L52, L72, L84, L88, L92, L96, L100, L104, L108, L112: SVG/viñetas decorativas sin `aria-hidden="true"` (P2).

**`resources/views/oficinas/incubadora/partials/navigation.blade.php`**

- L5, L16, L25, L38, L58: SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/oficinas/innovacion.blade.php`**

- L21-25: enlace "/" solo con SVG sin nombre accesible (P1).
- L22, L26, L30, L52, L72, L84, L88, L92, L96, L100, L104, L108, L112, L116, L120: SVG/viñetas decorativas sin `aria-hidden="true"` (P2).

**`resources/views/oficinas/innovacion/partials/navigation.blade.php`**

- L5, L16, L25, L38, L58: SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/oficinas/investigacion.blade.php`**

- L21-25: enlace "/" solo con SVG sin nombre accesible (P1).
- L22, L26, L30, L52, L73, L83, L87, L91, L95, L99, L103, L107, L111, L115, L119, L123, L127, L131: SVG/viñetas decorativas sin `aria-hidden="true"` (P2).

**`resources/views/oficinas/investigacion/partials/navigation.blade.php`**

- L5, L17, L26, L40, L60: SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/oficinas/oti.blade.php`**

- L23, L31, L39, L63, L81, L90, L99, L108, L117, L126, L135, L144, L153, L162, L171, L180, L189, L198, L207, L216, L225, L234, L243, L255: SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/oficinas/oti/partials/navigation.blade.php`**

- L5, L15, L20, L31, L38: SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/oficinas/planeamiento.blade.php`**

- L23, L31, L39, L63, L81, L90, L99, L108, L117, L126, L135, L144, L153, L162, L171, L180, L189, L198, L207, L219: SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/oficinas/planeamiento/partials/navigation.blade.php`**

- L5, L15, L20, L31, L38: SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/oficinas/secretaria.blade.php`**

- L23, L31, L39, L56 (en h2), L76 (en h4): SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/proyectos/aldea.blade.php`**

- L9-11: `<img alt="Aldea Científica UNAMAD">` foto genérica al 30% de opacidad bajo velo: decorativa. Propuesta: `alt=""`.
- L15, L34, L38, L56, L80, L90, L100, L110, L120, L136: SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/proyectos/aldea/partials/navigation.blade.php`**

- L5, L16, L25, L38, L47, L58, L69, L80: SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/proyectos/bus.blade.php`**

- L9-11: `<img alt="Bus Universitario">` foto genérica decorativa. Propuesta: `alt=""`.
- L15, L34, L38, L55, L69: SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/proyectos/bus/partials/navigation.blade.php`**

- L5, L16, L25, L38: SVG decorativos sin `aria-hidden="true"` (P2). L46: punto `animate-pulse` decorativo (OK, tiene texto al lado).

**`resources/views/proyectos/estacion.blade.php`**

- L9-11: `<img alt="Estación Geológica UNAMAD">` foto genérica decorativa. Propuesta: `alt=""`.
- L15, L34, L38, L56, L80: SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/proyectos/estacion/partials/navigation.blade.php`**

- L5, L16, L25, L38, L47, L58, L69, L80: SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/proyectos/herbario.blade.php`**

- L9-11: `<img alt="Herbario UNAMAD">` foto genérica decorativa. Propuesta: `alt=""`.
- L15, L34, L38, L56, L80, L100: SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/proyectos/herbario/partials/navigation.blade.php`**

- L5, L16, L25, L38, L47, L58, L69, L80: SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/proyectos/jardin.blade.php`**

- L9-11: `<img alt="Cuna Jardín">` foto genérica decorativa. Propuesta: `alt=""`.
- L15, L34, L38, L56, L80, L104: SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/proyectos/jardin/partials/navigation.blade.php`**

- L5, L16, L25, L38, L47, L58, L69: SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/proyectos/km16.blade.php`**

- L9-11: `<img alt="Campus Km. 16">` foto genérica decorativa. Propuesta: `alt=""`.
- L15, L34, L38, L55, L69: SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/proyectos/km16/partials/navigation.blade.php`**

- L5, L16, L25, L38, L58, L67, L79, L90: SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/proyectos/km18.blade.php`**

- L9-11: `<img alt="Complejo Polideportivo Km. 18">` foto genérica decorativa. Propuesta: `alt=""`.
- L15, L34, L38, L55, L69: SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/proyectos/km18/partials/navigation.blade.php`**

- L5, L16, L25, L38, L58, L67, L79, L90, L101: SVG decorativos sin `aria-hidden="true"` (P2).

**`resources/views/proyectos/panificadora.blade.php`**

- L9-11: `<img alt="Panificadora UNAMAD">` foto genérica decorativa. Propuesta: `alt=""`.
- L15, L34, L38, L56, L76: SVG decorativos sin `aria-hidden="true"` (P2).
- L87, L98, L109, L120, L131, L142: números en círculo se leen como texto suelto antes de cada objetivo; con `<ol>` sobran (`aria-hidden="true"`).

**`resources/views/proyectos/panificadora/partials/navigation.blade.php`**

- L5, L16, L25, L38, L47, L58, L69, L80: SVG decorativos sin `aria-hidden="true"` (P2).

#### Transparencia (Artículo 11 e Indicador 55)

**`resources/views/transparencia/indicador-55.blade.php`**

- L9-11: `<img src="presentacionbackground.jpg" alt="Indicador 55 Transparencia">` es fondo decorativo (opacity-30, mix-blend, el h1 ya dice "Indicador 55"). Propuesta: `alt=""`.
- L15, 34, 38, 56, 84, 95, 105, 115, 125: `<svg>` decorativos junto a texto sin `aria-hidden="true"`.

**`resources/views/transparencia/indicador-55/mv1.blade.php`**

- L9-11: `<img ... alt="MV1 Misión y Visión">` fondo decorativo redundante con el h1 (L20). Propuesta: `alt=""`.
- L15, 35, 39, 43, 61, 77, 87, 97, 113, 130, 140, 150, 160, 170, 180, 196, 216: `<svg>` decorativos sin `aria-hidden="true"`.
- L226: icono "abrir en ventana nueva" dentro del enlace de documento sin `aria-hidden` ni texto alternativo. Propuesta: `aria-hidden="true"` + `<span class="sr-only">(se abre en una ventana nueva)</span>`.

**`resources/views/transparencia/indicador-55/mv2.blade.php`**

- L9-11: `<img alt="MV2 Reglamento y Calendario de Admisión">` fondo decorativo. Propuesta: `alt=""`.
- L15, 34, 38, 42, 60, 125, 165, 201, 233, 251, 269, 301, 319, 337, 369, 387, 419, 437, 469, 487: `<svg>` decorativos sin `aria-hidden="true"`.
- L135, 173, 191, 209, 241, 259, 277, 309, 327, 345, 377, 395, 427, 445, 477, 495: icono "ventana nueva" al final de cada enlace sin `aria-hidden` ni alternativa textual.

**`resources/views/transparencia/indicador-55/mv3.blade.php`**

- L9-11: `<img alt="MV3 Temarios de Exámenes de Admisión">` fondo decorativo. Propuesta: `alt=""`.
- L15, 34, 38, 42, 60, 79, 89, 99, 143, 173, 183, 217, 225, 253, 261, 290, 298, 314, 322, 351, 359, 379: `<svg>` decorativos sin `aria-hidden="true"`.
- L189, 231, 267, 304, 328, 365: icono "ventana nueva" sin `aria-hidden` ni alternativa textual.

**`resources/views/transparencia/indicador-55/mv4.blade.php`**

- L9-11: `<img alt="MV4 Postulantes e Ingresantes">` fondo decorativo. Propuesta: `alt=""`.
- L15, 34, 38, 42, 60, 79, 89, 99, 143, 173, 183, 218, 226, 242, 250, 280, 288, 304, 312, 342, 350, 366, 374, 404, 412, 428, 436, 466, 474, 490, 498, 528, 536, 552, 560, 581: `<svg>` decorativos sin `aria-hidden="true"`.
- L189, 232, 256, 294, 318, 356, 380, 418, 442, 480, 504, 542, 566: icono "ventana nueva" sin `aria-hidden` ni alternativa textual.

**`resources/views/transparencia/indicador-55/mv5.blade.php`**

- L9-11: `<img alt="MV5 Concursos de Selección para Docentes">` fondo decorativo. Propuesta: `alt=""`.
- L15, 34, 38, 42, 60, 79, 89, 99, 143, 173, 183, 217, 225, 254, 272, 290, 322, 340, 358, 376, 408, 426, 444, 476, 494, 512, 530, 548, 580, 598, 616, 639: `<svg>` decorativos sin `aria-hidden="true"`.
- L189, 231, 262, 280, 298, 330, 348, 366, 384, 416, 434, 452, 484, 502, 520, 538, 556, 588, 606, 624: icono "ventana nueva" sin `aria-hidden` ni alternativa textual.

**`resources/views/transparencia/indicador-55/mv6.blade.php`**

- L8, 34, 78, 93, 123, 146, 169, 192, 215, 238, 260: `<svg>` decorativos sin `aria-hidden="true"`. El icono rojo (L93, 123…) es la única indicación de que el archivo es PDF: añadir "(PDF)" al título o `sr-only`.

**`resources/views/transparencia/indicador-55/mv7.blade.php`**

- L8, 33, 69, 103, 120, 147, 169, 200: `<svg>` decorativos sin `aria-hidden="true"`.

**`resources/views/transparencia/indicador-55/mv8.blade.php`**

- L8, 33, 62, 74, 101, 113, 133, 145, 165, 177, 192, 207, 226, 257: `<svg>` decorativos sin `aria-hidden="true"`.

**`resources/views/transparencia/indicador-55/mv9.blade.php`**

- L8, 33, 76, 91, 121, 144, 167, 190, 213, 236, 258, 289: `<svg>` decorativos sin `aria-hidden="true"`.

**`resources/views/transparencia/indicador-55/mv10.blade.php`**

- L8, 33, 64, 68, 81, 108, 120, 137, 163, 180, 206, 223, 249, 266, 292, 309, 331, 362: `<svg>` decorativos sin `aria-hidden="true"`.

**`resources/views/transparencia/indicador-55/mv11.blade.php`**

- L8, 33, 77, 89, 122, 149, 157, 172, 180, 195, 203, 239, 266, 291, 306, 321, 329, 352, 378, 405, 413, 428, 436, 451, 466, 474, 493, 523, 548, 563, 578, 586, 610, 639, 666, 674, 689, 697, 712, 727, 735, 754, 785, 810, 825, 840, 848, 872, 903, 930, 938, 953, 961, 976, 995, 1003, 1018, 1044, 1063, 1078, 1093, 1101, 1120, 1146, 1173, 1181, 1196, 1204, 1219, 1234, 1242, 1257, 1283, 1305, 1320, 1335, 1343, 1358, 1384, 1411, 1419, 1440, 1448, 1463, 1471, 1486, 1515, 1537, 1556, 1575, 1583, 1602, 1623, 1654: 94 `<svg>` decorativos sin `aria-hidden="true"`.

**`resources/views/transparencia/indicador-55/mv12.blade.php`**

- L8, 33, 88, 113, 126, 139, 152, 165, 178, 191, 204, 217, 230, 243, 256, 276, 289, 302, 315, 328, 341, 354, 367, 380, 393, 406, 419, 432, 459: `<svg>` decorativos sin `aria-hidden="true"`.

**`resources/views/transparencia/indicador-55/variable.blade.php`**

- L9, 93, 111, 123, 164, 182, 200, 226: `<svg>` decorativos sin `aria-hidden="true"` (L9 usa `d="{{ $variable->icono }}"` dinámico).

**`resources/views/transparencia/indicador-55/partials/navigation-dynamic.blade.php`**

- L5, 16, 47 (dinámico `{!! $icono !!}`), 57: `<svg>` decorativos sin `aria-hidden="true"`.

**`resources/views/transparencia/indicador-55/partials/navigation.blade.php`**

- L5, 16, 25, 35, 44, 53, 62, 71, 80, 89, 98, 107, 116, 125, 134: `<svg>` decorativos sin `aria-hidden="true"`.

**`resources/views/transparencia/articulo-11/index.blade.php`**

- L8, 31, 49, 71, 93, 116, 134, 152, 175, 197, 219, 241, 263, 285, 307, 329, 344: `<svg>` decorativos sin `aria-hidden="true"` (los colores distintos por icono no aportan significado).

**`resources/views/transparencia/articulo-11/partials/navigation.blade.php`**

- L3, L12: `<svg>` decorativos sin `aria-hidden="true"`.

#### Panel de administración

**`resources/views/admin/anuncios/create.blade.php`**

- L116 SVG de "subir imagen" decorativo sin `aria-hidden="true"` (T3).
- L276 SVG dentro del botón "quitar enlace" (L273, generado por JS) es el único contenido del botón y el botón no tiene `aria-label`. Propuesta: `aria-label="Eliminar este enlace"` + `aria-hidden="true"` en el svg.
- L294, L309 `<img>` de vista previa generadas por JS sin `alt`. Propuesta: `alt="Vista previa de la imagen seleccionada"` (L294) y `alt="Vista previa imagen adicional N"` (L309).

**`resources/views/admin/anuncios/show.blade.php`**

- L14, L22, L57 SVG junto a texto sin `aria-hidden="true"` (T3).
- L130 icono estrella es el ÚNICO contenido que indica "Destacado: Sí" → sin texto alternativo. Propuesta: `<svg aria-hidden="true">` + `<span class="sr-only">Sí</span>` (o texto visible "Sí").
- L75 SVG dentro del enlace icono L73 (sin `aria-label`). Propuesta: `aria-label="Abrir {{ $enlace['titulo'] }} (se abre en una ventana nueva)"`.
- L39 `alt="{{ $anuncio->titulo }}"` — aceptable, aunque repite el h2 L36; si la imagen es solo ilustrativa usar `alt=""`.

**`resources/views/admin/anuncios/index.blade.php`**

- SVG sin `aria-hidden="true"` (T3): L14, L56, L103, L122, L131, L143, L205, L251, L281, L310, L330, L354, L375, L404, L419, L426, L437, L465, L475, L493, L509, L527, L551, L557.
- L193 / L197: la columna "Destacado" muestra solo una estrella (rellena o vacía) sin texto → Propuesta: `<span class="sr-only">{{ $anuncio->destacado ? 'Destacado' : 'No destacado' }}</span>` + `aria-hidden="true"` en los svg.
- L216 enlace "Ver", L225 botón "Editar", L238 botón "Eliminar": solo icono + `title` (T4). Propuesta: `aria-label="Ver anuncio {{ $anuncio->titulo }}"`, `aria-label="Editar anuncio …"`, `aria-label="Eliminar anuncio …"`.
- L294 botón cerrar modal (X) sin texto ni `aria-label` → `aria-label="Cerrar"`.
- L454, L630, L662, L767, L785, L792 botones + / × de enlaces (HTML y JS) solo icono sin `aria-label` → `aria-label="Agregar otro enlace"` / `aria-label="Eliminar este enlace"`.
- L98 `alt="{{ $anuncio->titulo }}"`: miniatura junto al título en la misma fila → redundante; usar `alt=""`.
- L347-351, L370-372 emojis en `<option>`; L449, L453 emojis en placeholder; L487, L503, L523 emojis en `<label>` (T15).

**`resources/views/admin/comunicado-categorias/create.blade.php`**

- L13, L85 SVG sin `aria-hidden="true"` (T3).

**`resources/views/admin/comunicado-categorias/edit.blade.php`**

- L14, L24, L98 SVG sin `aria-hidden="true"` (T3).

**`resources/views/admin/comunicado-categorias/index.blade.php`**

- L13, L24, L35, L133 SVG sin `aria-hidden="true"` (T3).
- L96 enlace "Ver", L105 enlace "Editar", L119 botón "Eliminar": solo icono + `title` (T4). Propuesta: `aria-label="Ver categoría {{ $categoria->nombre }}"`, etc.

**`resources/views/admin/comunicado-categorias/show.blade.php`**

- L14, L22, L56, L103, L110, L185 SVG sin `aria-hidden="true"` (T3).
- L87 enlace "Ver comunicado" solo icono + `title` (T4). Propuesta: `aria-label="Ver comunicado {{ $comunicado->titulo }}"`.

**`resources/views/admin/comunicados/create.blade.php`**

- L13, L30, L100, L127, L154, L180, L233 SVG sin `aria-hidden="true"` (T3).

**`resources/views/admin/comunicados/edit.blade.php`**

- L14, L24, L43, L113, L155, L205, L231, L284 SVG sin `aria-hidden="true"` (T3).
- L123 `alt="{{ $comunicado->titulo }}"` ✓ (aceptable; precede "Imagen actual:").

**`resources/views/admin/comunicados/show.blade.php`**

- L14, L22, L67 SVG sin `aria-hidden="true"` (T3). L67 icono de descarga: si transmite "descargar", añadir `<span class="sr-only">(descargar)</span>`.
- L39 `alt="{{ $comunicado->titulo }}"` ✓ aceptable.

**`resources/views/admin/dashboard.blade.php`**

- L18, L35, L52, L68, L119, L135, L143, L151, L159 SVG decorativos sin `aria-hidden="true"` (T3).
- L108 enlace "editar" de cada anuncio reciente solo icono, sin `title` ni `aria-label` → sin nombre accesible. Propuesta: `aria-label="Editar anuncio {{ $anuncio->titulo }}"`.

**`resources/views/admin/datasets/create.blade.php`**

- L21, L183 SVG sin `aria-hidden="true"` (T3).

**`resources/views/admin/datasets/edit.blade.php`**

- L24, L32, L170, L266 SVG sin `aria-hidden="true"` (T3).
- L216, L303 botones "Quitar" (fila del diccionario, HTML y `<template>`) solo icono + `title` (T4). Propuesta: `aria-label="Quitar campo {{ data_get($col,'label') }}"`.

**`resources/views/admin/datasets/index.blade.php`**

- L16, L169 SVG sin `aria-hidden="true"` (T3).
- L128 "Ver ficha", L135 "Descargar plantilla CSV", L142 "Ver en el portal", L148 "Editar", L157 "Eliminar": solo icono + `title` (T4). Propuesta: `aria-label="Ver ficha de {{ $dataset->nombre }}"`, etc.

**`resources/views/admin/datasets/show.blade.php`**

- L24, L33, L41, L48, L63, L232 SVG sin `aria-hidden="true"` (T3). L63 icono de advertencia junto a texto "Protección de datos" — decorativo, `aria-hidden`.
- L197 `<canvas id="grafico-dataset">` sin contenido alternativo: el gráfico agregado (suma/promedio por categoría) no existe en forma textual (la tabla L207 solo muestra las primeras N filas crudas). Propuesta: `role="img" aria-label="Gráfico de {{ nombre }}: …"` generado por JS + tabla de datos agregados oculta/visible (`sr-only`) o botón "Ver como tabla".

**`resources/views/admin/documentos/index.blade.php`**

- SVG sin `aria-hidden="true"` (T3): L14, L22, L61, L72, L120, L126, L139, L150, L207, L214, L220, L231, L267, L324, L338, L420, L434, L533, L547, L626, L640.
- L35 enlace "inicio" de las migas contiene solo un SVG (L36) sin `aria-label` → `aria-label="Raíz de documentos"`.
- L118 "Subir", L124 "Bajar", L137 "Editar", L149 "Eliminar" (carpetas); L205 "Ver", L212 "Editar", L218 "Cambiar estado", L230 "Eliminar" (documentos): solo icono + `title` (T4). Propuesta: `aria-label="Subir carpeta {{ $carpeta->nombre }}"`, `aria-label="Cambiar estado del documento {{ $documento->titulo }}"`, etc.
- L185 `⭐` con `title="Destacado"` en un `<span>` no enfocable → `<span aria-hidden="true">⭐</span><span class="sr-only">Destacado</span>`.
- L197 `👁️ {{ vistas }}` y L199 `⬇️ {{ descargas }}`: el emoji es la única etiqueta del dato → añadir `<span class="sr-only">vistas</span>` / `descargas`.
- L8 emoji 📁 dentro del `<h1>` (T15); L44, L48, L92, L167 `icono_completo` (emoji) sin `aria-hidden`; L246, L248 emojis ilustrativos del estado vacío → `aria-hidden="true"`.
- L337, L433, L546, L639 botones X de cerrar modal (JS) sin `aria-label="Cerrar"`.
- L377-393, L481-496, L583-599, L684-699 emojis en `<option>` (T15).

**`resources/views/admin/enlaces-normativos/create.blade.php`**

- L13 SVG sin `aria-hidden="true"` (T3).

**`resources/views/admin/enlaces-normativos/edit.blade.php`**

- L13 SVG sin `aria-hidden="true"` (T3).

**`resources/views/admin/enlaces-normativos/_form.blade.php`**

- L79 SVG sin `aria-hidden="true"` (T3).

**`resources/views/admin/enlaces-normativos/index.blade.php`**

- L15, L26, L37, L109 SVG sin `aria-hidden="true"` (T3).
- L83 "Editar", L96 "Eliminar": solo icono + `title` (T4). Propuesta: `aria-label="Editar enlace {{ $enlace->titulo }}"`.
- L8 emoji 🔗 en el `<h1>`; L123 emoji 💡 (T15).

**`resources/views/admin/indicador55/edit.blade.php`**

- L9 enlace "volver" contiene solo un SVG (L10) sin `aria-label` → `aria-label="Volver al listado del Indicador 55"`.
- L20, L49, L93, L133, L148, L177, L188, L205, L211, L228, L275 SVG sin `aria-hidden="true"` (T3).
- L327 SVG "vista previa del icono" es informativo (muestra el resultado del path L334) → `role="img" aria-label="Vista previa del icono"`.
- JS: L479, L579, L612, L784, L822, L844, L972, L1001 botones eliminar solo icono sin `aria-label` → `aria-label="Eliminar documento N"`, `"Eliminar sección N"`, etc.
- L457, L551, L717, L946 SVG de estados vacíos → `aria-hidden="true"`.

**`resources/views/admin/indicador55/index.blade.php`**

- L13, L24, L35, L52, L83, L95, L102, L117 SVG sin `aria-hidden="true"` (T3). L52 icono de la variable (decorativo junto al título) → `aria-hidden`.

**`resources/views/admin/users/index.blade.php`**

- SVG sin `aria-hidden="true"` (T3): L13, L63, L74, L193, L223, L252, L400, L468, L485, L513, L519, L541, L629, L635.
- L160 "Editar", L167 "Cambiar Contraseña", L180 "Eliminar": solo icono + `title` (T4). Propuesta: `aria-label="Editar usuario {{ $user->name }}"`, etc.
- L236, L549 botones X de cerrar sin `aria-label="Cerrar"`.
- L420, L447, L577, L604 botones mostrar/ocultar contraseña: solo icono, sin `aria-label="Mostrar contraseña"` ni `aria-pressed`; el estado se comunica solo con el cambio de icono (L1095-1109).
- L113 `alt="{{ $user->name }}"` junto al nombre visible en la misma celda → redundante; usar `alt=""` (decorativa) o `alt="Avatar de {{ $user->name }}"`.
- L494 `alt="Avatar actual"` ✓.
- L370-373 emojis en `<option>` (🔴 🔵 🟣 ⚪); L387 `✅` en label (T15).

**`resources/views/admin/videos-destacados/create.blade.php`**

- L13 SVG sin `aria-hidden="true"` (T3).

**`resources/views/admin/videos-destacados/edit.blade.php`**

- L13 SVG sin `aria-hidden="true"` (T3).

**`resources/views/admin/videos-destacados/_form.blade.php`**

- L157 SVG sin `aria-hidden="true"` (T3).

**`resources/views/admin/videos-destacados/index.blade.php`**

- L15, L26, L37, L119 SVG sin `aria-hidden="true"` (T3).
- L93 "Editar", L106 "Eliminar": solo icono + `title` (T4). Propuesta: `aria-label="Editar video {{ $video->titulo }}"`.
- L8 emoji 🎬 en `<h1>`; L133 💡 (T15).

### 1.2.1 – 1.2.5 Contenido multimedia (A/AA)

_Los videos deben ofrecer subtítulos sincronizados y/o transcripción; el audio pregrabado, transcripción; los reproductores deben identificarse y ser controlables._

**Hallazgos: 13**

#### Layouts, partials y JS global

**`resources/views/layouts/app.blade.php`**

- Sin `<video>/<audio>` en el layout. L2830-2834: iframe de Google Maps con `title` descriptivo — correcto.
- Observación: L3080-3200 definen estilos de un reproductor de audio (`#audioPlayer`, `.slider`, `.playing-animation`) cuyo marcado vive en `home.blade.php`; auditar allí controles de pausa y nombre accesible.

**`resources/views/partials/video-destacado.blade.php`**

- L34-39: `<video>` sin `<track kind="captions" srclang="es">` ni transcripción/enlace (1.2.2 subtítulos, 1.2.3 audiodescripción o alternativa). El panel admin (Videos Destacados) no permite adjuntar subtítulos. Propuesta: campo VTT en el admin y `<track kind="captions" src="…" srclang="es" label="Español" default>`; alternativamente exigir una transcripción en `descripcion`.
- L41-47: iframe de YouTube con `title` dinámico (correcto) pero sin indicación de subtítulos ni transcripción. Propuesta: forzar `cc_load_policy=1&hl=es` en `embed_url` y mostrar enlace "Ver transcripción" bajo el video.
- L39 y L115-120: `autoplay` silenciado con `controls` visibles → hay control de pausa: cumple 1.4.2.

#### Portada y vistas generales (comunicados, posgrado, datos abiertos, documentos, acceso, universidad)

**`resources/views/home.blade.php`**

- L1020-1021: `<iframe>` de YouTube con `title="YouTube video playlist"` (inglés, genérico). Propuesta: `title="Lista de reproducción de videos de actividades de la UNAMAD en YouTube"`. No se ofrece transcripción ni se indica disponibilidad de subtítulos.
- L1497: `<audio id="himnoAudio">` sin `<track>` ni transcripción (letra del himno). Propuesta: enlace visible "Letra del Himno de la UNAMAD" junto al reproductor o `<track kind="captions">`.
- L1772 + L1737-1738: slider principal con autoplay cada 4 s; solo se pausa con `mouseenter` (ratón). No hay botón "Pausar/Reanudar" ni pausa al recibir foco de teclado (2.2.2). Propuesta: botón `<button type="button" aria-pressed>` "Pausar carrusel" y `focusin`/`focusout` para pausar.
- L1803, L1814, L1793: carrusel "Enlaces Externos" en movimiento continuo (30 s, infinito) sin mecanismo de pausa accesible (solo hover). Propuesta: botón de pausa + respetar `prefers-reduced-motion` desactivando `slideEnlaces`.
- L1714: `@include("partials.video-destacado")` abre un modal con video (autoplay silenciado si es archivo) 3 s tras la carga. Se audita en su propio archivo; aquí solo se registra el impacto en la portada (cambio de contexto no solicitado, ver 3.2.x).

**`resources/views/capacitaciones-servir.blade.php`**

- Todo el contenido son enlaces externos a YouTube/cutt.ly; no se indica si los videos tienen subtítulos ni se ofrece transcripción o resumen textual. Propuesta: añadir párrafo descriptivo por video o enlace "Transcripción (PDF)" cuando exista.

#### Panel de administración

**`resources/views/admin/videos-destacados/edit.blade.php`**

- L32 `<video controls>` sin `<track kind="captions" srclang="es">` ni transcripción; sin `aria-label`/título → `aria-label="Vista previa: {{ $video->titulo }}"`.
- L34 `<iframe>` (YouTube/Drive) sin `title` → `title="Vista previa del video {{ $video->titulo }}"`. `allow="autoplay"` habilita reproducción automática del proveedor; en la vista previa admin debería omitirse.

### 1.3.1 Información y relaciones (A)

_La estructura (encabezados, listas, tablas, formularios con etiquetas) debe estar expresada en el código, no solo visualmente._

**Hallazgos: 353**

#### Layouts, partials y JS global

**`resources/views/layouts/app.blade.php`**

- Encabezados del layout (en orden documental): h3 L235 "La Universidad", h3 L365 "Organización Administrativa", h5 L371 "Órganos de Gobierno" → salto h3→h5, h5 L424 "Vicerrectorados", h6 L451, h6 L538, h5 L591 "Oficinas Centrales", h3 L730 "Nuestras Facultades…", h5 L736/L793/L834/L890 → salto h3→h5, h3 L996 "Programas Académicos…", h3 L1138 "Proyectos e Infraestructura…", h3 L1310 "Portal de Transparencia…", h6 L1552/L1560/L1612/L1654/L1665/L1674/L1685 (menú móvil: h6 sin ningún h1-h5 previo), [h1 de la vista en `<main>` L2639], h3 L2662 "UNAMAD" (footer), h4 L2724 "Enlaces Rápidos", h4 L2778 "Síguenos", h4 L2821 "Ubicación". El header inyecta h3/h5/h6 ANTES del h1 de cada página, por lo que toda la web empieza en h3. Propuesta: en los menús sustituir h3/h5/h6 por `<p class="…" id="…">` y asociar el bloque con `role="group" aria-labelledby`; en el footer usar h2 para las cuatro columnas.
- L1784: "Acceso a Información Pública:" es un `<span>` usado como título de grupo mientras los grupos hermanos del mismo menú usan `<h6>` (L1552, L1560, L1612): relación inconsistente. Propuesta: usar el mismo elemento que los demás grupos.
- L212-1418 (nav escritorio) y L1453-1808 (nav móvil): listas de enlaces construidas con `<div>`/`<a>` sin `<ul>/<li>` (solo el footer L2731-2773 usa `<ul>`). Propuesta: envolver cada grupo de enlaces en `<ul>` con `<li>` para que el lector anuncie "lista, N elementos".
- L2688-2703: dirección, teléfono y correo como `<p>` sueltos; el teléfono (L2692) y el correo (L2703) no son enlaces. Propuesta: `<address>` + `<a href="tel:+51993115418">` y `<a href="mailto:…">`.

**`resources/views/admin/layouts/app.blade.php`**

- Encabezados: h3 L30 (nombre del usuario, en `<aside>`) → h1 L185 "Panel de Administración" → el h3 precede al h1 y el nombre del usuario no es un título de sección. Propuesta: `<p class="font-semibold">` en L30.
- L35-151: `<nav>` con enlaces sueltos sin `<ul>/<li>`; sin `aria-label` (único nav, aceptable). Propuesta: lista.

#### Portada y vistas generales (comunicados, posgrado, datos abiertos, documentos, acceso, universidad)

**`resources/views/home.blade.php`**

- Encabezados: h1 L93 "Universidad Nacional Amazónica de Madre de Dios" · h2 L174 "Noticias" · h3 L200 (×N noticias) · h2 L236 "Nuestros Servicios" · h3 L258…L525 (15 servicios) · h2 L545 "Documentos Normativos y de Gestión" · h2 L588 "Comunicados" · h3 L608 (×N) · h2 L639 "Campañas y eventos" · h3 L668 (×N) · h3 L703 "Conéctate con nosotros" · h2 L781 "LA UNAMAD EN CIFRAS:" · h2 L856 "Otros enlaces" · h3 L871…L1001 · h2 L1013 "Actividades" · h3 L1045, L1063, L1080, L1100 · h2 L1118 "Enlaces Externos" · h3 L1129…L1215 (12, seis duplicados) · h2 L1270 (modal, vacío hasta cargar) · h3 L1315, L1323 · **h4 L1434 "Himno UNAMAD"** → el reproductor de audio (región propia) usa h4 sin h2/h3 padre lógico; propuesta: h2 visualmente oculto "Reproductor del himno" o cambiar a h3 dentro de una sección.
- L1173-L1220: seis enlaces/encabezados duplicados (clonados para el bucle infinito) generan 6 h3 y 6 enlaces repetidos en el árbol de accesibilidad. Propuesta: `aria-hidden="true"` + `tabindex="-1"` en los clones (o clonar por JS con esos atributos).
- L784-838: las cinco cifras están maquetadas con `<div>`; semánticamente son una lista de pares término/valor. Propuesta: `<ul>` con `<li>` o `<dl>` (`<dt>Docentes investigadores</dt><dd>24</dd>`).
- L1124-1169: colección de enlaces externos sin estructura de lista. Propuesta: `<ul role="list">` con `<li>` por logo.
- L1270: `<h2 id="modal-titulo">` vacío en el DOM; el diálogo (L1227) usa `aria-label="Anuncios"` en lugar de `aria-labelledby="modal-titulo"`. Propuesta: `aria-labelledby="modal-titulo"` y rellenar el h2 antes de mostrar.
- L1259-1263: contador "1 / 1" del modal sin etiqueta. Propuesta: `<span class="sr-only">Anuncio</span> 1 <span class="sr-only">de</span> 1`.

**`resources/views/comunicados.blade.php`**

- Encabezados: h1 L29 "Todos los Comunicados" · h3 L122 (×N tarjetas) · h3 L160 "No se encontraron comunicados" → salto h1→h3. Propuesta: h2 en las tarjetas y en el estado vacío.
- L39-43: `<input type="text" name="buscar" placeholder="Buscar comunicados...">` sin `<label>` (placeholder como única etiqueta). Propuesta: `<label for="buscar" class="sr-only">Buscar comunicados</label>` + `id="buscar"`.
- L52-60: `<select name="categoria">` sin `<label>`. Propuesta: `<label for="categoria" class="sr-only">Categoría</label>` + `id="categoria"`.
- L93-148: rejilla de tarjetas sin lista. Propuesta: `<ul>` con `<li><article>`.

**`resources/views/comunicado.blade.php`**

- Encabezados: h1 L53 (título) · h3 L94 "Archivos adjuntos" · h3 L130 "Información del Comunicado" · h3 L161 "Acciones" → salto h1→h3. Propuesta: h2. Además, el contenido HTML del editor (L86) puede contener `<h1>` (estilos L253) → riesgo de h1 múltiple; sanitizar bajando niveles.
- L133-155: pares "Oficina:" / valor con `<span>`+`<p>`. Propuesta: `<dl><dt>Oficina</dt><dd>…</dd></dl>`.
- L21: breadcrumb muestra "Oficina" literal (no la oficina real) → miga no informativa. Propuesta: `{{ $comunicado->oficina ?? 'Comunicados' }}` enlazado a `comunicados.index`.

**`resources/views/capacitaciones-servir.blade.php`**

- Encabezados: h1 L19 · h2 L57 · h2 L77 · h3 L100 · h2 L138 · h3 L161, L208, L255 · h2 L293 · h3 L316, L363, L410 · h2 L458 · h2 L472 · h3 L495, L534, L573, L612 · h2 L678 · h3 L701 (×4) · h2 L781 · h3 L800 (×6) → jerarquía correcta.
- L32-38: breadcrumb `<nav>` sin `aria-label="Migas de pan"`, sin `<ol>` y página actual sin `aria-current="page"`.
- L80-127, L141-282, L296-437, L475-631, L681-728, L788-820: rejillas de tarjetas sin `<ul>`.
- L441-445: "Nueva Sección" como separador visual sin semántica (no es encabezado y no describe nada). Propuesta: eliminar o `<hr>` + `aria-hidden`.

**`resources/views/posgrado.blade.php`**

- Encabezados: h1 L20 · h2 L62 · h2 L82 · (partial) h3 L10 · h4 L30 · h4 L43 → correcta.
- L88-133: `<ol>` con numeración manual `<span>1.</span>` → los lectores anuncian "1. 1." Propuesta: quitar los spans y usar `list-decimal` o `<ul>`.
- L33-43: breadcrumb `<nav>` sin `aria-label`, sin `<ol>`, página actual (L42) sin `aria-current="page"`.

**`resources/views/posgrado/partials/navigation.blade.php`**

- L14: `<nav>` lateral sin `aria-label` (coexiste con la nav de migas). Propuesta: `aria-label="Navegación de la Escuela de Posgrado"`.
- L2-12: bloque de cabecera con h3 "Escuela de Posgrado" no asociado al `<nav>`. Propuesta: `<nav aria-labelledby="posgrado-nav-title">`.

**`resources/views/datasets/show.blade.php`**

- Encabezados: h1 L16 · (sin h2) · "Diccionario de datos" L101 es un `<span>` dentro de un `<button>` con aspecto de título → salto y título no semántico. Propuesta: `<h2><button …>Diccionario de datos</button></h2>` y añadir `<h2>` "Visualización" antes de L63.
- L66, L70, L74, L82: `<label>` sin `for` y `<select>` no anidado → etiquetas no asociadas (`sel-x`, `sel-y`, `sel-agg`, `sel-tipo`). Propuesta: `<label for="sel-x">…</label>`.
- L107-126: tabla sin `<caption>` y `<th>` sin `scope="col"`. Propuesta: `<caption class="sr-only">Diccionario de datos de {{ $dataset->nombre }}</caption>` y `scope="col"`.
- L42-59: ficha de metadatos con `<p>` etiqueta/valor. Propuesta: `<dl>`.
- L11-15: breadcrumb sin `aria-label`, sin lista, "Datos" sin enlace ni `aria-current`.

**`resources/views/documentos/publicos/index.blade.php`**

- Encabezados: h1 L13 · h3 L60 "Resultados de búsqueda" · h2 L74 "Explorador de Documentos" · h3 L112 (carpetas) · h3 L150 (documentos) · h3 L192 · h4 L263, L351, L377 (JS) → h3 L60 aparece antes del h2 L74 (orden invertido). Propuesta: h2 para "Resultados de búsqueda".
- L43-46: `<input type="text" id="searchInput" placeholder="Buscar documentos…">` sin `<label>`. Propuesta: `<label for="searchInput" class="sr-only">Buscar documentos, reglamentos, manuales</label>`.
- L82-198, L333-393: explorador jerárquico de carpetas construido con `<div>` anidados; no hay lista ni árbol. Propuesta: `<ul role="tree">`/`<li role="treeitem" aria-expanded>` o al menos `<ul>` anidadas con `<button aria-expanded>`.
- L167-172: metadatos "N vistas / N descargas" como `<span>` sueltos. Propuesta: `<dl>` o `<ul>`.

**`resources/views/auth/login.blade.php`**

- Encabezados: h2 L20 "Bienvenido" → **ausencia de h1**. Propuesta: `<h1>Iniciar sesión — Portal Administrativo UNAMAD</h1>`.
- L40-43 + L45-47: error de correo (`@error('email')`) no asociado al campo. Propuesta: `<p id="email-error">` y en el input `aria-describedby="email-error" aria-invalid="true"`.
- L62-64 + L76-78: ídem para contraseña (`password-error`).
- L100-104: error de reCAPTCHA sin asociación; el widget reCAPTCHA v2 depende de un iframe externo (comprobar alternativa de audio).

**`resources/views/universidad/autoridades.blade.php`**

- Encabezados: h1 L10 · h2 L55 · h3 L77 · h4 L105, L148, L181 · h2 L222 · h3 L244 · h4 L272, L330, L363 → correcta.
- L112, L155, L188, L279, L337, L370: seis tablas sin `<caption>` y `<th>` sin `scope="col"`. Propuesta: `<caption class="sr-only">Datos académicos del Dr. Joab Maquera Ramírez</caption>` (y equivalentes) + `scope="col"`.
- L72-74, L239-241: badge "RECTOR(E)"/"VICERRECTORA" superpuesto a la foto duplica el texto de L78/L245. Propuesta: `aria-hidden="true"`.

**`resources/views/universidad/historia.blade.php`**

- Encabezados: h1 L16 · h2 L67 · h3 L86, L103, L125, L139, L167 → correcta.
- L77-133: línea de tiempo con `<div>`; los años (L81-83, L98-100, L120-122) están fuera de los encabezados y no se asocian al hito. Propuesta: `<ol>` de hitos y `<h3><time datetime="2000">2000</time> – Creación de la Universidad</h3>`.

**`resources/views/universidad/politicas.blade.php`**

- Encabezados: h1 L16 · h2 L67 · h3 L78 · h4 L88, L128 · h3 L170 · h4 L186, L199, L212, L225, L239, L252 · h3 L265 → correcta.
- L94-123, L134-163: ítems de lista con `<p>` título + `<p>` descripción (OK). Sin hallazgo adicional.

**`resources/views/universidad/presentacion.blade.php`**

- Encabezados: h1 L10 · h2 L63 · h2 L85 · h3 L90, L100, L112 · h3 L138 · h3 L167 → correcta.

**`resources/views/universidad/sedes.blade.php`**

- Encabezados: h1 L16 · h2 L68 · h3 L81 · h4 L91, L118 · h3 L152 · h4 L174, L197 → correcta.
- L99-101, L109-111: "Dirección:"/"Email:" + valor en `<p>`. Propuesta: `<dl>`.
- L110: correo `info@unamad.edu.pe` como texto plano. Propuesta: `<a href="mailto:info@unamad.edu.pe">`.
- L180-192: horarios en `<div class="flex justify-between">`. Propuesta: `<table>` con `<th scope="row">` o `<dl>`.
- L204-207: "• Se requiere identificación…" viñetas tipográficas en `<p>`. Propuesta: `<ul>`.

#### Facultades y escuelas profesionales

**`resources/views/facultades/administracion.blade.php`**

- Encabezados: h1 L19 "Administración y Negocios Internacionales", h2 L60, h2 L80, h2 L104, [partial] h3 L9, h4 L28, h4 L41 → jerarquía correcta.
- L32-42: migas sin `<ol>/<li>` (secuencia de `<a>` y `<svg>` sueltos); L41 página actual como `<span>` sin `aria-current="page"`.

**`resources/views/facultades/administracion/partials/navigation.blade.php`**

- Encabezados: h3 L9, h4 L28, h4 L41 (correctos cuando el partial sigue a un h2; ver vistas donde el sidebar va antes del h2).

**`resources/views/facultades/agroindustrial.blade.php`**

- Encabezados (orden DOM, sidebar primero): h1 L10 → [partial] h3 L8 "Navegación", h3 L86 "Contacto" → h2 L68 → h3 L84 → h4 L102, L113, L124, L135 → h3 L144. Salto h1→h3 y h3 del sidebar antes del h2 principal. Propuesta: poner el sidebar después del `main` en el DOM y reordenar con `lg:order-first`, o etiquetar el nav con `aria-label` sin h3.
- L94-139: cuatro ítems (h4 + p) maquetados con `<div>` → `<ul>/<li>`; h4 usados como etiqueta de ítem.

**`resources/views/facultades/agroindustrial/partials/navigation.blade.php`**

- Encabezados: h3 L8 "Navegación", h3 L86 "Contacto" (preceden al h2 de cada vista; ver jerarquía por vista).

**`resources/views/facultades/agroindustrial/campo-ocupacional.blade.php`**

- Encabezados: h1 L10 → [partial] h3 L8, h3 L86 → h2 L76 → h3 L90, L126, L162, L198 → h3 L235 → h4 L245, L257, L269 → h3 L278. Salto h1→h3 por el sidebar; resto correcto (listas `<ul>` L96, L132, L168, L204 correctas).

**`resources/views/facultades/agroindustrial/objetivos-academicos.blade.php`**

- Encabezados: h1 L10 → [partial] h3 L8, L86 → h2 L76 → h3 L92, L104, L116. Salto h1→h3 (sidebar).
- L86-122: secuencia numerada 1-3 maquetada con `<div>` y números en `<span>` → `<ol>/<li>`.

**`resources/views/facultades/agroindustrial/perfil-profesional.blade.php`**

- Encabezados: h1 L10 → [partial] h3 L8, L86 → h2 L76 → h3 L90 → h4 L109, L122, L134, L146 → h3 L156 → h4 L175, L187, L199, L211 → h3 L221 → h4 L239, L249, L259. Salto h1→h3 (sidebar); resto correcto.
- L101-150, L167-215, L232-262: cuadrículas de ítems (h4 + p) con `<div>` → `<ul>/<li>`.

**`resources/views/facultades/agroindustrial/resena-historica.blade.php`**

- Encabezados: h1 L10 → [partial] h3 L8, L86 → h2 L76 → h3 L88, L100 → h4 L116, L130, L144, L158 → h3 L168, L208. Salto h1→h3 (sidebar).
- L107-163: 4 sectores (h4 + p) con `<div>` → `<ul>`; L178-203: lista de 3 ítems con `<div>` + icono → `<ul>/<li>`.

**`resources/views/facultades/agroindustrial/vision-mision.blade.php`**

- Encabezados: h1 L10 → [partial] h3 L8, L86 → h2 L78 "Nuestra Visión" → h4 L103, L117, L131, L145 → h2 L163 "Nuestra Misión" → h4 L188, L202, L216, L230. Saltos h1→h3 (sidebar) y h2→h4 (dos veces). Propuesta: h3 para los ítems o convertirlos en `<ul>` con `<strong>`.
- L94-150 y L179-235: cuadrículas de ítems con `<div>` → `<ul>/<li>`.

**`resources/views/facultades/biologia.blade.php`**

- Encabezados: h1 L10 → [partial] h3 L8, L86 → h2 L68 → h3 L84 → h4 L98, L109, L120, L131 → h3 L140 → h4 L151, L154, L157, L160. Salto h1→h3 (sidebar).
- L149-162: cuatro `<h4>` que solo contienen un nombre sin contenido debajo (tarjetas-etiqueta) → `<ul>/<li>`; L90-135: cuadrícula de ítems con `<div>` → `<ul>`.

**`resources/views/facultades/biologia/partials/navigation.blade.php`**

- Encabezados: h3 L8, h3 L86 (preceden al h2 de la vista).

**`resources/views/facultades/biologia/campo-ocupacional.blade.php`**

- Encabezados: h1 L10 → [partial] h3 L8, L86 → h2 L76 → h3 L90, L114, L138, L162 → h3 L187 → h4 L190, L194, L198, L202 → h3 L213. Salto h1→h3 (sidebar); listas `<ul>` correctas.

**`resources/views/facultades/biologia/objetivos-academicos.blade.php`**

- Encabezados: h1 L10 → [partial] h3 L8, L86 → h2 L76 → h3 L93, L106, L119, L132, L145 → h3 L159. Salto h1→h3 (sidebar).
- L86-151: secuencia OE1-OE5 con `<div>` → `<ol>/<li>`; L164-181: cifras (`<p>10</p><p>Semestres</p>`) mejor como `<dl>`.

**`resources/views/facultades/biologia/perfil-profesional.blade.php`**

- Encabezados: h1 L10 → [partial] h3 L8, L86 → h2 L76 → h3 L86 → h4 L103, L117, L131, L145, L159. Salto h1→h3 (sidebar).
- L94-164: cinco capacidades (h4 + p) con `<div>` → `<ul>/<li>`.

**`resources/views/facultades/biologia/resena-historica.blade.php`**

- Encabezados: h1 L10 → [partial] h3 L8, L86 → h2 L76 → h3 L88, L100 → h4 L117, L132, L147 → h3 L157, L170. Salto h1→h3 (sidebar).
- L107-152: hitos cronológicos con `<div>` → `<ol>/<li>`.

**`resources/views/facultades/biologia/vision-mision.blade.php`**

- Encabezados: h1 L10 → [partial] h3 L8, L86 → h2 L78 → h4 L100, L114, L128, L142 → h2 L160 → h4 L182, L196, L210, L224. Saltos h1→h3 (sidebar) y h2→h4 (dos veces).
- L91-147 y L173-229: cuadrículas de ítems con `<div>` → `<ul>/<li>`.

**`resources/views/facultades/contabilidad.blade.php`**

- Encabezados: h1 L19, h2 L60, L80, L100, L120, [partial] h3 L9, h4 L28, h4 L41 → correcta.
- L32-42: migas sin `<ol>/<li>`; L41 página actual `<span>` sin `aria-current`.

**`resources/views/facultades/contabilidad/partials/navigation.blade.php`**

- Encabezados: h3 L9, h4 L28, h4 L41 → correcta tras el h2 de la vista.
- L63-65: dos enlaces de correo separados por `<br>` → mejor una lista `<ul>`.

**`resources/views/facultades/derecho.blade.php`**

- Encabezados: h1 L19, h2 L60, L84, L108, [partial] h3 L9, h4 L28, h4 L41 → correcta.
- L32-42: migas sin `<ol>/<li>`; L41 `<span>` sin `aria-current`.

**`resources/views/facultades/derecho/partials/navigation.blade.php`**

- Encabezados: h3 L9, h4 L28, h4 L41 → correcta.

**`resources/views/facultades/ecoturismo.blade.php`**

- Encabezados: h1 L19, h2 L60, L80, L104, L124, [partial] h3 L9, h4 L28, h4 L41 → correcta.
- L32-42: migas sin `<ol>/<li>`; L41 `<span>` sin `aria-current`.

**`resources/views/facultades/ecoturismo/partials/navigation.blade.php`**

- Encabezados: h3 L9, h4 L28, h4 L41 → correcta.

**`resources/views/facultades/en-desarrollo.blade.php`**

- Encabezados: h1 L20, h2 L63 → correcta.
- L33-39: migas sin `<ol>/<li>`; L38 `<span>` sin `aria-current`; falta el nivel "Facultades".

**`resources/views/facultades/enfermeria.blade.php`**

- Encabezados: h1 L19, h2 L60, L80, L100, [partial] h3 L9, h4 L28, h4 L41 → correcta.
- L32-42: migas sin `<ol>/<li>`; L41 `<span>` sin `aria-current`.

**`resources/views/facultades/enfermeria/partials/navigation.blade.php`**

- Encabezados: h3 L9, h4 L28, h4 L41 → correcta.

**`resources/views/facultades/forestal.blade.php`**

- Encabezados (sidebar primero): h1 L10 → [partial] h3 L9, h4 L28, h4 L41 → h2 L68 → h3 L80, L93, L126 → h4 L143, L152, L161 → h3 L168. Salto h1→h3/h4 (sidebar antes del h2).
- L136-163: tres `<h4>` de una línea sin contenido (tarjetas-etiqueta) → `<ul>/<li>`.

**`resources/views/facultades/forestal/partials/navigation.blade.php`**

- Encabezados: h3 L9, h4 L28, h4 L41 (aparecen antes del h2 en forestal.blade.php).

**`resources/views/facultades/matematica.blade.php`**

- Encabezados (sidebar primero): h1 L10 → [partial] h3 L9, h4 L28, h4 L41 → h2 L68 → h3 L80 → h4 L92, L102, L112 → h3 L121 → h4 L135, L145, L155 → h3 L163 → h3 L214 → h4 L224. Salto h1→h3/h4 (sidebar).
- L86-116: línea de tiempo 2001/2009/2016 con `<div>` → `<ol>/<li>`; L128-158 cuadrícula → `<ul>`; L173-209: cuatro ítems `<div>` + `<span>` → `<ul>/<li>`.

**`resources/views/facultades/matematica/partials/navigation.blade.php`**

- Encabezados: h3 L9, h4 L28, h4 L41 (antes del h2 en matematica.blade.php).

**`resources/views/facultades/medicina-humana.blade.php`**

- Encabezados: h1 L10 → [partial] h3 L8, L86 → h2 L68 → h3 L84 → h4 L98, L109, L120, L131 → h3 L140 → h4 L151, L154, L157, L160. Salto h1→h3 (sidebar).
- L149-162: cuatro `<h4>` sin contenido (tarjetas-etiqueta) → `<ul>`; L90-135 cuadrícula → `<ul>`.

**`resources/views/facultades/medicina-humana/partials/navigation.blade.php`**

- Encabezados: h3 L8, h3 L86 (preceden al h2 de la vista).

**`resources/views/facultades/medicina-humana/campo-ocupacional.blade.php`**

- Encabezados: h1 L10 → [partial] h3 L8, L86 → h2 L76 → h3 L90, L114, L138 → h3 L159 → h4 L162, L169 → h3 L180. Salto h1→h3 (sidebar); listas `<ul>` correctas.

**`resources/views/facultades/medicina-humana/objetivos-academicos.blade.php`**

- Encabezados: h1 L10 → [partial] h3 L8, L86 → h2 L76 → h3 L93, L106, L119, L132, L145 → h3 L159. Salto h1→h3 (sidebar).
- L86-151: secuencia OEI.01-05 con `<div>` → `<ol>/<li>`.

**`resources/views/facultades/medicina-humana/perfil-profesional.blade.php`**

- Encabezados: h1 L10 → [partial] h3 L8, L86 → h2 L76 → h3 L87 → h3 L121 → h4 L139, L157, L175, L193. Salto h1→h3 (sidebar).
- L93-118 (CG1-CG4) y L127-199 (CE1-CE4): listas con `<div>` → `<ol>/<li>`.

**`resources/views/facultades/medicina-humana/resena-historica.blade.php`**

- Encabezados: h1 L10 → [partial] h3 L8, L86 → h2 L76 → h3 L88, L100 → h4 L117, L132, L147 → h3 L157, L170. Salto h1→h3 (sidebar).
- L107-152: hitos con `<div>` → `<ol>/<li>`.

**`resources/views/facultades/medicina-humana/vision-mision.blade.php`**

- Encabezados: h1 L10 → [partial] h3 L8, L86 → h2 L77 → h4 L99, L113, L127 → h2 L146 → h4 L168, L182, L196, L210. Saltos h1→h3 (sidebar) y h2→h4 (dos veces).
- L90-132 y L159-215: ítems con `<div>` → `<ul>/<li>`.

**`resources/views/facultades/psicologia.blade.php`**

- Encabezados: h1 L10 → [partial] h3 L8, L86 → h2 L68 → h3 L84 → h4 L98, L109, L120, L131 → h3 L140 → h4 L151, L154, L157, L160. Salto h1→h3 (sidebar).
- L149-162: cuatro `<h4>` sin contenido → `<ul>`; L90-135 cuadrícula → `<ul>`.

**`resources/views/facultades/psicologia/partials/navigation.blade.php`**

- Encabezados: h3 L8, h3 L86 (preceden al h2 de la vista).

**`resources/views/facultades/psicologia/campo-ocupacional.blade.php`**

- Encabezados: h1 L10 → [partial] h3 L8, L86 → h2 L76 → h4 L93, L102, L111, L120, L129, L138 → h3 L146 → h3 L160. Saltos h1→h3 (sidebar) y h2→h4 (sin h3 previo).
- L87-142: seis campos (h4 + p) con `<div>` → `<ul>/<li>`.
- L169-174: cifra "15.00%" en `<div>` + `<p>` → `<p>` con `<strong>` o `<dl>`.

**`resources/views/facultades/psicologia/objetivos-academicos.blade.php`**

- Encabezados: h1 L10 → [partial] h3 L8, L86 → h2 L76 → h3 L93, L106, L119, L132, L145 → h3 L159. Salto h1→h3 (sidebar).
- L86-151: secuencia OA1-OA5 con `<div>` → `<ol>/<li>`.

**`resources/views/facultades/psicologia/perfil-profesional.blade.php`**

- Encabezados: h1 L10 → [partial] h3 L8, L86 → h2 L76 → h3 L87 → h3 L121 → h4 L139, L157, L175, L193, L211. Salto h1→h3 (sidebar).
- L93-118 (CG1-CG4) y L127-217 (CE1-CE5): listas con `<div>` → `<ol>/<li>`.

**`resources/views/facultades/psicologia/resena-historica.blade.php`**

- Encabezados: h1 L10 → [partial] h3 L8, L86 → h2 L76 → h3 L88, L100 → h4 L117, L132, L147 → h3 L157, L170. Salto h1→h3 (sidebar).
- L107-152: hitos con `<div>` → `<ol>/<li>`.

**`resources/views/facultades/psicologia/vision-mision.blade.php`**

- Encabezados: h1 L10 → [partial] h3 L8, L86 → h2 L77 → h4 L99, L113, L127 → h2 L146 → h4 L168, L182, L197, L211. Saltos h1→h3 (sidebar) y h2→h4 (dos veces).
- L90-132 y L159-216: ítems con `<div>` → `<ul>/<li>`.

**`resources/views/facultades/sistemas.blade.php`**

- Encabezados (sidebar primero): h1 L10 → [partial] h3 L9, h4 L28, h4 L41 → h2 L68 → h3 L80, L93 → h4 L111, L123, L135, L147 → h3 L156 → h3 L189. Salto h1→h3/h4 (sidebar).
- L103-151: cuatro ítems (h4 + p) con `<div>` → `<ul>/<li>` (L165-184 `<ul>` correcta).

**`resources/views/facultades/sistemas/partials/navigation.blade.php`**

- Encabezados: h3 L9, h4 L28, h4 L41 (antes del h2 en sistemas.blade.php).

**`resources/views/facultades/veterinaria.blade.php`**

- Encabezados (sidebar primero): h1 L10 → [partial] h3 L9, h4 L28, h4 L41 → h2 L68 → h3 L80 → h4 L96, L104, L112 → h3 L119, L132, L192, L223. Salto h1→h3/h4 (sidebar).
- L142-187: diez ítems en dos columnas con `<div>` + viñeta `<div class="w-2 h-2">` + `<span>` → `<ul>/<li>` (una lista por columna o una sola con grid).
- L201-218: cifras `<div class="text-2xl">11</div><div>Públicas</div>` sin semántica → `<dl>` o `<p><strong>11</strong> públicas</p>`.

**`resources/views/facultades/veterinaria/partials/navigation.blade.php`**

- Encabezados: h3 L9, h4 L28, h4 L41 (antes del h2 en veterinaria.blade.php).

#### Oficinas y proyectos

**`resources/views/oficinas/academicos.blade.php`**

- Encabezados en orden DOM: h1 L11 "Oficina de Asuntos Académicos", [partial] h3 "Asuntos Académicos", h4 "Gestión Académica", h4 "Contacto", h2 L56 "Oficina de Asuntos Académicos", h3 L75 "Funciones…" → salto h1→h3 (sidebar antes del h2). h2 L56 repite literalmente el h1.
- L20: miga de pan como `<nav>` con enlaces sueltos, sin `<ol>/<li>`; L33 página actual sin `aria-current="page"`.

**`resources/views/oficinas/academicos/partials/navigation.blade.php`**

- Encabezados: h3 L9, h4 L28, h4 L41 — el partial se renderiza antes del h2 de la vista (salto h1→h3 en todas las vistas que lo incluyen).

**`resources/views/oficinas/administracion.blade.php`**

- Encabezados: h1 L10, [partial] h3 "Navegación", h3 "Contacto", h2 L68, h3 L80, h3 L220 → salto h1→h3 por el sidebar.
- L89-214: lista de 14 funciones maquetada con `<div class="flex">` + `<p>` → debe ser `<ul>/<li>` (P7).

**`resources/views/oficinas/administracion/partials/navigation.blade.php`**

- Encabezados: h3 L8 "Navegación", h3 L30 "Contacto" (antes del h2 de la vista).

**`resources/views/oficinas/admision.blade.php`**

- Encabezados: h1 L11, [partial] h3, h4, h4, h2 L55 "Página en Construcción", h3 L70, h3 L79 → salto h1→h3 por sidebar.
- L20: miga de pan sin `<ol>/<li>`; L33 sin `aria-current="page"`.

**`resources/views/oficinas/admision/partials/navigation.blade.php`**

- Encabezados: h3 L9, h4 L28, h4 L41 (antes del h2 de la vista).

**`resources/views/oficinas/ambiental.blade.php`**

- Encabezados: h1 L10, [partial] h3 "Navegación", h3 "Contacto", h2 L68, h3 L87, h3 L100, h4 L114, L125, L136, L147 → salto h1→h3 por sidebar.
- L106-151: cuatro "ámbitos" como `<div>` en grid; semánticamente lista (P7, menor).

**`resources/views/oficinas/ambiental/actividades.blade.php`**

- Encabezados: h1 L10 "Actividades", [partial] h3, h3, h2 L76 "Actividades" (duplica el h1), h3 L95, h3 L175 → salto h1→h3 por sidebar.
- L98-143: pares "Evento/Tema/Alcance/Año" maquetados con `<p>`; semánticamente es una lista de definición (`<dl><dt><dd>`). Observación.

**`resources/views/oficinas/ambiental/partials/navigation.blade.php`**

- Encabezados: h3 L8, h3 L41 (antes del h2 de la vista).

**`resources/views/oficinas/asamblea.blade.php`**

- Encabezados: h1 L16, h2 L67 (repite el h1), h3 L79, h3 L99, h4 L114, L129, L144, L159, L174, L189, L204, L219, L234, L249, L264, L279, L294, h3 L310 → jerarquía correcta, sin sidebar.
- L106-301: lista numerada de 13 funciones maquetada con `<div>` + círculo numérico → debe ser `<ol>` (P7).
- L314-342: tres "pilares" del marco legal como `<div>`; semánticamente lista.

**`resources/views/oficinas/biblioteca.blade.php`**

- Encabezados: h1 L11, [partial] h3, h4, h4, h2 L56 (repite el h1), h3 L75 → salto h1→h3 por sidebar.
- L20: miga de pan sin `<ol>/<li>`; L33 sin `aria-current="page"`.

**`resources/views/oficinas/biblioteca/partials/navigation.blade.php`**

- Encabezados: h3 L9, h4 L28, h4 L41 (antes del h2 de la vista).

**`resources/views/oficinas/bienestar.blade.php`**

- Encabezados: h1 L11, [partial] h3, h4, h4, h2 L56, h3 L100, h3 L117 → salto h1→h3 por sidebar.
- L20: miga de pan sin `<ol>/<li>`; L33 sin `aria-current="page"`.
- L65, L69, L73, L86: siglas "USS", "UBE", "USA", "DUBU" sin `<abbr title>`; "DUBU" (L86) no se expande en ningún sitio. Observación.

**`resources/views/oficinas/bienestar/actividades.blade.php`**

- Encabezados: h1 L11 "Actividades", [partial] h3, h4, h4, h2 L59 "Página en Construcción" → salto h1→h3 por sidebar.
- L20: miga de pan sin `<ol>/<li>`; L37 sin `aria-current="page"`.

**`resources/views/oficinas/bienestar/partials/navigation.blade.php`**

- Encabezados: h3 L9, h4 L35, h4 L48 (antes del h2 de la vista).

**`resources/views/oficinas/calidad.blade.php`**

- Encabezados: h1 L10, h3 L62 "Navegación", h3 L131 "Datos de contacto" (sidebar antes del contenido → salto h1→h3), h2 L176, h2 L191, **h4 L208, h4 L221 (salto h2→h4)**, h2 L239, h2 L342, h3 L352, h4 L358, h5 L369+L370, h5 L374+L375, h5 L379+L380, h4 L389/L396/L403, h2 L417, h3 L435, h4 L445/L450/L455, h3 L463, h4 L466/L471/L476, h2 L489, h3 L499, h3 L517, h4 L521/L527/L533/L539, h3 L547, h2 L596, h3 L606, h3 L615, h4 L619…L634, h3 L641, h4 L649…L679, h3 L689, h4 L692/L700.
- L369-370, L374-375, L379-380: cada unidad del organigrama se parte en DOS `<h5>` ("UNIDAD DE" / "LICENCIAMIENTO") → encabezados sin sentido por separado (también 2.4.6). Propuesta: un único `<h5>Unidad de Licenciamiento</h5>`.
- L354-383: organigrama construido con cajas y una línea `div` (L364); la relación jerárquica Director→Unidades solo es visual. Propuesta: lista anidada `<ul>` o descripción textual.
- L248-333: lista numerada de 9 funciones con `<div>` → `<ol>` (P7). L443-458, L464-479, L519-543, L549-585, L617-637, L643-683: agrupaciones que son listas maquetadas con `<div>`.
- L80-123: elementos "Próximamente" tienen aspecto de opciones de menú pero son `<div>` no interactivos dentro del `<nav>`; para AT no existen como opciones deshabilitadas. Propuesta: `<a aria-disabled="true">` o sacarlos del `<nav>`.

**`resources/views/oficinas/consejo.blade.php`**

- Encabezados: h1 L16, h2 L67 (repite el h1), h3 L79, h3 L99, h4 L114…L474 (25), h3 L486, h4 L502…L567, h3 L580 → jerarquía correcta.
- L106-481: lista numerada de 25 funciones con `<div>` → `<ol>` (P7).
- L493-571: seis áreas con `<div>` → `<ul>`. L584-612: tres tarjetas como `<div>` → `<ul>`.

**`resources/views/oficinas/cooperacion.blade.php`**

- Encabezados: h1 L10, [partial] h3 "Navegación", h3 "Contacto", h2 L68, h3 L92 → salto h1→h3 por sidebar.

**`resources/views/oficinas/cooperacion/partials/navigation.blade.php`**

- Encabezados: h3 L8, h3 L97 (antes del h2 de la vista).

**`resources/views/oficinas/cooperacion/convenios.blade.php`**

- Encabezados: h1 L11, [partial] h3, h3, h2 L90, h3 L99, h3 L136, h4 L150/L178/L192/L206/L220/L234, h3 L250, h4 L263/L289, h3 L319, h3 L376, h3 L400 → salto h1→h3 por sidebar.
- L146-244: seis modalidades con `<div>` → `<ul>`; L329-370: pasos A-C con `<div>` → `<ol type="A">` (P7).

**`resources/views/oficinas/cooperacion/directorio.blade.php`**

- Encabezados: h1 L10, [partial] h3, h3, h2 L76, h3 L101 (nombre de la persona), h4 L112, h4 L130, h4 L158, h3 L187 → salto h1→h3 por sidebar.
- L195, L199: "Horario de Atención"/"Oficina" son títulos visuales en `<p class="font-semibold">`; propuesta `<h4>` o `<dl>`.

**`resources/views/oficinas/cooperacion/estructura-organica.blade.php`**

- Encabezados: h1 L10, [partial] h3, h3, h2 L76 (repite el h1), h3 L88, h3 L108, h4 L121, h4 L131, h3 L140 → salto h1→h3 por sidebar.
- L115-135: dos niveles con `<div>` → `<ol>` (P7).

**`resources/views/oficinas/cooperacion/mision-vision.blade.php`**

- Encabezados: h1 L10, [partial] h3, h3, h2 L77 (repite el h1), h3 L87, h3 L100, h3 L115 → salto h1→h3 por sidebar.

**`resources/views/oficinas/cooperacion/personal-administrativo.blade.php`**

- Encabezados: h1 L10, [partial] h3, h3, h2 L76 (repite el h1), h3 L97, h3 L131, h3 L159 → salto h1→h3 por sidebar.
- L87-155: tarjetas de personal con `<div>` → `<ul>` de `<li>` (P7).

**`resources/views/oficinas/cooperacion/servicios.blade.php`**

- Encabezados: h1 L10, [partial] h3, h3, h2 L76 (repite el h1), h3 L97, L114, L131, L149, L166, h3 L177, h4 L185, h4 L194 → salto h1→h3 por sidebar.
- L87-173: cinco servicios con `<div>` → `<ul>` (P7).

**`resources/views/oficinas/decanatura.blade.php`**

- Encabezados: h1 L16, h2 L67 (repite el h1), h3 L79, h3 L102, h4 L117…L372 (18), h3 L384, h4 L400…L467, h3 L480 → correcta.
- L109-379: lista numerada de 18 funciones con `<div>` → `<ol>` (P7). L391-471: seis áreas → `<ul>`.

**`resources/views/oficinas/incubadora.blade.php`**

- Encabezados: h1 L11, [partial] h3, h4, h4, h2 L56 (repite el h1), h3 L78 → salto h1→h3 por sidebar.
- L20: miga de pan sin `<ol>/<li>`; L33 sin `aria-current="page"`.

**`resources/views/oficinas/incubadora/partials/navigation.blade.php`**

- Encabezados: h3 L9, h4 L28, h4 L41 (antes del h2 de la vista).

**`resources/views/oficinas/innovacion.blade.php`**

- Encabezados: h1 L11, [partial] h3, h4, h4, h2 L56 (repite el h1), h3 L78 → salto h1→h3 por sidebar.
- L20: miga de pan sin `<ol>/<li>`; L33 sin `aria-current="page"`.
- L59, L85, L89: sigla "SINACTI" sin `<abbr>` (se expande en el texto la primera vez). Observación.

**`resources/views/oficinas/innovacion/partials/navigation.blade.php`**

- Encabezados: h3 L9, h4 L28, h4 L41 (antes del h2 de la vista).

**`resources/views/oficinas/investigacion.blade.php`**

- Encabezados: h1 L11, [partial] h3, h4, h4, h2 L57 (repite el h1), h3 L77 → salto h1→h3 por sidebar.
- L20: miga de pan sin `<ol>/<li>`; L33 sin `aria-current="page"`.

**`resources/views/oficinas/investigacion/partials/navigation.blade.php`**

- Encabezados: h3 L10, h4 L30, h4 L43 (antes del h2 de la vista).

**`resources/views/oficinas/oti.blade.php`**

- Encabezados: h1 L10, [partial] h3 "Navegación", h3 "Contacto", h2 L68 (repite el h1), h3 L80, h3 L254 → salto h1→h3 por sidebar.
- L87-249: lista de 18 funciones con `<div>` + `<p>` → `<ul>` (P7).
- L103, L238: siglas "PETI", "TI" sin `<abbr>`. Observación.

**`resources/views/oficinas/oti/partials/navigation.blade.php`**

- Encabezados: h3 L8, h3 L30 (antes del h2 de la vista).

**`resources/views/oficinas/planeamiento.blade.php`**

- Encabezados: h1 L10, [partial] h3, h3, h2 L68, h3 L80, h3 L218 → salto h1→h3 por sidebar.
- L87-213: lista de 14 funciones con `<div>` + `<p>` → `<ul>` (P7).

**`resources/views/oficinas/planeamiento/partials/navigation.blade.php`**

- Encabezados: h3 L8, h3 L30 (antes del h2 de la vista).

**`resources/views/oficinas/secretaria.blade.php`**

- Encabezados: h1 L10, h2 L55 "SECRETARÍA GENERAL" (repite el h1), **h4 L75 "FUNCIONES DE LA SECRETARÍA GENERAL" → salto h2→h4** (debe ser h3).
- L82-163: lista numerada de 9 funciones con `<div>` → `<ol>` (P7).

**`resources/views/proyectos/aldea.blade.php`**

- Encabezados: h1 L19, h2 L60, h2 L84, h3 L93/L103/L113/L123, h2 L141, [partial] h3 L9, h4 L28, h4 L41 → correcta.
- L32: miga de pan sin `<ol>/<li>`; L41 página actual sin `aria-current="page"`.
- L87-127: cuatro objetivos con `<div>` → `<ul>` (P7).

**`resources/views/proyectos/aldea/partials/navigation.blade.php`**

- Encabezados: h3 L9, h4 L28, h4 L41 (después del contenido: OK).
- L44-88: cuatro objetivos como pares `<p>`; propuesta `<dl>` o `<ul>`.

**`resources/views/proyectos/bus.blade.php`**

- Encabezados: h1 L19, h2 L60, [partial] h3, h4, h4 → correcta.
- L32: miga de pan sin `<ol>/<li>`; L41 sin `aria-current="page"`.

**`resources/views/proyectos/bus/partials/navigation.blade.php`**

- Encabezados: h3 L9, h4 L28, h4 L41 → OK.

**`resources/views/proyectos/estacion.blade.php`**

- Encabezados: h1 L19, h2 L60, h2 L84, h3 L89/L94/L99/L104, [partial] h3, h4, h4 → correcta.
- L32: miga de pan sin `<ol>/<li>`; L41 sin `aria-current="page"`.
- L87-107: cuatro áreas con `<div>` → `<ul>` (P7).

**`resources/views/proyectos/estacion/partials/navigation.blade.php`**

- Encabezados: h3 L9, h4 L28, h4 L41 → OK. L44-88 pares `<p>` → `<dl>`/`<ul>`.

**`resources/views/proyectos/herbario.blade.php`**

- Encabezados: h1 L19, h2 L60, h2 L84, h2 L104, [partial] h3, h4, h4 → correcta.
- L32: miga de pan sin `<ol>/<li>`; L41 sin `aria-current="page"`.
- L69: "…ayudar en actividades como:" termina en dos puntos pero la enumeración son secciones h2 separadas; la relación no es semántica (observación).

**`resources/views/proyectos/herbario/partials/navigation.blade.php`**

- Encabezados: h3 L9, h4 L28, h4 L41 → OK. L44-88 pares `<p>` → `<dl>`/`<ul>`.

**`resources/views/proyectos/jardin.blade.php`**

- Encabezados: h1 L19, h2 L60, h2 L84, h2 L108, [partial] h3, h4, h4 → correcta.
- L32: miga de pan sin `<ol>/<li>`; L41 sin `aria-current="page"`.

**`resources/views/proyectos/jardin/partials/navigation.blade.php`**

- Encabezados: h3 L9, h4 L28, h4 L41 → OK. L44-78 pares `<p>` (Nivel/Edades/Ubicación) → `<dl>`.

**`resources/views/proyectos/km16.blade.php`**

- Encabezados: h1 L19, h2 L60, [partial] h3, h4, h4, h4 → correcta.
- L32: miga de pan sin `<ol>/<li>`; L41 sin `aria-current="page"`.

**`resources/views/proyectos/km16/partials/navigation.blade.php`**

- Encabezados: h3 L9, h4 L28, h4 L41, h4 L61 → OK. L64-98 pares `<p>` → `<dl>`.

**`resources/views/proyectos/km18.blade.php`**

- Encabezados: h1 L19, h2 L60, [partial] h3, h4, h4, h4 → correcta.
- L32: miga de pan sin `<ol>/<li>`; L41 sin `aria-current="page"`.

**`resources/views/proyectos/km18/partials/navigation.blade.php`**

- Encabezados: h3 L9, h4 L28, h4 L41, h4 L61 → OK. L64-109 pares `<p>` → `<dl>`.

**`resources/views/proyectos/panificadora.blade.php`**

- Encabezados: h1 L19, h2 L60, h2 L80, [partial] h3, h4, h4 → correcta.
- L32: miga de pan sin `<ol>/<li>`; L41 sin `aria-current="page"`.
- L83-149: seis objetivos numerados con `<div>` → `<ol>` (P7).

**`resources/views/proyectos/panificadora/partials/navigation.blade.php`**

- Encabezados: h3 L9, h4 L28, h4 L41 → OK. L44-88 pares `<p>` → `<dl>`/`<ul>`.

#### Transparencia (Artículo 11 e Indicador 55)

**`resources/views/transparencia/indicador-55.blade.php`**

- Encabezados: h1 L19 "Indicador 55", h2 L60, h2 L89, h3 L98, L108, L118, L128; sidebar (partial) h3/h4 → jerarquía correcta, sin hallazgos.

**`resources/views/transparencia/indicador-55/mv1.blade.php`**

- Encabezados: h1 L20, h2 L65 "MISIÓN", h3 L81/L91/L101, h2 L118 "VISIÓN", h3 L134-L184 (6), h2 L200, h3 L221 (dentro del `<a>`) → sin saltos. Observación: h2 en mayúsculas ("MISIÓN"/"VISIÓN") puede ser deletreado por algunos lectores; usar `uppercase` CSS.

**`resources/views/transparencia/indicador-55/mv2.blade.php`**

- Encabezados: h1 L19, h2 L64, h3 L115 (dinámico), h3 L156, L224, L292, L360, L410, L460 → correcto.
- L113, 154, 222, 290, 358, 408, 458: insignia circular "24", "23"… (`<span>`) redundante con el h3 "2024" contiguo; se lee dos veces. Propuesta: `aria-hidden="true"` en el span.

**`resources/views/transparencia/indicador-55/mv3.blade.php`**

- Encabezados: h1 L19, h2 L64, h3 L83/93/103, h3 L147, h3 L160, h4 L178; estático h3 L209/245/281/343, h4 L222/258/295/319/356; h3 L383 → correcto.
- L387-390: lista de 4 puntos maquetada con `<p><strong>• …</strong>` en vez de `<ul><li>`. Propuesta: `<ul>` real (quitar el "•" manual).
- L158, 207, 243, 279, 341: insignia de año redundante con el h3 contiguo. Propuesta: `aria-hidden="true"`.

**`resources/views/transparencia/indicador-55/mv4.blade.php`**

- Encabezados: h1 L19, h2 L64, h3 L83/93/103, h3 L147, h3 L160, h4 L178; estático h3 L209/271/333/395/457/519 con h4 L223/247/285/309/347/371/409/433/471/495/533/557; h3 L585 → correcto.
- L589-592: lista maquetada con `<p><strong>• …` en vez de `<ul><li>`.
- L158, 207, 269, 331, 393, 455, 517: insignia de año redundante con el h3. Propuesta: `aria-hidden="true"`.

**`resources/views/transparencia/indicador-55/mv5.blade.php`**

- Encabezados: h1 L19, h2 L64, h3 L83/93/103, h3 L147, h3 L160, h4 L178; estático h3 L209 con h4 L222; h3 L245/313/399/467/571 con títulos de documento en `<span>` (L259, 277, 295, 327, 345, 363, 381, 413, 431, 449, 481, 499, 517, 535, 553, 585, 603, 621) — inconsistente con 2024 (h4) pero aceptable dentro de `<a>`; h3 L643 → sin saltos.
- L647-650: lista maquetada con `<p><strong>• …` en vez de `<ul><li>`.
- L158, 207, 243, 311, 397, 465, 569: insignia de año redundante con el h3. Propuesta: `aria-hidden="true"`.

**`resources/views/transparencia/indicador-55/mv6.blade.php`**

- Encabezados: h1 L12, h2 L33, h3 L77 "Documentos Actualizados", h3 L88 (año), h4 L97; estático h3 L119/142/165/188/211/234 con h4 L127/150/173/196/219/242; h3 L259 → correcto. Observación: L188 clase `font-semibred` (errata de `font-semibold`), el h3 "2021" pierde el peso visual.
- L265-282: `<ul>` con viñetas manuales `<span>•</span>` (L267, 271, 275, 279); Tailwind preflight elimina `list-style`, con lo que WebKit deja de anunciar la lista y el lector lee "•" como texto. Propuesta: `role="list"` en el `<ul>` y `aria-hidden="true"` en los spans (o usar `list-disc`).

**`resources/views/transparencia/indicador-55/mv7.blade.php`**

- Encabezados: h1 L11, h2 L32, h3 L61 / h4 L73 (dinámico); estático h3 L95, h4 L107, L124; h3 L139, h4 L151; h3 L168; h4 L204 → correcto.
- L174-195: `<ul>` con viñetas manuales `<span>•</span>` (L176, 180, 184, 188, 192) sin `aria-hidden`; mismo caso que mv6.

**`resources/views/transparencia/indicador-55/mv8.blade.php`**

- Encabezados: h1 L11, h2 L32, h3 L61 / h4 L78 (dinámico); estático h3 L100, h4 L117; h3 L132, h4 L149; h3 L164; h4 L180, L195, L210 **dentro de `<button>`** (contenido interactivo no admite encabezados; el botón se anuncia con todo el texto); h3 L225; h4 L261. Propuesta: sustituir h4 por `<span class="font-semibold">`.
- L231-252: `<ul>` con viñetas manuales `<span>•</span>` (L233, 237, 241, 245, 249) sin `aria-hidden`.

**`resources/views/transparencia/indicador-55/mv9.blade.php`**

- Encabezados: h1 L11, h2 L32, h3 L75, h3 L86 / h4 L95 (dinámico); estático h3 L117/140/163/186/209/232 con h4 L125/148/171/194/217/240; h3 L257; h4 L293 → correcto.
- L263-284: `<ul>` con viñetas manuales `<span>•</span>` (L265, 269, 273, 277, 281) sin `aria-hidden`.

**`resources/views/transparencia/indicador-55/mv10.blade.php`**

- Encabezados: h1 L11, h2 L32, h3 L62 / h4 L85 (dinámico); estático h3 L107/156/199/242/285 con h4 L124/141/167/184/210/227/253/270/296/313; h3 L330; h4 L366 → correcto.
- L336-357: `<ul>` con viñetas manuales `<span>•</span>` (L338, 342, 346, 350, 354) sin `aria-hidden`.

**`resources/views/transparencia/indicador-55/mv11.blade.php`**

- Encabezados (rama dinámica): h1 L11, h2 L32, h3 L64 (año) → **h5 L71** (departamento) salto h3→h5; h4 L93. Propuesta: h4 en L71.
- Encabezados (rama estática): h3 L117/373/634/898/1141/1379 (años), h4 L126/382/643/907/1150/1388 y L139/395/656/920/1163/1401 "Plana Docente por Departamento Académico:", h5 departamentos (L144-347, 400-605, 661-867, 925-1115, 1168-1353, 1406-1597: 60 h5), h3 L1622, h4 L1658 → sin saltos. Observación: los h4 terminan en ":" (L139 etc.), quitar los dos puntos.
- L247-255, 274-280, 337-341, 360-365, 501-512, 531-537, 594-599, 622-626, 762-774, 793-799, 856-861, 880-883, 885-890, 1026-1033, 1128-1133, 1265-1272, 1291-1294, 1366-1371, 1494-1504, 1523-1526, 1610-1613: grupos de enlaces de resoluciones maquetados con `<div class="grid|flex">` y una etiqueta `<p>Resoluciones:</p>` no asociada. Propuesta: `<ul aria-labelledby>` con `<li>` por resolución (o `<p id>` + `role="group" aria-labelledby`).
- L1628-1649: `<ul>` con viñetas manuales `<span>•</span>` (L1630, 1634, 1638, 1642, 1646) sin `aria-hidden`.

**`resources/views/transparencia/indicador-55/mv12.blade.php`**

- Encabezados: h1 L11, h2 L32, h3 L76 / h4 L81 (dinámico); estático h3 L104 con h4 L109-252 (11), h3 L267 con h4 L272-415 (11); h3 L431; h4 L463 → correcto.
- L437-454: `<ul>` con viñetas manuales `<span>•</span>` (L439, 443, 447, 451) sin `aria-hidden`.

**`resources/views/transparencia/indicador-55/variable.blade.php`**

- Encabezados: h1 L12 → h3 L73 (año) **salto h1→h3** (no hay h2) → **h5 L80** (departamento) salto h3→h5; h4 L107, L127; h3 L150 (sección), h4 L168; h4 L204; h3 L225. Propuesta: h2 para los grupos (año/sección) y h3 para departamentos/documentos.
- L37: `{!! HtmlSanitizer::clean($variable->contenido) !!}` inyecta HTML de administración sin control de niveles de encabezado ni `alt`; observación: validar en el editor.

**`resources/views/transparencia/indicador-55/partials/navigation-dynamic.blade.php`**

- Encabezados: h3 L8 "Indicador 55", h4 L59 "Transparencia" → correcto en contexto (tras h2/h3 del contenido principal). Observación: el h3 L8 repite el nombre de la sección en vez de describir el bloque ("Navegación del Indicador 55").

**`resources/views/transparencia/articulo-11/index.blade.php`**

- Encabezados: h1 L11, h2 L30, h3 L46/68/90/112/172/194/216/238/260/282/304/326 con h4 L53/75/97/120/138/156/179/201/223/245/267/289/311/333; h3 L343; sidebar h3/h4 → correcto.
- L349-366: `<ul>` con viñetas manuales `<span>•</span>` (L351, 355, 359, 363) sin `aria-hidden`.

#### Panel de administración

**`resources/views/admin/anuncios/create.blade.php`**

- Encabezados: h1 (layout, "Crear Nuevo Anuncio" vía `@section('header')` L3 ✓), h2 L26 "Información Básica", h2 L106 "Imágenes", h2 L158 "Enlaces Relacionados", h2 L185 "Opciones de Publicación". Jerarquía correcta.
- L8 `<nav>` de migas sin `aria-label="Migas de pan"`; L14 elemento actual sin `aria-current="page"`.
- L111 y L120: dos `<label for="imagen_principal">` para el mismo input → nombre accesible duplicado/concatenado ("Imagen Principal Subir imagen"). Dejar una sola label o convertir L120 en `<span>`.
- L162, L166 y (JS) L264, L269: inputs de enlaces `enlaces[n][titulo]` / `enlaces[n][url]` sin `<label>`; el placeholder es la única etiqueta. Propuesta: `aria-label="Título del enlace N"` / `aria-label="URL del enlace N"` o labels `sr-only`.
- L41-43, L57-59, L79-81, L96-98, L130-132, L149-151, L213-215, L229-231: mensajes `@error` sin `id` + `aria-describedby` en el input y sin `aria-invalid="true"` (T5). Textos de ayuda L126, L147, L212, L228 sin `aria-describedby`.

**`resources/views/admin/anuncios/show.blade.php`**

- Encabezados: h1 layout "Panel de Administración" (sin `@section('header')`) + h1 L8 "Detalle del Anuncio" → **dos h1** (T1); h2 L36 (título del anuncio), h3 L56, h4 L67 (por enlace), h3 L91, h3 L148, h3 L174. Orden correcto salvo el doble h1.
- L96-142, L151-168 pares "Etiqueta: valor" en `<span>`/`<p>` sueltos → usar `<dl><dt><dd>`.
- L63-82 lista de enlaces como `<div>` → `<ul><li>` (T13).

**`resources/views/admin/anuncios/index.blade.php`**

- Encabezados: h1 layout "Panel de Administración" + h1 L9 "Gestión de Anuncios" (T1, doble h1) → h3 L286 (modal) → **salto h1→h3**; h4 L309, L403, L436, L474.
- L24, L33, L40 `<select>` de filtros sin `<label>` (el primer `<option>` hace de etiqueta). Propuesta: `<label for="filtro-categoria" class="sr-only">Categoría</label>` (ídem estado, destacado) o `aria-label`.
- L67 `<table>` sin `<caption>`; L70-88 `<th>` sin `scope="col"` (T6). Propuesta: `<caption class="sr-only">Listado de anuncios</caption>`.
- L320, L340, L364, L385, L412, L486, L502 `<label>` sin `for` (los inputs L324, L344, L368, L389, L416, L489, L505 sí tienen `id`) → campos sin nombre accesible. Añadir `for="titulo"`, etc.
- L335, L359, L380, L396, L424, L491, L507 contenedores de error sin `aria-live="polite"`, sin `id` referenciado por `aria-describedby`, sin `aria-invalid` (T5).
- L393 "Máx. 500 caracteres" no asociado al textarea (`aria-describedby`) y sin `maxlength`.

**`resources/views/admin/comunicado-categorias/create.blade.php`**

- Encabezados: h1 layout "Panel de Administración" + h1 L8 "Nueva Categoría de Comunicado" → doble h1 (T1). No hay más encabezados.
- L39-41, L54-56 `@error` sin `aria-describedby`/`aria-invalid` (T5); ayuda L73 sin asociar.

**`resources/views/admin/comunicado-categorias/edit.blade.php`**

- Doble h1: layout + L8 "Editar Categoría" (T1).
- L52-54, L67-69 `@error` sin asociar (T5); ayuda L86 sin `aria-describedby`.

**`resources/views/admin/comunicado-categorias/index.blade.php`**

- Doble h1: layout + L8 "Categorías de Comunicados" (T1). Sin h2/h3 para la tabla.
- L46 `<table>` sin `<caption>`; L49-64 `<th>` sin `scope="col"` (T6).

**`resources/views/admin/comunicado-categorias/show.blade.php`**

- Encabezados: doble h1 (layout + L8 "Detalle de Categoría", T1); h2 L37, h3 L55, h4 L70 (por comunicado), h3 L124, h3 L153, h3 L175. Orden correcto.
- L65-100 lista de comunicados en `<div>` → `<ul><li>` (T13).
- L127-147, L156-169 pares etiqueta/valor → `<dl>`.

**`resources/views/admin/comunicados/create.blade.php`**

- Encabezados: doble h1 (layout + L8 "Nuevo Comunicado", T1) → h4 L29, L99, L126, L153, L179 → **salto h1→h4** (no hay h2/h3). Convertir los h4 en h2.
- L78 `<label>` "Estado" sin `for` y sin control asociado (el checkbox L83 ya tiene su label L89) → etiqueta huérfana; usar `<fieldset><legend>Estado</legend>` o `<span>`.
- L50-52, L71-73, L117-119, L144-146, L170-172, L200-202, L216-218 `@error` sin `aria-describedby`/`aria-invalid` (T5). Ayudas L120, L147, L173, L203, L219 sin `aria-describedby`.
- L165 textarea reemplazado por TinyMCE (L247): la `<label for="contenido">` deja de apuntar a un control visible; TinyMCE crea un iframe con nombre "Rich Text Area" en inglés. Propuesta: `tinymce.init({ language: 'es', iframe_aria_text: 'Editor de contenido del comunicado', a11y_advanced_options: true })`.

**`resources/views/admin/comunicados/edit.blade.php`**

- Encabezados: doble h1 (layout + L8, T1) → h4 L42, L112, L154, L204, L230 → **salto h1→h4**.
- L91 `<label>` "Estado" huérfana sin `for` (igual que create L78).
- L63-65, L84-86, L145-147, L195-197, L221-223, L251-253, L267-269 `@error` sin asociar (T5).
- L127, L175 `<label>` envolviendo checkbox ✓ (correcto).
- L216 TinyMCE: misma observación que create (label/iframe en inglés).

**`resources/views/admin/comunicados/show.blade.php`**

- Encabezados: doble h1 (layout + L8, T1); h2 L36, h3 L54, h3 L83, h3 L128, h3 L162, h3 L182, h3 L189. Orden correcto.
- L46 `{!! contenido !!}` inyecta HTML del editor: puede contener `<h1>`/`<h2>` (L239-244 los estila) → riesgo de encabezados fuera de orden. Recomendar `valid_elements` en TinyMCE que degrade h1→h3.
- L87-121, L131-154, L165-175 pares etiqueta/valor → `<dl>`.

**`resources/views/admin/dashboard.blade.php`**

- Encabezados: h1 layout "Panel de Administración" (`@section('header')` L3 ✓), h2 L83 "Anuncios Recientes", h2 L131 "Acciones Rápidas". Las tarjetas de estadísticas (L10-76) no tienen encabezado; sus etiquetas "Total Usuarios", etc. son `<p>` — aceptable, pero la sección carece de h2.
- L84-126 lista de anuncios recientes en `<div>` → `<ul><li>` (T13).

**`resources/views/admin/datasets/create.blade.php`**

- Encabezados: h1 layout "Nuevo Dataset" (`@section('header')` L4) **+ h1 L16 "Nuevo Dataset"** → dos h1 con el mismo texto (T1); h2 L42, L70, L146. Eliminar L16 o pasarlo a h2.
- L28-35 resumen de errores sin `role="alert"`, sin `tabindex="-1"` + `focus()` y sin enlaces a los campos.
- L49, L57, L133, L154 `@error` sin `aria-describedby`/`aria-invalid` (T5). Ayudas L56, L147, L153, L165, L175 sin `aria-describedby`.

**`resources/views/admin/datasets/edit.blade.php`**

- Encabezados: h1 layout "Editar Dataset" + h1 L18 "Editar Dataset" (T1); h2 L66, L90, L167, L232 ✓.
- L75 `<label>` sin `for` para el input `disabled` L76 (sin `id`) → añadir `id="slug" for="slug"`.
- L177 tabla del diccionario sin `<caption>`; L180-185 `<th>` sin `scope="col"`; L185 `<th>` vacío → `<th scope="col"><span class="sr-only">Acciones</span></th>` (T6).
- L193, L197, L204, L208, L212 (y `<template>` L280, L284, L291, L295, L299) inputs/selects de cada fila sin `<label>`; el placeholder ("NOMBRE_CAMPO", "YYYYMMDD"…) es la única pista → `aria-label="Nombre del campo, fila N"`, `aria-label="Tipo, fila N"`, etc.
- L40-47 resumen de errores sin `role="alert"`/foco.
- L72, L154, L239 `@error` sin asociar (T5).

**`resources/views/admin/datasets/index.blade.php`**

- Encabezados: h1 layout "Datasets" + h1 L11 "Datasets" (T1). Sin h2 para "Resumen", "Filtros" ni la tabla.
- L53, L63 `<label>` sin `for` → los `<select name="area">` L54 y `name="estado"` L64 no tienen nombre accesible. Añadir `id`/`for`.
- L80 `<table>` sin `<caption>`; L83-88 `<th>` sin `scope="col"` (T6).

**`resources/views/admin/datasets/show.blade.php`**

- Encabezados: h1 layout "Dataset" + h1 L12 "{{ nombre }}" (T1); h2 L122, L167, L204 ✓. La sección de metadatos L75-117 carece de h2.
- L77-115 pares etiqueta/valor en `<p>` → `<dl>`.
- L126 y L207 tablas sin `<caption>`; L129-134, L210-212 `<th>` sin `scope="col"` (T6).
- L170, L174, L178, L186 `<label>` sin `for` → los `<select id="sel-x|sel-y|sel-agg|sel-tipo">` no tienen nombre accesible. Añadir `for="sel-x"`, etc.

**`resources/views/admin/documentos/index.blade.php`**

- Encabezados: doble h1 (layout + L8, T1) → h3 L97 (cada carpeta), h3 L172 (cada documento), h3 L251 (estado vacío), h3 L329/L425/L538/L631 (modales) → **salto h1→h3** en toda la vista.
- L33-54 migas de pan en `<div>` sin `<nav aria-label="Migas de pan">` ni `<ol>`; L44 elemento actual sin `aria-current="page"`.
- L83-240 explorador de carpetas/documentos como `<div>` anidados → `<ul>` + `<li>` (T13).
- Modales (JS): `<label>` sin `for` y inputs sin `id` en L350, L358, L365, L375, L386, L446, L454, L462, L469, L479, L488, L556, L564, L571, L581, L592, L649, L657, L665, L672, L682, L691 → 22 campos sin nombre accesible. Añadir `id` + `for`.
- L354, L369, L450, L458, L473, L560, L575, L653, L661, L676 contenedores de error sin `aria-live`/`aria-describedby` (T5).
- L370, L474, L576, L677 ayudas sin `aria-describedby`.

**`resources/views/admin/enlaces-normativos/create.blade.php`**

- Doble h1: layout + L8 "Nuevo Enlace Normativo" (T1). Resto de hallazgos del formulario en `_form.blade.php`.

**`resources/views/admin/enlaces-normativos/edit.blade.php`**

- Doble h1: layout + L8 "Editar Enlace Normativo" (T1).

**`resources/views/admin/enlaces-normativos/_form.blade.php`**

- L15, L32, L49 `@error` sin `aria-describedby`/`aria-invalid` (T5). Ayudas L34, L51 sin `aria-describedby` (deberían asociarse: `aria-describedby="url-help"`).

**`resources/views/admin/enlaces-normativos/index.blade.php`**

- Doble h1: layout + L8 (T1).
- L48 `<table>` sin `<caption>`; L51-55 `<th>` sin `scope="col"` (T6).

**`resources/views/admin/indicador55/edit.blade.php`**

- Encabezados: doble h1 (layout + L14 "Editar: …", T1); h2 L48, L92, L132, L147, L259, L286, L324 ✓.
- `<label>` sin `for` y controles sin `id` (sin nombre accesible): L58→L59 (Código), L63→L64 (Orden), L70→L71 (Título), L76→L77 (Título Completo), L82→L83 (Descripción), L103→L109 (Misión), L115→L121 (Visión), L290→L292 (color) y L294 (texto del color, sin label propia), L300→L301, L307→L308, L314→L315, L333→L334 (Path SVG). 13 campos.
- L138 `<textarea name="contenido">` sin ninguna `<label>` (solo el h2 L132) → `aria-labelledby` al h2 o label explícita.
- L242 `<textarea name="documentos" id="documentos-json">` sin `<label>` → `<label for="documentos-json">JSON de documentos</label>`.
- JS: labels sin `for` en L487, L494, L501, L587, L593, L606, L620, L795, L801, L807, L855, L861, L980, L986, L1010, L1017; inputs con solo placeholder en L829, L833 ("Título", "URL").
- L29-36 resumen de errores sin `role="alert"`/foco.
- L262-270 "Estado" + switch: el `<label>` envuelve el checkbox ✓, pero el texto L268 "Activo/Inactivo" es estático (servidor) y no cambia al conmutar → estado visible incoherente; usar `role="switch"` y actualizar el texto por JS.

**`resources/views/admin/indicador55/index.blade.php`**

- Encabezados: doble h1 (layout + L8, T1) → h3 L58 (cada tarjeta) y h3 L116 → **salto h1→h3**. Usar h2.
- L44-112 rejilla de 12 tarjetas en `<div>` → `<ul><li>` (T13).

**`resources/views/admin/users/index.blade.php`**

- Encabezados: doble h1 (layout + L8, T1) → h3 L228 (modal) → **salto h1→h3**; h4 L251, L399, L467; h3 L545.
- L24 `<input name="buscar">` sin `<label>` (placeholder como única etiqueta); L30, L38, L44 `<select>` sin `<label>` → añadir labels `sr-only` ("Buscar", "Rol", "Estado", "Tipo de documento").
- L85 `<table>` sin `<caption>`; L88-103 `<th>` sin `scope="col"` (T6).
- `<label>` sin `for` (inputs sí tienen `id`): L262→name, L275→apellido_paterno, L288→apellido_materno, L301→fecha_nacimiento, L314→email, L327→tipo_documento, L343→numero_documento, L364→rol, L409→password, L436→password_confirmation, L476→avatar, L566→new_password, L593→new_password_confirmation. 13 campos sin nombre accesible.
- L380 `<label>` "Estado" huérfana sin control (el checkbox L384 ya tiene label L386) → `<span>`/`<legend>`.
- Contenedores de error/éxito sin `aria-live`, `aria-describedby`, `aria-invalid` (T5): L270, L283, L296, L309, L322, L338, L358, L359, L375, L432, L459, L460, L483, L589, L616, L617.
- L417, L574 "Mínimo 8 caracteres" solo en placeholder → instrucción desaparece al escribir; mover a texto de ayuda asociado (3.3.2).

**`resources/views/admin/videos-destacados/create.blade.php`**

- Doble h1: layout + L8 "Nuevo Video Destacado" (T1) → h3 L61 de `_form` → **salto h1→h3** (no hay h2).

**`resources/views/admin/videos-destacados/edit.blade.php`**

- Doble h1: layout + L8 (T1); h2 L24 "Vista previa" (solo si `es_valido`) → h3 L61 (`_form`). Cuando el video no es válido la jerarquía es h1→h3.

**`resources/views/admin/videos-destacados/_form.blade.php`**

- L15, L31, L48, L78, L127 `@error` sin `aria-describedby`/`aria-invalid` (T5). Ayudas L17, L80, L129 sin `aria-describedby`.
- L51-56 bloque de instrucciones sobre el enlace no asociado al input L40 (`aria-describedby="url-ayuda"`).
- L61 `<h3>` "Comportamiento de la ventana emergente" sin h2 previo en create (ver create/edit).

**`resources/views/admin/videos-destacados/index.blade.php`**

- Doble h1: layout + L8 (T1).
- L48 `<table>` sin `<caption>`; L51-56 `<th>` sin `scope="col"` (T6).

### 1.3.3 Características sensoriales / 1.4.1 Uso del color (A)

_La información no puede transmitirse únicamente mediante color, forma o posición._

**Hallazgos: 54**

#### Layouts, partials y JS global

**`resources/views/admin/layouts/app.blade.php`**

- L195: indicador de notificaciones = punto rojo sin texto (y siempre visible aunque no haya notificaciones). Propuesta: `<span class="sr-only">Notificaciones nuevas</span>` renderizado solo cuando existan.

**`public/js/dataset-chart.js`**

- L40-41, L139, L157: en `pie`/`doughnut` las categorías se distinguen únicamente por color (12 colores de `PALETA`, leyenda con muestras de color y sin valores). Propuesta: mostrar etiquetas de valor/porcentaje (plugin datalabels) o la tabla alternativa; en barras/líneas un solo color → correcto.

#### Portada y vistas generales (comunicados, posgrado, datos abiertos, documentos, acceso, universidad)

**`resources/views/home.blade.php`**

- L2011-2012: los botones "Anuncio anterior/siguiente" indican estado deshabilitado solo con `opacity: 0.5`; siguen siendo operables y no exponen `disabled`/`aria-disabled`. Propuesta: `btn.disabled = true` (o `aria-disabled="true"`).
- L126-141 + L1755-1770: indicador de diapositiva activa solo por `bg-white` vs `bg-white/70`; `aria-selected` nunca se actualiza en JS (queda fijo en la primera). Propuesta: actualizar `aria-selected` en `goToSlide()` y añadir diferencia no cromática (tamaño/borde).
- L2108-2114: botones de filtro por categoría marcan el activo solo con color (`bg-[#db0455]`) sin `aria-pressed` (código sin marcado asociado en la vista: `.filtro-categoria`, `#contenedor-anuncios`, `#loading-anuncios` no existen → código muerto; si se reactiva, añadir `aria-pressed`).

**`resources/views/comunicado.blade.php`**

- L110: nombre de archivo con `truncate` (sin `title`) → se corta con puntos suspensivos y no hay forma de leer el nombre completo. Propuesta: `break-words` o `title="{{ nombre }}"`.

**`resources/views/posgrado/partials/navigation.blade.php`**

- L15-16: enlace activo distinguido solo por color/borde (clases condicionales). Propuesta: añadir `aria-current="page"` cuando `Request::is('posgrado')`.

**`resources/views/datasets/show.blade.php`**

- L86-87 + `dataset-chart.js` L138, L157: en gráficos "Circular"/"Dona" la única correspondencia sector→categoría es el color de la paleta (leyenda con muestras de color); no hay etiquetas de valor ni patrón. Propuesta: mostrar etiquetas con valor/porcentaje sobre cada sector (plugin datalabels) y la tabla de datos alternativa (ver 1.1.1).

**`resources/views/documentos/publicos/index.blade.php`**

- L112, L118, L150, L164, L263, L264, L377: `truncate`/`line-clamp-1` cortan títulos y descripciones sin alternativa (ni `title`) → contenido inaccesible al ampliar o en pantallas estrechas. Propuesta: `break-words` y permitir varias líneas.

#### Facultades y escuelas profesionales

**`resources/views/facultades/administracion/partials/navigation.blade.php`**

- L15: página actual indicada solo con fondo/borde de color (`bg-indigo-100 border-r-2`), sin texto ni atributo.

**`resources/views/facultades/agroindustrial.blade.php`**

- L158: "utiliza el menú de navegación de la izquierda" — instrucción basada en posición (en móvil el menú está arriba; no aplica a lector de pantalla). Propuesta: "utiliza el menú «Navegación» de esta página" con enlace ancla al `<nav>`.

**`resources/views/facultades/agroindustrial/partials/navigation.blade.php`**

- L13, L24, L35, L47, L58, L69: página actual comunicada solo por color (`.active` → `color:#db0455 !important` L126-132).

**`resources/views/facultades/biologia.blade.php`**

- L168: "utiliza el menú de navegación de la izquierda" — instrucción por posición.

**`resources/views/facultades/biologia/partials/navigation.blade.php`**

- L13-69: página actual solo por color (`.active`, L127-133).

**`resources/views/facultades/contabilidad/partials/navigation.blade.php`**

- L15: página actual solo por color de fondo/borde.

**`resources/views/facultades/derecho/partials/navigation.blade.php`**

- L15: página actual solo por color.

**`resources/views/facultades/ecoturismo/partials/navigation.blade.php`**

- L15: página actual solo por color.

**`resources/views/facultades/enfermeria/partials/navigation.blade.php`**

- L15: página actual solo por color.

**`resources/views/facultades/forestal/partials/navigation.blade.php`**

- L15: página actual solo por color.

**`resources/views/facultades/matematica/partials/navigation.blade.php`**

- L15: página actual solo por color.

**`resources/views/facultades/medicina-humana.blade.php`**

- L168: "utiliza el menú de navegación de la izquierda" — instrucción por posición.

**`resources/views/facultades/medicina-humana/partials/navigation.blade.php`**

- L13-69: página actual solo por color (`.active`, L130-136).

**`resources/views/facultades/psicologia.blade.php`**

- L168: "utiliza el menú de navegación de la izquierda" — instrucción por posición.

**`resources/views/facultades/psicologia/partials/navigation.blade.php`**

- L13-69: página actual solo por color (`.active`, L124-130).

**`resources/views/facultades/sistemas/partials/navigation.blade.php`**

- L15: página actual solo por color.

**`resources/views/facultades/veterinaria/partials/navigation.blade.php`**

- L15: página actual solo por color.

#### Oficinas y proyectos

**`resources/views/oficinas/academicos/partials/navigation.blade.php`**

- L15: estado activo del enlace solo por color de fondo/texto (`bg-green-100 text-green-800`); sin `aria-current`.

**`resources/views/oficinas/administracion/partials/navigation.blade.php`**

- L13: estado activo solo por clase `.active` (color) sin `aria-current`.

**`resources/views/oficinas/admision/partials/navigation.blade.php`**

- L15: estado activo solo por color (`bg-blue-100 text-blue-800`).

**`resources/views/oficinas/ambiental/partials/navigation.blade.php`**

- L13, L24: estado activo solo por clase `.active` (color).

**`resources/views/oficinas/biblioteca/partials/navigation.blade.php`**

- L15: estado activo solo por color (`bg-purple-100 text-purple-800`).

**`resources/views/oficinas/bienestar/partials/navigation.blade.php`**

- L15, L22: estado activo solo por color (`bg-orange-100 text-orange-800`).

**`resources/views/oficinas/calidad.blade.php`**

- L67: enlace activo del sidebar marcado solo por clase `.active` (fondo rosa) sin `aria-current`/`aria-selected`.

**`resources/views/oficinas/cooperacion/partials/navigation.blade.php`**

- L13, L24, L36, L47, L58, L69, L80: estado activo solo por clase `.active` (color).

**`resources/views/oficinas/incubadora/partials/navigation.blade.php`**

- L15: estado activo solo por color (`bg-cyan-100 text-cyan-800`).

**`resources/views/oficinas/innovacion/partials/navigation.blade.php`**

- L15: estado activo solo por color (`bg-violet-100 text-violet-800`).

**`resources/views/oficinas/investigacion/partials/navigation.blade.php`**

- L16: estado activo solo por color (`bg-indigo-100 text-indigo-800`).

**`resources/views/oficinas/oti/partials/navigation.blade.php`**

- L13: estado activo solo por clase `.active`.

**`resources/views/oficinas/planeamiento/partials/navigation.blade.php`**

- L13: estado activo solo por clase `.active`.

**`resources/views/proyectos/aldea/partials/navigation.blade.php`**

- L15: estado activo solo por color (`bg-purple-100 text-purple-800`).

**`resources/views/proyectos/bus/partials/navigation.blade.php`**

- L15: estado activo solo por color.

**`resources/views/proyectos/estacion/partials/navigation.blade.php`**

- L15: estado activo solo por color.

**`resources/views/proyectos/herbario/partials/navigation.blade.php`**

- L15: estado activo solo por color.

**`resources/views/proyectos/jardin/partials/navigation.blade.php`**

- L15: estado activo solo por color (`bg-lime-100 text-lime-800`).

**`resources/views/proyectos/km16/partials/navigation.blade.php`**

- L15: estado activo solo por color.

**`resources/views/proyectos/km18/partials/navigation.blade.php`**

- L15: estado activo solo por color.

**`resources/views/proyectos/panificadora/partials/navigation.blade.php`**

- L15: estado activo solo por color (`bg-yellow-100 text-yellow-800`).

#### Transparencia (Artículo 11 e Indicador 55)

**`resources/views/transparencia/indicador-55/mv10.blade.php`**

- L63-66: en la rama dinámica el estado "vigente" de una sección se comunica solo con un icono de estrella `text-green-600` (sin texto ni `<title>`); en la rama estática (L108-111) sí aparece la palabra "VIGENTE". Propuesta: añadir `<span class="sr-only">Vigente</span>` o insignia textual como en variable.blade.php L152.

**`resources/views/transparencia/indicador-55/variable.blade.php`**

- L86-91: el tipo de archivo (PDF/Excel/Resolución) se comunica solo por el color de fondo del chip (rojo/verde/azul) y el icono es el mismo; el texto es solo el título. Propuesta: sufijo "(PDF)" / "(Excel)" en el texto o `sr-only`.

**`resources/views/transparencia/indicador-55/partials/navigation-dynamic.blade.php`**

- L14-15, L45-46: el elemento activo se distingue solo por `bg-gray-100` + `border-r-2` (mismo peso de fuente). Propuesta: `aria-current="page"` + indicador no cromático (negrita/icono).

#### Panel de administración

**`resources/views/admin/anuncios/create.blade.php`**

- L32, L49, L66, L86: obligatoriedad indicada solo con `<span class="text-red-500">*</span>` sin leyenda en la página (T14). Añadir `<p>Los campos marcados con * son obligatorios</p>` y `aria-hidden="true"` en el asterisco.

**`resources/views/admin/anuncios/show.blade.php`**

- L130 estado "destacado" comunicado solo por icono amarillo (ver 1.1.1). Además `text-yellow-500` sobre blanco = 2.0:1 ✗ (1.4.11).

**`resources/views/admin/dashboard.blade.php`**

- L91-96 el estado del anuncio (publicado/borrador/archivado) se comunica SOLO con un punto de color (verde/gris/rojo) → añadir `<span class="sr-only">{{ ucfirst($anuncio->estado) }}</span>` o texto visible.

**`resources/views/admin/indicador55/index.blade.php`**

- L72 `line-clamp-2` recorta la descripción sin alternativa para leerla completa (no hay enlace "ver más" ni `title`).

### 1.4.3 Contraste mínimo (AA) y 1.4.11 Contraste no textual (AA)

_Texto normal ≥ 4.5:1, texto grande ≥ 3:1, componentes de interfaz y gráficos ≥ 3:1._

**Hallazgos: 209**

#### Layouts, partials y JS global

**`resources/views/layouts/app.blade.php`**

- L372, L425, L592, L737, L794, L835, L891: `<h5 class="… text-sm uppercase font-semibold text-gray-800 … text-[#ed145b]">` — texto 14px/600 color `#ed145b` sobre blanco = 4.34:1 → falla (texto normal). Además `text-gray-800` y `text-[#ed145b]` conviven en el mismo `class`: el color resultante depende del orden en el CSS generado. Propuesta: `text-[#db0455]` (5.05:1) y quitar `text-gray-800`.
- L253, L273, L294, L316, L336: enlace activo `text-[#ed145b] font-semibold` 16px sobre `bg-[#ed145b]/5` (≈#fef3f6) ≈ 4.2:1 → falla. Propuesta: `#db0455` o `#c0104a`.
- L388, L404, L420, L608, L624, L654, L670, L686, L702, L753: enlace activo `text-[#ed145b] text-sm font-medium` (14px/500) sobre `bg-[#ed145b]/5` → falla.
- L1455, L1467, L1535, L1633, L1702, L1735, L1765: menú móvil activo `text-[#ed145b]` 0.95rem/500 sobre `bg-[#ed145b]/5` → falla.
- L1484, L1492, L1501, L1510, L1521: `mobile-sublink` activo `text-[#ed145b]` 14px sobre `bg-[#ed145b]/10` (≈#fde8ef) ≈ 4.0:1 → falla.
- L2662 (h3 "UNAMAD"), L2724, L2778, L2821 (h4): `text-lg font-bold text-[#ed145b]` = 18px negrita (< 18.66px, NO es texto grande) sobre blanco/imagen → 4.34:1 falla por margen. Propuesta: `text-xl` (20px negrita = grande, pasa con 4.34) o `#db0455`.
- CSS L1880-1883 (`.nav-link:hover, :focus-visible, .active {color:#ed145b}` 15.2px/500), L1955 y L1975 (`.mega-dropdown-link:hover` 14px), L2021 y L2036 (`.oficinas-dropdown-link:hover`), L2112 (`.sub-dropdown-link:hover` 12.8px sobre `rgba(237,20,91,.05)`), L2168 y L2183 (`.facultades-dropdown-link:hover`), L2229, L2287, L2346 (programas/proyectos/transparencia hover sobre `#f9fafb`), L2380 (`.transparencia-sub-link:hover` 12.8px sobre `rgba(237,20,91,.1)`), L2412 (`.mobile-link:hover` sobre `#f3f4f6` ≈ 4.1:1), L2454 (`.mobile-sublink:hover` sobre `#f9fafb`), L2499 (`.mobile-sub-sublink:hover` 13px sobre `#f3f4f6`): todos los estados hover/foco/activo de los menús pasan el texto a `#ed145b` (≤4.34:1) → fallan; 1.4.3 aplica a todos los estados. Propuesta: usar `#db0455` como color de interacción global.
- L148, L150, L152: `hover:text-[#ed145b]` texto 14px sobre `bg-gray-800` (#1f2937) = 3.39:1 → falla en hover. Propuesta: `hover:text-[#ff6b9a]` (≈7:1 sobre gray-800) o `hover:underline` sin cambiar color. (L157, L164, L176, L185 son iconos: 3.39:1 cumple 1.4.11.)
- L2734, L2742, L2750, L2758, L2767, L2840: `text-sm … hover:text-[#ed145b]` sobre blanco + imagen de fondo → falla en hover.
- L2644-2648: footer con `text-gray-700`/`text-gray-600` (L2663, L2688-2716, L2862-2864) sobre `background-image: url(backgroundfooter.webp)` (estilo inline L2647) sin capa de color sólida: el contraste depende del patrón de la imagen. Propuesta: capa `bg-white/90` sobre la imagen o `background-blend-mode`.
- L3190-3196: `.shimmer-text` texto con gradiente `#db0455 → #ff1744` y `-webkit-text-fill-color: transparent`; `#ff1744` sobre blanco = 3.85:1 → falla para texto normal (se usa en `home.blade.php`). Propuesta: limitar el gradiente a tonos ≥ `#db0455` o reservar la clase a texto ≥24px.
- Observación L131: `style="color: #ed145b"` inline en los puntos de carga (3.5rem negrita = texto grande, 4.34:1 pasa); mover a clase.

**`public/js/dataset-chart.js`**

- L40-41: `#f59e0b` (2.2:1), `#84cc16` (1.9:1), `#10b981` (2.5:1), `#14b8a6` (2.5:1) sobre blanco no alcanzan 3:1 para elementos gráficos (sectores/muestras de leyenda). Propuesta: sustituir por tonos más oscuros (`#b45309`, `#4d7c0f`, `#047857`, `#0f766e`) o añadir borde oscuro a los sectores. El relleno de línea `rgba(219,4,85,0.15)` (L139) es decorativo (hay borde `#db0455`).

#### Portada y vistas generales (comunicados, posgrado, datos abiertos, documentos, acceso, universidad)

**`resources/views/home.blade.php`**

- L108-109: enlace "Admisión 2026" texto blanco `text-[10px]` sobre `#db0455` (5.07:1, pasa) pero tamaño 10 px es ilegible; ver 1.4.4.
- L704: `<p class="text-sm opacity-90">@unamad.oficial</p>` blanco al 90 % sobre `#1877F2` → ≈3.9:1, texto normal 14 px. Falla. Propuesta: quitar `opacity-90` (blanco puro = 4.24:1, sigue fallando) y usar fondo `#1565c0` o texto 18.66 px bold.
- L749-757: botón "Seguir en Facebook" blanco 16 px bold sobre `#1877F2` = 4.24:1 (texto normal). Falla. Propuesta: fondo `#0b5ed7`/`#1565c0` (≥4.5:1).
- L1002: `<p class="text-white/90 text-sm">` sobre degradado `red-500`→`red-600` (`#ef4444` → blanco 3.76:1; al 90 % ≈3.4:1). Falla. L1001 h3 18 px semibold (no "grande") blanco sobre `#ef4444` 3.76:1 también falla. Propuesta: fondo `red-700` (`#b91c1c`, 6.4:1) y texto blanco al 100 %.
- L1046, L1101: `<p class="text-sm opacity-90">` blanco sobre `bg-red-600` (`#dc2626`): blanco 4.83:1, con opacidad 0.9 ≈4.1:1. Falla. Propuesta: eliminar `opacity-90`.
- L1080-1081: tarjeta Instagram texto blanco sobre degradado `purple-600 via pink-600 to orange-500`; en el extremo naranja (`#f97316`) blanco = 2.8:1 (falla incluso como texto grande); en rosa (`#db2777`) 4.6:1 y con `opacity-90` ≈4.0:1. Propuesta: degradado más oscuro (`purple-700`→`pink-700`→`orange-700`) o capa `bg-black/20` bajo el texto.
- L1261, L1271: metadatos del modal `text-white/90 text-sm` sobre degradado `#db0455`→`#a00340`: blanco 90 % sobre `#db0455` ≈4.24:1. Falla (14 px). Propuesta: `text-white` sin transparencia (5.07:1).
- L1438: botón "Minimizar reproductor" solo icono `text-gray-400` (`#9ca3af`) sobre blanco = 2.54:1 (componente de interfaz, mínimo 3:1 según 1.4.11). Propuesta: `text-gray-600`.
- L100: texto `text-gray-600 text-[10px]` sobre blanco: contraste 7:1 pasa, pero ver tamaño en 1.4.4.

**`resources/views/comunicados.blade.php`**

- L221-223: `.pagination .page-item.disabled .page-link { color:#9ca3af }` sobre blanco = 2.54:1 (elementos inactivos están exentos, pero el número "…" sigue siendo texto). Propuesta: `#6b7280`.
- L21: breadcrumb `text-gray-500 text-sm` sobre blanco 4.86:1 (pasa, límite).

**`resources/views/capacitaciones-servir.blade.php`**

- L443: `text-gray-400` (`#9ca3af`) sobre `bg-gray-50` = 2.43:1 (texto normal 14 px). Falla. Propuesta: `text-gray-600`.
- L55-56: `text-sm text-gray-500` sobre degradado `red-50→orange-50` (`#fef2f2`) = 4.45:1. Falla por poco. Propuesta: `text-gray-600`.
- L22: `opacity-90` blanco sobre degradado rojo con foto: texto 18-20 px normal (no grande) ≈4.3:1. Propuesta: quitar `opacity-90`.

**`resources/views/posgrado.blade.php`**

- L23: `opacity-90` blanco 18-20 px sobre degradado `purple-800→blue-800` (≥8:1; pasa). Sin hallazgo.

**`resources/views/datasets/show.blade.php`**

- L44, L48, L52, L56: `text-xs text-gray-400 uppercase` (`#9ca3af`) sobre blanco = 2.54:1. Falla. Propuesta: `text-gray-600`.
- L91: `text-xs text-amber-600` (`#d97706`) sobre blanco = 3.19:1 (mensajes de aviso). Falla. Propuesta: `text-amber-800` (`#92400e`, 7.5:1).
- L108: cabecera de tabla `text-xs text-gray-500` sobre `bg-gray-50` ≈4.6:1 (pasa, límite).

**`resources/views/documentos/publicos/index.blade.php`**

- L16-18: `<p class="text-white/90">` 16 px sobre degradado `#db0455→#a00340` ≈4.24:1 (en el extremo `#db0455`). Falla. Propuesta: `text-white`.
- L113-115, L352: `text-xs text-gray-500` sobre blanco 4.86:1 (pasa, límite; a 12 px conviene `text-gray-600`).

**`resources/views/auth/login.blade.php`**

- L21: `text-pink-100` (`#fce7f3`) 16 px sobre degradado `#db0455→#a00340` = 4.31:1 en `#db0455`. Falla. Propuesta: `text-white`.
- L42, L64: `placeholder-gray-400` (`#9ca3af`) sobre blanco = 2.54:1. Falla. Propuesta: `placeholder-gray-500` (4.86:1) o mover el ejemplo a texto de ayuda.
- L46, L77, L103: `text-red-600` sobre blanco 4.83:1 (pasa); L129 `text-red-800` sobre `bg-red-50` pasa.

**`resources/views/universidad/autoridades.blade.php`**

- L11: `opacity-90` blanco 20-24 px sobre foto + capa `#db0455/80→#ed145b/70`; en la zona `#ed145b/70` el fondo efectivo es más claro que `#ed145b` (4.36:1) → texto grande pasa 3:1, pero conviene quitar la opacidad.

**`resources/views/universidad/historia.blade.php`**

- L22: `opacity-95` blanco 18 px normal sobre `#db0455/90` con foto ≈4.6:1 (límite). Propuesta: quitar opacidad.
- L190-192: cita `text-xl font-medium` (20 px, no negrita → texto normal) blanca sobre degradado hasta `#ed145b` = 4.36:1. Falla. Propuesta: `font-bold` (20 px bold ≈ grande, 3:1 OK) o fondo `#db0455→#a00340`.

**`resources/views/universidad/politicas.blade.php`**

- L22: `opacity-95` sobre `#db0455/90` (límite; quitar opacidad).
- L266-268: `text-lg opacity-95` blanco 18 px (normal) sobre degradado hasta `#ed145b` ≈4.2:1. Falla. Propuesta: `text-white` sin opacidad y degradado a `#a00340`.
- L270-285: bloques "Email"/"Teléfono" con `opacity-50` → texto blanco al 50 % sobre `bg-white/20` sobre rosa ≈2:1. Falla.

**`resources/views/universidad/presentacion.blade.php`**

- L11: `opacity-90` blanco 20-24 px sobre foto + degradado (texto grande, pasa; quitar opacidad recomendable).
- L157: `text-xs text-gray-500 italic` 12 px sobre blanco 4.86:1 (pasa, límite).

**`resources/views/universidad/sedes.blade.php`**

- L55: breadcrumb `text-sm text-[#ed145b]` 14 px sobre blanco = 4.36:1. Falla. Propuesta: `text-[#db0455]` (5.07:1).
- L174, L197: `<h4 class="text-lg font-semibold text-[#ed145b]">` 18 px semibold (no cuenta como grande: <18.66 px y peso 600) sobre blanco = 4.36:1. Falla. Propuesta: `text-[#db0455]` o `text-xl font-bold`.
- L24: `opacity-95` blanco sobre `#ed145b/90` con foto ≈4.1:1 (18 px normal). Falla. Propuesta: quitar opacidad y capa más oscura (`#a00340`).
- L81, L152: h3 grandes en `#ed145b` sobre fondos casi blancos 4.36:1 → texto grande (24 px / 20 px bold) pasa 3:1. Sin hallazgo.

#### Facultades y escuelas profesionales

**`resources/views/facultades/administracion.blade.php`**

- L22: `<p class="text-lg sm:text-xl opacity-90">` blanco al 90 % sobre degradado indigo-600/purple-500/blue-600 + `bg-black/20` + foto: ≈5.2:1 en el tramo púrpura (pasa) pero varía con la foto; verificar en zonas claras.

**`resources/views/facultades/agroindustrial.blade.php`**

- L11: `<p class="text-xl md:text-2xl opacity-90">` blanco al 90 % sobre foto con capa `#db0455/80 → #ed145b/70` (semi-transparente): ≈4.3:1 sobre #ed145b sólido y menos donde la foto es clara; a 20 px (texto normal en móvil) FALLA. L10 h1 (grande) pasa 3:1 pero al límite. Propuesta: capa opaca (`from-[#db0455] to-[#ed145b]`) o `bg-black/40` adicional y quitar `opacity-90`.

**`resources/views/facultades/agroindustrial/campo-ocupacional.blade.php`**

- L11: `<p class="text-xl md:text-2xl opacity-90">` blanco sobre foto + capa semitransparente #db0455/80→#ed145b/70: FALLA a 20 px (ver agroindustrial.blade.php L11).

**`resources/views/facultades/agroindustrial/objetivos-academicos.blade.php`**

- L102: `<span class="text-white font-bold text-sm">2</span>` sobre `bg-[#ed145b]` = 4.34:1, texto de 14 px bold (normal) → FALLA. L90 y L114 sobre `bg-[#db0455]` ≈5.0:1 pasan. Propuesta: usar `bg-[#db0455]` en los tres.
- L11: subtítulo hero blanco `opacity-90` sobre foto + capa semitransparente → FALLA a 20 px.

**`resources/views/facultades/agroindustrial/perfil-profesional.blade.php`**

- L11: subtítulo hero blanco `opacity-90` sobre foto + capa semitransparente → FALLA a 20 px.

**`resources/views/facultades/agroindustrial/resena-historica.blade.php`**

- L11: subtítulo hero blanco `opacity-90` sobre foto + capa semitransparente → FALLA a 20 px.

**`resources/views/facultades/agroindustrial/vision-mision.blade.php`**

- L11: subtítulo hero blanco `opacity-90` sobre foto + capa semitransparente → FALLA a 20 px.

**`resources/views/facultades/biologia.blade.php`**

- L11: subtítulo hero blanco `opacity-90` sobre foto + capa semitransparente → FALLA a 20 px.

**`resources/views/facultades/biologia/campo-ocupacional.blade.php`**

- L206-207: texto blanco `font-medium` (16 px, normal) sobre degradado `green-500 → emerald-600`: ≈2.3:1 sobre #22c55e y ≈3.8:1 sobre #059669 → FALLA. Propuesta: `from-green-700 to-emerald-800` o texto `text-green-900` sobre `bg-green-50`.
- L11: subtítulo hero blanco `opacity-90` sobre foto + capa semitransparente → FALLA a 20 px.

**`resources/views/facultades/biologia/objetivos-academicos.blade.php`**

- L91 "OE1" `text-white text-xs font-bold` sobre `bg-green-600` (#16a34a) ≈3.3:1 → FALLA (12 px); L104 sobre `bg-emerald-600` (#059669) ≈3.8:1 FALLA; L117 sobre `bg-teal-600` (#0d9488) ≈3.7:1 FALLA; L130 sobre `bg-cyan-600` (#0891b2) ≈3.7:1 FALLA; L143 `bg-green-700` ≈5.0:1 pasa. Propuesta: tonos 700/800.
- L166: `text-3xl font-bold text-green-600` sobre `bg-green-50` ≈3.2:1 — texto grande (30 px), pasa 3:1 al límite; L170 emerald-600 ≈3.7, L174 teal-600 ≈3.7, L178 cyan-600 ≈3.7 pasan como texto grande.
- L11: subtítulo hero blanco `opacity-90` sobre foto + capa semitransparente → FALLA a 20 px.

**`resources/views/facultades/biologia/perfil-profesional.blade.php`**

- L11: subtítulo hero blanco `opacity-90` sobre foto + capa semitransparente → FALLA a 20 px.

**`resources/views/facultades/biologia/resena-historica.blade.php`**

- L11: subtítulo hero blanco `opacity-90` sobre foto + capa semitransparente → FALLA a 20 px.

**`resources/views/facultades/biologia/vision-mision.blade.php`**

- L11: subtítulo hero blanco `opacity-90` sobre foto + capa semitransparente → FALLA a 20 px.

**`resources/views/facultades/contabilidad.blade.php`**

- L22: `<p class="opacity-90">` blanco sobre slate-600/gray-500/zinc-600 + `bg-black/20` ≈6.8:1 → pasa (verificar sobre la foto).

**`resources/views/facultades/contabilidad/partials/navigation.blade.php`**

- L52, L63, L65: `text-xs text-slate-600` (#475569) sobre `bg-slate-50` ≈7:1 → pasa (12 px; tamaño mínimo recomendable 14 px).

**`resources/views/facultades/derecho.blade.php`**

- L19-21: h1 blanco (30-48 px bold, grande) sobre degradado amber-600/yellow-500/orange-500 + `bg-black/20`: en el tramo amarillo (≈#bb8f06) ≈3.0:1 → al límite/FALLA marginal para texto grande.
- L22: `<p class="text-lg opacity-90">` blanco al 90 % sobre el mismo fondo ≈2.7:1 (18-20 px, normal) → FALLA. Propuesta: `bg-black/50` o degradado `amber-700/orange-700`.

**`resources/views/facultades/derecho/partials/navigation.blade.php`**

- L63: `text-xs text-amber-600` (#d97706) sobre `bg-amber-50` (#fffbeb) ≈3.1:1, 12 px normal → FALLA. Propuesta: `text-amber-800`.
- L30, L75: `text-xs text-amber-700` (#b45309) sobre amber-50 ≈4.9:1 → pasa al límite.

**`resources/views/facultades/ecoturismo.blade.php`**

- L22: `<p class="text-lg sm:text-xl opacity-90">` blanco sobre degradado teal-600/cyan-500/blue-500 + `bg-black/20`: en el tramo cian (≈#0592aa) ≈3.4:1 (18-20 px normal) → FALLA. L19 h1 grande ≈3.7:1 pasa. Propuesta: `bg-black/40` o `cyan-700`.

**`resources/views/facultades/ecoturismo/partials/navigation.blade.php`**

- L63: `text-xs text-teal-600` (#0d9488) sobre `bg-teal-50` ≈3.6:1, 12 px → FALLA. Propuesta: `text-teal-800`.

**`resources/views/facultades/enfermeria.blade.php`**

- L22: `<p class="opacity-90">` blanco sobre pink-600/rose-500/red-500 + `bg-black/20` ≈5.4:1 → pasa (verificar sobre la foto).

**`resources/views/facultades/enfermeria/partials/navigation.blade.php`**

- L63: `text-xs text-pink-600` (#db2777) sobre `bg-pink-50` ≈4.4:1, 12 px → FALLA marginal. Propuesta: `text-pink-800`.

**`resources/views/facultades/forestal.blade.php`**

- L11: subtítulo hero blanco `opacity-90` sobre foto + capa semitransparente → FALLA a 20 px.

**`resources/views/facultades/forestal/partials/navigation.blade.php`**

- L52: `text-xs text-green-600` (#16a34a) sobre `bg-green-50` ≈3.2:1, 12 px → FALLA. Propuesta: `text-green-800`.
- L30, L64: `text-xs text-green-700` ≈4.9:1 → pasa al límite.

**`resources/views/facultades/matematica.blade.php`**

- L89 "2001" `text-white font-bold text-sm` sobre `bg-violet-500` (#8b5cf6) ≈4.2:1 → FALLA (14 px bold); L99 sobre `bg-purple-500` (#a855f7) ≈4.0:1 → FALLA; L109 sobre `bg-indigo-500` (#6366f1) ≈4.5:1 → al límite. Propuesta: tonos 700.
- L11: subtítulo hero blanco `opacity-90` sobre foto + capa semitransparente → FALLA a 20 px.

**`resources/views/facultades/matematica/partials/navigation.blade.php`**

- L63: `text-xs text-violet-600` sobre violet-50 ≈5.5:1 → pasa; L30, L75 violet-700 → pasa (12 px, tamaño mínimo recomendable 14 px).

**`resources/views/facultades/medicina-humana.blade.php`**

- L11: subtítulo hero blanco `opacity-90` sobre foto + capa semitransparente → FALLA a 20 px.

**`resources/views/facultades/medicina-humana/campo-ocupacional.blade.php`**

- L11: subtítulo hero blanco `opacity-90` sobre foto + capa semitransparente → FALLA a 20 px.

**`resources/views/facultades/medicina-humana/objetivos-academicos.blade.php`**

- L104 "OEI.02" `text-white text-xs font-bold` sobre `bg-cyan-600` (#0891b2) ≈3.7:1 → FALLA; L117 sobre `bg-sky-600` (#0284c7) ≈4.1:1 → FALLA. L91 blue-600 ≈5.2, L130 indigo-600 ≈6.3, L143 blue-700 pasan. Propuesta: cyan-700/sky-700.
- L11: subtítulo hero blanco `opacity-90` sobre foto + capa semitransparente → FALLA a 20 px.

**`resources/views/facultades/medicina-humana/perfil-profesional.blade.php`**

- L156 "CE2" `text-white text-xs font-bold` sobre `bg-cyan-600` ≈3.7:1 → FALLA; L174 "CE3" sobre `bg-sky-600` ≈4.1:1 → FALLA. L96, L102, L108, L114, L138 (blue-600) y L192 (indigo-600) pasan.
- L11: subtítulo hero blanco `opacity-90` sobre foto + capa semitransparente → FALLA a 20 px.

**`resources/views/facultades/medicina-humana/resena-historica.blade.php`**

- L11: subtítulo hero blanco `opacity-90` sobre foto + capa semitransparente → FALLA a 20 px.

**`resources/views/facultades/medicina-humana/vision-mision.blade.php`**

- L11: subtítulo hero blanco `opacity-90` sobre foto + capa semitransparente → FALLA a 20 px.

**`resources/views/facultades/psicologia.blade.php`**

- L11: subtítulo hero blanco `opacity-90` sobre foto + capa semitransparente → FALLA a 20 px.

**`resources/views/facultades/psicologia/campo-ocupacional.blade.php`**

- L11: subtítulo hero blanco `opacity-90` sobre foto + capa semitransparente → FALLA a 20 px. (L171 `text-[#db0455]` sobre blue-50 ≈4.8:1, grande → pasa.)

**`resources/views/facultades/psicologia/objetivos-academicos.blade.php`**

- L104 "OA2" sobre `bg-cyan-600` ≈3.7:1 → FALLA; L117 "OA3" sobre `bg-sky-600` ≈4.1:1 → FALLA (12 px bold). L91, L130, L143 pasan.
- L11: subtítulo hero blanco `opacity-90` sobre foto + capa semitransparente → FALLA a 20 px.

**`resources/views/facultades/psicologia/perfil-profesional.blade.php`**

- L156 "CE2" sobre `bg-cyan-600` ≈3.7:1 → FALLA; L174 "CE3" sobre `bg-sky-600` ≈4.1:1 → FALLA (12 px bold). L96-114, L138 (blue-600), L192 (indigo-600), L210 (blue-700) pasan.
- L11: subtítulo hero blanco `opacity-90` sobre foto + capa semitransparente → FALLA a 20 px.

**`resources/views/facultades/psicologia/resena-historica.blade.php`**

- L11: subtítulo hero blanco `opacity-90` sobre foto + capa semitransparente → FALLA a 20 px.

**`resources/views/facultades/psicologia/vision-mision.blade.php`**

- L11: subtítulo hero blanco `opacity-90` sobre foto + capa semitransparente → FALLA a 20 px.

**`resources/views/facultades/sistemas.blade.php`**

- L11: subtítulo hero blanco `opacity-90` sobre foto + capa semitransparente → FALLA a 20 px.

**`resources/views/facultades/sistemas/partials/navigation.blade.php`**

- L63: `text-xs text-blue-600` sobre blue-50 ≈5.0:1 → pasa (12 px).

**`resources/views/facultades/veterinaria.blade.php`**

- L11: subtítulo hero blanco `opacity-90` sobre foto + capa semitransparente → FALLA a 20 px. (L203, L207, L211, L215 `text-orange-600` 24 px bold sobre blanco ≈3.6:1 → pasa como texto grande.)

**`resources/views/facultades/veterinaria/partials/navigation.blade.php`**

- L63: `text-xs text-emerald-600` (#059669) sobre `bg-emerald-50` ≈3.7:1, 12 px → FALLA. Propuesta: `text-emerald-800`.
- L30, L75: `text-xs text-emerald-700` ≈5.3:1 → pasa.

#### Oficinas y proyectos

**`resources/views/oficinas/academicos.blade.php`**

- L12: `<p class="text-xl opacity-90">` blanco sobre #ed145b, 20px normal → ≈3.9:1, falla (P3).

**`resources/views/oficinas/administracion.blade.php`**

- L11: `<p class="text-xl md:text-2xl opacity-90">` blanco sobre foto con velo `#db0455/80` → texto 20px normal en móvil, ≈3.9:1, falla (P3). En `md:` es 24px (grande) y pasaría sin la opacidad.

**`resources/views/oficinas/admision.blade.php`**

- L12: `text-xl opacity-90` blanco sobre #ed145b, 20px normal → falla (P3).

**`resources/views/oficinas/ambiental.blade.php`**

- L11: `text-xl md:text-2xl opacity-90` blanco sobre foto con velo → falla en móvil (P3).

**`resources/views/oficinas/ambiental/actividades.blade.php`**

- L11: `text-xl md:text-2xl opacity-90` blanco sobre foto con velo → falla en móvil (P3).

**`resources/views/oficinas/asamblea.blade.php`**

- L305-344 bloque "Marco Legal": texto blanco sobre degradado `#db0455→#ed145b`. L311 `text-lg opacity-95` (18px normal) ≈4.1:1 en el lado #ed145b → falla; L320/L329/L338 `font-semibold` 16px → 4.34:1 falla; L322/L331/L340 `text-sm opacity-90` → ≈3.9:1 falla. Las tarjetas `bg-white/20` (L315, L324, L333) aclaran el fondo y empeoran el ratio (~3.6:1). Propuesta: fondo sólido `#a00340` o tarjetas blancas con texto `text-gray-900`.
- L22: `text-lg opacity-95` sobre velo `#db0455/90→#a00340/80` con foto debajo: ≈4.6:1 en el lado claro, pasa por poco; verificar en dispositivo (observación).

**`resources/views/oficinas/biblioteca.blade.php`**

- L12: `text-xl opacity-90` blanco sobre `#ed145b` sólido (L7-8: degradado de #ed145b a #ed145b) → 4.34:1 ×0.9 ≈3.9:1, 20px normal → falla (P3).

**`resources/views/oficinas/bienestar.blade.php`**

- L12: `text-xl opacity-90` blanco sobre #ed145b, 20px normal → falla (P3).

**`resources/views/oficinas/bienestar/actividades.blade.php`**

- L12: `text-xl opacity-90` blanco sobre #ed145b, 20px normal → falla (P3).
- L67: botón `bg-orange-500` (#f97316) con texto blanco `font-medium` 16px → 2.79:1, falla. Propuesta: `bg-orange-700` (#c2410c, 4.9:1).

**`resources/views/oficinas/calidad.blade.php`**

- L11: `text-xl md:text-2xl opacity-90` blanco sobre foto con velo → falla en móvil (P3).
- L177: `text-lg opacity-90` blanco sobre degradado `#db0455→#ed145b` (18px normal) → ≈3.9:1 falla.
- L88, L99, L110, L121: etiqueta "Próximamente" `text-xs text-gray-500` (#6b7280) sobre `bg-gray-200` (#e5e7eb) → 3.84:1, falla.
- L742 (`.calidad-nav-link-disabled`): `text-gray-400` + `opacity-60` sobre blanco → ≈1.8:1 para "Estructura Orgánica", "Personal Administrativo", "Directorio", "SINC" (L87, L98, L109, L120). Falla gravemente.
- L359: `text-sm opacity-90` blanco sobre `bg-[#db0455]` → ≈4.4:1, falla por poco.
- L368-371: `text-sm font-bold` blanco sobre `bg-blue-500` (#3b82f6) → 3.68:1 falla; L373-376 sobre `bg-green-500` (#22c55e) → 2.28:1 falla; L378-381 sobre `bg-purple-500` (#a855f7) → 3.96:1 falla. Propuesta: tonos 700.
- L533: `text-green-600` (#16a34a) `font-semibold` 16px sobre blanco → 3.3:1 falla. Propuesta: `text-green-700`.
- L694: botón en hover `bg-[#ed145b]` con texto blanco 16px → 4.34:1 (estado inicial `#db0455` 5.05:1 pasa). Observación.

**`resources/views/oficinas/consejo.blade.php`**

- L575-614 bloque "Estructura Ejecutiva": L581 `text-lg opacity-95` (18px normal) blanco sobre `#db0455→#ed145b` ≈4.1:1 falla; L590/L599/L608 `font-semibold` 16px → 4.34:1 falla; L592/L601/L610 `text-sm opacity-90` → ≈3.9:1 falla; tarjetas `bg-white/20` (L585, L594, L603) empeoran el ratio.
- L22: `text-lg opacity-95` sobre velo con foto: pasa por poco (observación).

**`resources/views/oficinas/cooperacion.blade.php`**

- L11: `text-xl md:text-2xl opacity-90` blanco sobre foto con velo → falla en móvil (P3).

**`resources/views/oficinas/cooperacion/convenios.blade.php`**

- L12: `text-xl md:text-2xl opacity-90` blanco sobre foto con velo → falla en móvil (P3).
- L180 `bg-blue-500` (3.68:1), L194 `bg-green-500` (2.28:1), L208 `bg-purple-500` (3.96:1), L222 `bg-orange-500` (2.79:1), L236 `bg-indigo-500` (#6366f1, 4.47:1), L345 `bg-blue-500`, L360 `bg-green-500`: letras blancas `text-sm font-bold` (14px) sobre esos fondos → fallan. Propuesta: tonos 700.

**`resources/views/oficinas/cooperacion/directorio.blade.php`**

- L11: `text-xl md:text-2xl opacity-90` blanco sobre foto con velo → falla en móvil (P3).

**`resources/views/oficinas/cooperacion/estructura-organica.blade.php`**

- L11: `text-xl md:text-2xl opacity-90` blanco sobre foto con velo → falla en móvil (P3).
- L117 `bg-[#1e3a8a]` y L127 `bg-[#2563eb]` con texto blanco `text-xs font-bold`: 10:1 y 5.17:1, pasan (colores hex inline correctos).

**`resources/views/oficinas/cooperacion/mision-vision.blade.php`**

- L11: `text-xl md:text-2xl opacity-90` blanco sobre foto con velo → falla en móvil (P3).

**`resources/views/oficinas/cooperacion/personal-administrativo.blade.php`**

- L11: `text-xl md:text-2xl opacity-90` blanco sobre foto con velo → falla en móvil (P3).
- L137: `text-[#ed145b] font-semibold` 16px sobre fondo casi blanco → 4.3:1, falla. Propuesta: `text-[#db0455]` (5.0:1) como en L103.

**`resources/views/oficinas/cooperacion/servicios.blade.php`**

- L11: `text-xl md:text-2xl opacity-90` blanco sobre foto con velo → falla en móvil (P3).

**`resources/views/oficinas/decanatura.blade.php`**

- L475-505 bloque "Elección y Mandato": L481 `text-lg opacity-95` (18px normal) blanco sobre `#db0455→#ed145b` → ≈4.1:1 falla en el lado derecho; L492/L501 `text-sm opacity-90` → ≈3.9:1 falla; L490/L499 `text-xl font-bold` (grande) pasa; tarjetas `bg-white/20` (L485, L494) empeoran el ratio.
- L22: `text-lg opacity-95` sobre velo con foto: pasa por poco (observación).

**`resources/views/oficinas/incubadora.blade.php`**

- L12: `text-xl opacity-90` blanco sobre #ed145b, 20px normal → falla (P3).

**`resources/views/oficinas/innovacion.blade.php`**

- L12: `text-xl opacity-90` blanco sobre #ed145b, 20px normal → falla (P3).

**`resources/views/oficinas/investigacion.blade.php`**

- L12: `text-xl opacity-90` blanco sobre #ed145b, 20px normal → falla (P3).

**`resources/views/oficinas/oti.blade.php`**

- L11: `text-xl md:text-2xl opacity-90` blanco sobre foto con velo → falla en móvil (P3).

**`resources/views/oficinas/planeamiento.blade.php`**

- L11: `text-xl md:text-2xl opacity-90` blanco sobre foto con velo → falla en móvil (P3).

**`resources/views/oficinas/secretaria.blade.php`**

- L11: `text-xl md:text-2xl opacity-90` blanco sobre foto con velo → falla en móvil (P3).

**`resources/views/proyectos/aldea.blade.php`**

- L22: `text-lg opacity-90` blanco sobre `purple-600→indigo-600` + `black/20` → ≈5.5:1, pasa. L41 `text-purple-600` 14px semibold sobre gray-50 → ≈4.9:1, pasa.

**`resources/views/proyectos/bus.blade.php`**

- L22: `text-lg opacity-90` blanco sobre `blue-600→purple-600` + `black/20` → ≈4.8:1, pasa por poco (observación). L41 `text-blue-600` sobre gray-50 → 4.7:1, pasa.

**`resources/views/proyectos/estacion.blade.php`**

- L22: `text-lg opacity-90` (18px normal) blanco sobre `orange-600→yellow-600` + `black/20` → ≈4.0-4.4:1 (lado amarillo), falla. Propuesta: velo `bg-black/40` o quitar `opacity-90`.
- L41: `text-orange-600` (#ea580c) `font-semibold` 14px sobre `gray-50` → 3.4:1, falla. Propuesta: `text-orange-700`.

**`resources/views/proyectos/herbario.blade.php`**

- L22: blanco sobre `green-700→teal-600` + `black/20` → ≈5.5:1, pasa.
- L41: `text-green-600` (#16a34a) `font-semibold` 14px sobre `gray-50` → 3.2:1, falla. Propuesta: `text-green-700`.

**`resources/views/proyectos/jardin.blade.php`**

- L19-21: h1 blanco sobre `lime-600→green-500→emerald-600` + `black/20`: en la zona `green-500` ≈3.5:1 → pasa solo por ser texto grande (≥3:1); L22 `text-lg opacity-90` (18px normal) → ≈3.2:1, **falla**. Propuesta: velo `bg-black/40` o degradado con tonos 700.
- L41: `text-lime-600` (#65a30d) `font-semibold` 14px sobre `gray-50` → 3.0:1, falla. Propuesta: `text-lime-800`.

**`resources/views/proyectos/km16.blade.php`**

- L22: blanco sobre `teal-600→blue-600` + `black/20` → ≈5.4:1, pasa.
- L41: `text-teal-600` (#0d9488) `font-semibold` 14px sobre `gray-50` → 3.6:1, falla. Propuesta: `text-teal-700`.

**`resources/views/proyectos/km18.blade.php`**

- L22: blanco sobre `red-600→pink-600` + `black/20` → ≈6.8:1, pasa. L41 `text-red-600` sobre gray-50 → 4.6:1, pasa.

**`resources/views/proyectos/panificadora.blade.php`**

- L22: `text-lg opacity-90` (18px normal) blanco sobre `yellow-600→orange-500→amber-600` + `black/20` → ≈3.8-4.2:1 en la zona naranja, falla. Propuesta: velo `bg-black/40`.
- L41: `text-yellow-600` (#ca8a04) `font-semibold` 14px sobre `gray-50` → 2.8:1, falla. Propuesta: `text-yellow-800`.
- L87/L120: `text-yellow-600 font-bold text-sm` sobre `bg-yellow-100` → 2.7:1 falla; L98/L131: `text-orange-600` sobre `bg-orange-100` → 3.1:1 falla; L109/L142: `text-amber-600` sobre `bg-amber-100` → 2.9:1 falla. Propuesta: tonos 800 del texto.

**`resources/views/proyectos/panificadora/partials/navigation.blade.php`**

- L30, L52, L63, L74, L85: `text-yellow-700` (#a16207) sobre `bg-yellow-50` → 4.8:1, pasa (por poco). Observación.

#### Transparencia (Artículo 11 e Indicador 55)

**`resources/views/transparencia/indicador-55/mv2.blade.php`**

- L154: texto blanco 18 px bold sobre `bg-green-600` (3.3:1, texto normal) falla; L358 sobre `bg-orange-600` (3.6:1) falla; L458 sobre `bg-teal-600` (3.75:1) falla; L113 dinámico (`bg-{{ $color }}-600`: emerald/green/pink fallan). L222 blue-600 (5.2:1), L290 purple-600 (5.4:1), L408 red-600 (4.8:1) pasan. Propuesta: usar tono -700/-800 o texto ≥ 24 px.

**`resources/views/transparencia/indicador-55/mv3.blade.php`**

- L224 "Documento PDF" `text-xs text-emerald-600` sobre `bg-emerald-50` (3.6:1, 12 px) falla; L358 `text-teal-600` sobre `teal-50` (3.6:1) falla; L182 dinámico (`text-{{ $color }}-600` sobre `-50`: emerald/teal/cyan/green fallan). L260 blue (4.8:1) y L297/321 purple (5.1:1) pasan.
- L207: blanco 18 px bold sobre `bg-emerald-600` (3.8:1) falla; L341 sobre `bg-teal-600` (3.75:1) falla; L158 dinámico. L243 blue y L279 purple pasan.

**`resources/views/transparencia/indicador-55/mv4.blade.php`**

- "Documento PDF" `text-xs`: L225, 249 emerald-600/emerald-50 (3.6:1) fallan; L411, 435 orange-600/orange-50 (3.5:1) fallan; L535, 559 teal-600/teal-50 (3.6:1) fallan; L182 dinámico. L287/311 blue, L349/373 purple, L473/497 red (4.6:1) pasan.
- Insignias de año blanco 18 px bold: L207 `bg-emerald-600` (3.8:1), L393 `bg-orange-600` (3.6:1), L517 `bg-teal-600` (3.75:1) fallan; L158 dinámico. L269 blue, L331 purple, L455 red pasan.

**`resources/views/transparencia/indicador-55/mv5.blade.php`**

- L224 "Documento PDF" `text-xs text-emerald-600` sobre `emerald-50` (3.6:1) falla; L182 dinámico.
- Insignias blanco 18 px bold: L207 `bg-emerald-600` (3.8:1), L397 `bg-orange-600` (3.6:1), L569 `bg-teal-600` (3.75:1) fallan; L158 dinámico. L243 blue, L311 purple, L465 red pasan.

**`resources/views/transparencia/indicador-55/mv6.blade.php`**

- L14: `text-green-100` (#dcfce7) 20 px sobre `bg-green-600` ≈ 3.0:1, texto normal → falla. Propuesta: `text-white`.
- L134, 157, 180, 203, 226, 249: enlaces "Ver documento →" `text-green-600` 16 px medium sobre blanco (3.3:1) fallan; L106 dinámico `text-{{ $color }}-600` (green/teal/cyan fallan). Propuesta: `text-green-700`/`-800`.

**`resources/views/transparencia/indicador-55/mv8.blade.php`**

- L13: `text-sky-100` 20 px sobre `bg-sky-600` ≈ 3.6:1 falla.
- L87 (dinámico), L124: enlace `text-sky-600` sobre blanco (4.1:1, 16 px) falla. L156 blue-600 pasa.

**`resources/views/transparencia/indicador-55/mv9.blade.php`**

- L13: `text-teal-100` 20 px sobre `bg-teal-600` ≈ 3.4:1 falla.
- L132, 155, 178, 201, 224, 247: enlaces `text-teal-600` sobre blanco (3.75:1) fallan; L104 dinámico `text-{{ $color }}-600` (teal/cyan/emerald fallan).

**`resources/views/transparencia/indicador-55/mv10.blade.php`**

- L13: `text-orange-100` 20 px sobre `bg-orange-600` ≈ 3.1:1 falla.
- L94 (dinámico), 131, 148, 260, 277: enlaces `text-orange-600` sobre blanco (3.6:1) fallan; L174, 191, 303, 320 `text-amber-600` (3.2:1) fallan; L217, 234 `text-yellow-600` (2.9:1) fallan. Propuesta: tonos -700/-800.

**`resources/views/transparencia/indicador-55/mv11.blade.php`**

- L1428-1430: contenedor con `opacity-60` y texto `text-gray-500` 14 px "(Sin enlaces disponibles)" → contraste efectivo ≈ 2.3:1 sobre blanco, falla. Propuesta: quitar `opacity-60` y usar `text-gray-600`.

**`resources/views/transparencia/indicador-55/mv12.blade.php`**

- L13: `text-teal-100` 20 px sobre `bg-teal-600` ≈ 3.4:1 falla.

**`resources/views/transparencia/indicador-55/variable.blade.php`**

- L14: `opacity-90` sobre degradado dinámico `from-{{ gradiente_from }}`; con colores -600 claros (green/teal/orange/amber) el subtítulo de 20 px queda por debajo de 4.5:1. Propuesta: quitar la opacidad.
- L136, 213: enlaces `text-{{ color }}-600` sobre blanco; con green/teal/orange/amber/sky/cyan (3.2–4.1:1) fallan.

**`resources/views/transparencia/articulo-11/index.blade.php`**

- L13: `text-blue-100` (#dbeafe) 20 px normal sobre `bg-blue-600` ≈ 4.3:1 → falla por poco (el tramo indigo-600 del degradado pasa). Propuesta: `text-white` o `text-blue-50`.
- L334: `text-gray-400` 14 px "Enlace no disponible temporalmente" sobre blanco 2.5:1 falla; L337 "No disponible" `text-gray-400` 16 px medium 2.5:1 falla. Propuesta: `text-gray-600`. (L333 `text-gray-500` 4.8:1 pasa.)

#### Panel de administración

**`resources/views/admin/anuncios/create.blade.php`**

- L32, L49, L66, L86 asterisco `text-red-500` sobre blanco = 3.8:1 (texto normal 14px) ✗. Usar `text-red-600` (4.8:1).
- L11, L13 separadores "/" en `text-gray-400` (2.5:1) — decorativos; marcar `aria-hidden="true"`.

**`resources/views/admin/anuncios/index.blade.php`**

- L386, L413 "(Opcional)" y L393 "Máx. 500 caracteres" en `text-gray-400` sobre `bg-gray-50/100` ≈ 2.3:1 ✗ (texto 12-14px). Usar `text-gray-600`.
- L193 estrella `text-yellow-500` sobre blanco 2.0:1 ✗ (1.4.11 componente informativo).
- L455, L631, L768, L786 icono blanco sobre `from-green-500 to-green-600` = 2.2–3.2:1 ✗ (1.4.11). L663, L793 icono blanco sobre `red-500→600` = 3.8–4.8:1, límite.
- L289 `text-gray-100` sobre `#db0455` = 4.6:1 ✓ (se anota como marginal).

**`resources/views/admin/dashboard.blade.php`**

- L15, L32 `text-green-500` sobre blanco (14px) = 2.2:1 ✗ → `text-green-700`.
- L49 `text-purple-500` = 4.1:1 ✗ → `text-purple-700`.
- L65 `text-orange-500` = 2.9:1 ✗ → `text-orange-700`.
- L102 `text-yellow-600` (#d08700 ≈ 2.6:1) ✗ → `text-yellow-800`.

**`resources/views/admin/datasets/edit.blade.php`**

- L56, L174 (span), L238 `text-amber-600` sobre blanco/gray-50 (12-14px) = 3.2:1 ✗ → `text-amber-800`.
- L224 "Sin campos definidos…" en `text-gray-400` = 2.5:1 ✗ → `text-gray-600`.

**`resources/views/admin/datasets/index.blade.php`**

- L96 slug en `text-gray-400` (12px) = 2.5:1 ✗; L117 "Sin datos" `text-gray-400` ✗ → `text-gray-600`.
- L38 `text-amber-600` y L42 `text-green-600` en `text-2xl font-bold` = texto grande → 3.2:1 ✓ (pasa por ser grande).

**`resources/views/admin/datasets/show.blade.php`**

- L140, L219 números de fila en `text-gray-400` = 2.5:1 ✗ → `text-gray-500`.
- L195 aviso del gráfico `text-amber-600 text-xs` = 3.2:1 ✗ → `text-amber-800`.
- L113 "—" en `text-gray-400` decorativo, aceptable.

**`resources/views/admin/documentos/index.blade.php`**

- L110, L191 metadatos en `text-xs text-gray-400` = 2.5:1 ✗ → `text-gray-600`.
- L119, L125, L138, L149, L206, L213, L219, L230 iconos de acción `text-gray-400` sobre blanco = 2.5:1 ✗ (1.4.11 requiere 3:1) → `text-gray-600`.
- L13, L404, L610: texto blanco sobre `from-blue-500 to-blue-600` (14px) = 3.8–5.3:1, la mitad izquierda falla ✗ → usar `blue-600→700`.
- L332, L541 `text-blue-100` sobre `blue-500` ≈ 3.1:1 ✗ (texto 14px) → `text-white`.
- L428, L634 `text-pink-100` sobre `#db0455` ≈ 4.3:1 ✗ (14px) → `text-white`.
- L91 `style="color: {{ $carpeta->color }}"` sobre `{{ color }}20`: color inline elegido por el usuario (p. ej. #F59E0B amarillo) sin garantía de contraste; como solo pinta un emoji el impacto es bajo, pero documentarlo.

**`resources/views/admin/indicador55/edit.blade.php`**

- L480, L580, L785, L823, L845, L973 iconos eliminar `text-gray-400` = 2.5:1 ✗ (1.4.11).
- L755 `text-indigo-700` sobre `indigo-50` ✓; L754, L999 blanco sobre `indigo-600`/`purple-600` ✓ (grande/negrita).

**`resources/views/admin/indicador55/index.blade.php`**

- L48 `bg-gradient-to-r from-{{ $variable->gradiente_from }} to-{{ … }}`: clases construidas dinámicamente que Tailwind v4 no genera si no aparecen literalmente en el código → si la clase no existe no hay fondo y el texto blanco L57-58 queda **blanco sobre blanco**. Usar `style="background: linear-gradient(...)"` con `color_primario` o un `safelist`.
- L57 `text-white/80` (12px) sobre el gradiente: con `blue-600` ≈ 4.0:1 ✗; con tonos 500 falla más. Usar `text-white`.
- L63 badge "Activo/Inactivo" ✓ (verde-100/800, rojo-100/800).

**`resources/views/admin/users/index.blade.php`**

- L477 "(Opcional)" `text-gray-400` sobre gray-50 ≈ 2.3:1 ✗.
- L422, L449, L579, L606 iconos ojo `text-gray-400` sobre blanco = 2.5:1 ✗ (1.4.11).
- L538 cabecera del modal de contraseña y L627 botón "Cambiar Contraseña": texto blanco (18px medium / 14px) sobre `from-green-500 to-green-600` = 2.2–3.2:1 ✗ → usar `green-700→800`.
- L231 `text-gray-100` sobre `#db0455` = 4.6:1 (marginal ✓).

### 1.4.4 Cambio de tamaño del texto / 1.4.10 Reflujo (AA)

_El texto debe poder ampliarse al 200 % y el contenido reorganizarse a 320 px sin pérdida ni desplazamiento horizontal._

**Hallazgos: 29**

#### Layouts, partials y JS global

**`resources/views/layouts/app.blade.php`**

- L2430-2437: `.mobile-submenu { overflow:hidden } .mobile-submenu.show { max-height: 500px }`: el submenú "Oficinas" (L1550-1626: 3 títulos + 12 elementos + sub-submenús de hasta 300px) y "Facultades" (L1652-1696: 4 títulos + 13 enlaces ≈ 640px) superan 500px ya al 100 % de zoom → los últimos enlaces (Psicología, Planeamiento…) quedan cortados e inalcanzables; empeora con texto ampliado. Propuesta: `max-height: none` al abrir (o `grid-template-rows: 0fr → 1fr`) y `overflow: visible`.
- L2477-2482: `.mobile-sub-submenu.show { max-height: 300px; overflow:hidden }`: mismo patrón; los 5 enlaces de L1574-1583 rozan el límite al ampliar el texto al 200 %.
- L2510-2516 y L2601-2611: `.hero-slider { height: 70vh / 50vh / 40vh; overflow:hidden }` altura fija con recorte: el texto superpuesto del slider (marcado en `home.blade.php`) se corta al ampliar 200 % o en pantallas bajas. Propuesta: `min-height` en vez de `height`, o `overflow: visible` para el bloque de texto.
- Observación L56: `html { overflow-x: hidden }` oculta cualquier desbordamiento horizontal en vez de corregirlo; a 320px puede esconder contenido que sobresalga (verificar en cada vista).
- Observación L2582-2588: `.indicator` de 12×12px (objetivo táctil muy pequeño; WCAG 2.2 2.5.8 exige 24px).
- Observación L3062-3064: `#mobileInfo` con `whitespace-nowrap` (código muerto, siempre `hidden`).

**`resources/views/admin/layouts/app.blade.php`**

- L14 `flex h-screen` + L16 `<aside class="w-64 …">` sin `fixed`/`hidden` en móvil; el botón L177 (`lg:hidden`) solo añade `-translate-x-full` (L237), por lo que en <1024px el sidebar de 256px sigue ocupando espacio y, al "ocultarlo", deja un hueco vacío; a 320px el contenido dispone de 64px → falla reflow. Propuesta: `fixed inset-y-0 left-0 z-40 -translate-x-full lg:static lg:translate-x-0` + overlay.

#### Portada y vistas generales (comunicados, posgrado, datos abiertos, documentos, acceso, universidad)

**`resources/views/home.blade.php`**

- L100, L108: `text-[10px]` (10 px) para el lema y el botón "Admisión 2026" en móvil; tamaño mínimo recomendado 12–14 px. Propuesta: `text-xs` (12 px) como mínimo y `sm:text-sm`.
- L1548-1571 (`detectZoomAndAdapt`): con zoom ≥150 % o viewport ≤800 px se oculta el reproductor completo (progreso, volumen, silencio, tiempos) y solo queda el botón flotante → pérdida de funcionalidad al ampliar (1.4.4 exige que el contenido siga siendo funcional al 200 %). Propuesta: no ocultar controles por zoom; apilarlos en columna o mostrar un botón "Expandir" que devuelva todos los controles.
- L1520: `whitespace-nowrap` en `#mobileInfo` (texto corto; riesgo bajo). Propuesta: eliminar `nowrap`.

#### Facultades y escuelas profesionales

**`resources/views/facultades/administracion.blade.php`**

- L7: hero con altura fija `h-64 sm:h-80 lg:h-96` + `overflow-hidden`; al ampliar texto/zoom 200 % en 320 px el h1 (L19) y el párrafo (L22) pueden quedar recortados. Propuesta: `min-h-*` sin `overflow-hidden` o `py-*`.

**`resources/views/facultades/contabilidad.blade.php`**

- L7: hero de altura fija con `overflow-hidden`; riesgo de recorte del h1/p al ampliar.

**`resources/views/facultades/derecho.blade.php`**

- L7: hero de altura fija con `overflow-hidden`; riesgo de recorte al ampliar.

**`resources/views/facultades/ecoturismo.blade.php`**

- L7: hero de altura fija con `overflow-hidden`; riesgo de recorte al ampliar.

**`resources/views/facultades/en-desarrollo.blade.php`**

- L7: hero de altura fija con `overflow-hidden`; riesgo de recorte al ampliar.

**`resources/views/facultades/enfermeria.blade.php`**

- L7: hero de altura fija con `overflow-hidden`; riesgo de recorte al ampliar.

#### Oficinas y proyectos

**`resources/views/oficinas/calidad.blade.php`**

- L52-54: `<div class="flex">` + sidebar `w-80 flex-shrink-0` sin punto de corte responsive → a 320px el sidebar ocupa toda la pantalla y el contenido (`flex-1`) queda comprimido; obliga a scroll horizontal (1.4.10 Reflow). Propuesta: `flex-col lg:flex-row` y `w-full lg:w-80`.

#### Transparencia (Artículo 11 e Indicador 55)

**`resources/views/transparencia/indicador-55.blade.php`**

- L7: hero con altura fija `h-64 sm:h-80 lg:h-96 overflow-hidden`; al ampliar texto al 200 % el h1 + párrafo (L19-24) pueden recortarse. Propuesta: `min-h-*` en lugar de `h-*` o eliminar `overflow-hidden`.

**`resources/views/transparencia/indicador-55/mv1.blade.php`**

- L7: hero con altura fija + `overflow-hidden` (mismo caso que indicador-55.blade.php L7).

**`resources/views/transparencia/indicador-55/mv2.blade.php`**

- L7: hero con altura fija + `overflow-hidden`.

**`resources/views/transparencia/indicador-55/mv3.blade.php`**

- L7: hero con altura fija + `overflow-hidden`.

**`resources/views/transparencia/indicador-55/mv4.blade.php`**

- L7: hero con altura fija + `overflow-hidden`.

**`resources/views/transparencia/indicador-55/mv5.blade.php`**

- L7: hero con altura fija + `overflow-hidden`.

**`resources/views/transparencia/indicador-55/partials/navigation-dynamic.blade.php`**

- L50: `<span class="truncate">` (overflow hidden + nowrap + ellipsis) recorta títulos largos ("MV2: Reglamento y Calendario de Admisión") sin `title` ni forma de leer el texto completo; empeora al ampliar texto/espaciado. Propuesta: permitir salto de línea (`break-words`) o `title="{{ titulo_completo }}"`.

**`resources/views/transparencia/indicador-55/partials/navigation.blade.php`**

- L29, 38, 47, 56, 65, 74, 83, 92, 101, 110, 119, 128: `<span class="truncate">` recorta los nombres de los MV.

#### Panel de administración

**`resources/views/admin/comunicados/edit.blade.php`**

- L170 etiqueta de extensión con `text-[10px]` (10 px) → demasiado pequeño; usar mínimo `text-xs` (12 px).
- L169, L173 `truncate` en el nombre del archivo sin `title`/texto completo alternativo → el nombre puede quedar cortado al ampliar. Añadir `title` o permitir `break-all`.

**`resources/views/admin/datasets/show.blade.php`**

- L196 contenedor del gráfico con `style="height: 420px;"` fijo: al ampliar 200 % el canvas y sus etiquetas no se reflowan (Chart.js sí es responsive, pero el alto fijo reduce la legibilidad). Usar `aspect-video`/`min-h`.
- L141, L148, L212, L221 `whitespace-nowrap` en celdas con texto libre (descripción/valores largos) → desplazamiento horizontal dentro del contenedor (aceptable por `overflow-x-auto`), se anota.

### 2.1.1 Teclado (A) y 2.1.2 Sin trampas de foco (A)

_Toda la funcionalidad debe ser operable mediante teclado._

**Hallazgos: 19**

#### Layouts, partials y JS global

**`resources/views/layouts/app.blade.php`**

- L1935-1936, L2001-2002, L2148-2149, L2209-2210, L2267-2268, L2326-2327 (CSS) + L2985-2990 (JS): los mega-menús se abren por `:hover` y `:focus-within`; con teclado, al tabular a cada botón (L220, L350, L715, L981, L1123, L1295) el panel se abre solo y el foco recorre TODOS sus enlaces (≈60 paradas de Tab antes de salir del header). Los botones no tienen manejador de clic: Enter/Espacio no abre ni cierra nada; solo Escape (L2992-2999) que hace `blur()` y deja el foco en `<body>`. Propuesta: patrón "disclosure": clic/Enter alterna una clase `.is-open` + `aria-expanded`, no abrir por `focus-within`, Escape cierra y devuelve el foco al botón, Tab fuera del panel lo cierra.
- L429 y L516: `<button class="has-subdropdown" aria-expanded="false">` (Vicerrectorados): el sub-panel se muestra solo por `:hover`/`:focus-within` (L2074-2081); sin manejador de clic ni de teclado, `aria-expanded` nunca cambia (el JS L2971-3000 solo sincroniza `:scope > .group`), y `cursor: default` (L1899) niega que sea un botón. Propuesta: mismo patrón disclosure con `aria-controls` al sub-panel.
- L2874-2887: menú móvil: enfoca el primer enlace al abrir (correcto) pero no se cierra con Escape y, con `body.style.overflow = 'hidden'` (L2880), el foco puede salir con Tab al contenido de fondo bloqueado. Propuesta: `keydown` Escape → `toggleMobileMenu()` (que ya devuelve el foco al botón), y `inert` en `<main>`/`<footer>` mientras esté abierto.
- Observación L2056-2072: el sub-panel (`left:100%`) se posiciona dentro de `.mega-dropdown-menu-oficinas` que tiene `overflow-x: hidden` (L1997) → verificar que no se recorte al abrirlo con teclado.

**`resources/views/admin/layouts/app.blade.php`**

- L200-222 y L246-253: menú de perfil se cierra solo con clic fuera; sin Escape ni devolución de foco; los elementos ocultos por `hidden` no reciben foco (correcto) pero no hay forma de cerrarlo con teclado sin tabular fuera. Propuesta: `keydown` Escape → cerrar y enfocar el botón.

**`resources/views/partials/video-destacado.blade.php`**

- L149-155: cierre con Escape, botón y clic en fondo — correcto. Sin hallazgos.

**`public/js/dataset-chart.js`**

- L150-164: los valores solo se consultan por tooltip de Chart.js al pasar el ratón (no hay acceso por teclado a cada dato). Se resuelve con la tabla alternativa de 1.1.1.
- L167-169: `change` en los selects solo redibuja el gráfico (no navega ni cambia de contexto) → cumple 3.2.2.

#### Portada y vistas generales (comunicados, posgrado, datos abiertos, documentos, acceso, universidad)

**`resources/views/home.blade.php`**

- L1446 + L1661-1666: barra de progreso `<div role="slider" tabindex="0" onclick="seekAudio(event)">` solo responde a clic; sin `keydown` (Flechas/Inicio/Fin) → inaccesible por teclado. Propuesta: sustituir por `<input type="range">` (como el volumen, L1483) o añadir manejo de teclas que ajuste `audio.currentTime`.
- L1936-1938, L1957: `<img>` con `onclick` para abrir el lightbox (imagen principal y adicionales) sin `tabindex`, `role="button"` ni teclado. Propuesta: envolver cada imagen en `<button type="button" aria-label="Ampliar imagen N">`.
- L1737-1738: pausa del carrusel solo con ratón (`mouseenter/leave`). Propuesta: añadir `focusin`/`focusout` y botón de pausa (ver 1.2.x).
- L1438 + L1543, L1672-1675: `togglePlayerSize()` referencia `#audioPlayerMini`, que no existe en el DOM → al pulsar "Minimizar" se oculta el reproductor y el script lanza error; no hay forma de restaurarlo (teclado ni ratón). Propuesta: crear el elemento mini o eliminar el botón.

**`resources/views/comunicados.blade.php`**

- L95-96: `<article onclick="window.location.href=...">` sin `tabindex`, `role`, ni manejador de teclado, y **sin ningún `<a>` en la tarjeta** → los comunicados no se pueden abrir con teclado ni son detectables como enlaces por lectores de pantalla (bloqueante). Propuesta: `<h3><a href="{{ route('comunicado.ver', $comunicado) }}">{{ titulo }}</a></h3>` y mantener el `onclick` solo como mejora.

**`resources/views/documentos/publicos/index.blade.php`**

- L87-88 (y JS L340-341): cabecera de carpeta `<div onclick="toggleFolder(id)">` sin `tabindex`, `role`, ni `keydown`; el "botón" expandir (L91) es un `<div>`. **Las carpetas no pueden abrirse con teclado** (bloqueante). Propuesta: `<button type="button" class="…" aria-expanded="false" aria-controls="folder-{{ id }}">`.

#### Oficinas y proyectos

**`resources/views/oficinas/calidad.blade.php`**

- L67: el único "tab" operable es un `<a href="#inicio">`; el script (L758-789) cancela la navegación y alterna clases. Las secciones L339, L414, L486, L593 (`hidden`) no son alcanzables por ningún medio (ni ratón ni teclado) porque sus "tabs" son `div` no enfocables. Contenido inaccesible para todos; si es intencional, no debería enviarse en el HTML.

#### Panel de administración

**`resources/views/admin/documentos/index.blade.php`**

- L115, L204 barra de acciones con `opacity-0 group-hover:opacity-100`: los botones Subir/Bajar/Editar/Eliminar solo aparecen con el ratón; al tabular por ellos siguen **invisibles** (no hay `group-focus-within:opacity-100` ni `focus:opacity-100`). Un usuario de teclado no ve dónde está el foco. Propuesta: añadir `group-focus-within:opacity-100 focus-within:opacity-100` o mostrar siempre.
- L1038 Escape cierra el modal ✓, pero el foco no vuelve al botón que lo abrió (L291-309 solo enfoca el primer input; sin trampa de foco).

**`resources/views/admin/indicador55/edit.blade.php`**

- L480, L580, L785, L823, L845, L973 botones eliminar con `opacity-0 group-hover:opacity-100` → invisibles al recibir foco por teclado (sin `focus:opacity-100`/`group-focus-within`). Mismo patrón que documentos/index.
- L904 al cambiar el año se re-renderiza todo el contenedor (`innerHTML`) → el foco se pierde tras `onchange`. Igual en L472, L566, L732, L961 tras cada edición.

### 2.4.1 Evitar bloques (A)

_Landmarks y mecanismo para saltar bloques repetidos; secciones identificables._

**Hallazgos: 112**

#### Layouts, partials y JS global

**`resources/views/layouts/app.blade.php`**

- L3069-3078: `<div id="audioPlayerMini" role="region" aria-label="Reproductor de audio minimizado">` con clases `hidden lg:hidden` (siempre oculto) y `onclick="togglePlayerSize()"` — la función no existe en el layout: landmark y botón muertos. Propuesta: eliminar o mover a `home.blade.php` junto al reproductor real.
- L2980-2983: `aria-controls` de cada mega-menú apunta a un id aleatorio (`ddmenu-xxxxxx`) y los paneles no tienen nombre accesible. Propuesta: ids estáticos (`menu-universidad`, …) y `role="group" aria-labelledby` al título del panel.

**`resources/views/admin/layouts/app.blade.php`**

- L16: la navegación principal del panel está dentro de `<aside>` (`complementary`); L35 `<nav>` sin nombre. Propuesta: `<nav aria-label="Menú de administración">` como landmark principal del sidebar.
- L228: `<main>` sin `id` y sin enlace "saltar al contenido" (el admin no hereda el del layout público). Propuesta: `<a href="#contenido-admin" class="sr-only focus:not-sr-only …">` + `id="contenido-admin"`.

#### Portada y vistas generales (comunicados, posgrado, datos abiertos, documentos, acceso, universidad)

**`resources/views/home.blade.php`**

- L769-777, L843-851: dos `<section class="wave-section">` puramente decorativas (SVG de ola) sin encabezado. Propuesta: `<div aria-hidden="true">`.
- L8: `<section class="hero-slider">` sin `aria-roledescription="carousel"` ni `aria-label`. Propuesta: `<section aria-roledescription="carrusel" aria-label="Banners destacados">`.

**`resources/views/datasets/show.blade.php`**

- L7: la vista define `<main id="contenido-principal">` dentro del `<main id="contenido-principal">` del layout (`layouts/app.blade.php` L2639) → dos landmarks `main` anidados e `id` duplicado (el enlace "saltar al contenido" apunta a un id ambiguo). Propuesta: cambiar a `<div class="bg-gray-50 min-h-screen">`.
- L63-95: sección del gráfico sin encabezado.

#### Facultades y escuelas profesionales

**`resources/views/facultades/administracion.blade.php`**

- L32: `<nav>` de migas sin `aria-label` (coexiste con el nav principal del layout y el nav del sidebar). Propuesta: `aria-label="Migas de pan"`.

**`resources/views/facultades/administracion/partials/navigation.blade.php`**

- L13: `<nav>` sin `aria-label`. Propuesta: `aria-label="Navegación de la carrera"`.

**`resources/views/facultades/agroindustrial.blade.php`**

- L19: `<nav aria-label="Breadcrumb">` — etiqueta en inglés. Propuesta: `aria-label="Migas de pan"`.

**`resources/views/facultades/agroindustrial/partials/navigation.blade.php`**

- L12: `<nav>` sin `aria-label`/`aria-labelledby` (el h3 L8 no tiene `id`). Propuesta: `<h3 id="nav-carrera">` + `aria-labelledby="nav-carrera"`.

**`resources/views/facultades/agroindustrial/campo-ocupacional.blade.php`**

- L19: `aria-label="Breadcrumb"` en inglés → "Migas de pan".

**`resources/views/facultades/agroindustrial/objetivos-academicos.blade.php`**

- L19: `aria-label="Breadcrumb"` en inglés.

**`resources/views/facultades/agroindustrial/perfil-profesional.blade.php`**

- L19: `aria-label="Breadcrumb"` en inglés.

**`resources/views/facultades/agroindustrial/resena-historica.blade.php`**

- L19: `aria-label="Breadcrumb"` en inglés.

**`resources/views/facultades/agroindustrial/vision-mision.blade.php`**

- L19: `aria-label="Breadcrumb"` en inglés.

**`resources/views/facultades/biologia.blade.php`**

- L19: `aria-label="Breadcrumb"` en inglés.

**`resources/views/facultades/biologia/partials/navigation.blade.php`**

- L12: `<nav>` sin `aria-label`/`aria-labelledby`.

**`resources/views/facultades/biologia/campo-ocupacional.blade.php`**

- L19: `aria-label="Breadcrumb"` en inglés.

**`resources/views/facultades/biologia/objetivos-academicos.blade.php`**

- L19: `aria-label="Breadcrumb"` en inglés.

**`resources/views/facultades/biologia/perfil-profesional.blade.php`**

- L19: `aria-label="Breadcrumb"` en inglés.

**`resources/views/facultades/biologia/resena-historica.blade.php`**

- L19: `aria-label="Breadcrumb"` en inglés.

**`resources/views/facultades/biologia/vision-mision.blade.php`**

- L19: `aria-label="Breadcrumb"` en inglés.

**`resources/views/facultades/contabilidad.blade.php`**

- L32: `<nav>` sin `aria-label`.

**`resources/views/facultades/contabilidad/partials/navigation.blade.php`**

- L13: `<nav>` sin `aria-label`.

**`resources/views/facultades/derecho.blade.php`**

- L32: `<nav>` sin `aria-label`.

**`resources/views/facultades/derecho/partials/navigation.blade.php`**

- L13: `<nav>` sin `aria-label`.

**`resources/views/facultades/ecoturismo.blade.php`**

- L32: `<nav>` sin `aria-label`.

**`resources/views/facultades/ecoturismo/partials/navigation.blade.php`**

- L13: `<nav>` sin `aria-label`.

**`resources/views/facultades/en-desarrollo.blade.php`**

- L33: `<nav>` sin `aria-label`.

**`resources/views/facultades/enfermeria.blade.php`**

- L32: `<nav>` sin `aria-label`.

**`resources/views/facultades/enfermeria/partials/navigation.blade.php`**

- L13: `<nav>` sin `aria-label`.

**`resources/views/facultades/forestal.blade.php`**

- L19: `aria-label="Breadcrumb"` en inglés.

**`resources/views/facultades/forestal/partials/navigation.blade.php`**

- L13: `<nav>` sin `aria-label`.

**`resources/views/facultades/matematica.blade.php`**

- L19: `aria-label="Breadcrumb"` en inglés.

**`resources/views/facultades/matematica/partials/navigation.blade.php`**

- L13: `<nav>` sin `aria-label`.

**`resources/views/facultades/medicina-humana.blade.php`**

- L19: `aria-label="Breadcrumb"` en inglés.

**`resources/views/facultades/medicina-humana/partials/navigation.blade.php`**

- L12: `<nav>` sin `aria-label`/`aria-labelledby`.

**`resources/views/facultades/medicina-humana/campo-ocupacional.blade.php`**

- L19: `aria-label="Breadcrumb"` en inglés.

**`resources/views/facultades/medicina-humana/objetivos-academicos.blade.php`**

- L19: `aria-label="Breadcrumb"` en inglés.

**`resources/views/facultades/medicina-humana/perfil-profesional.blade.php`**

- L19: `aria-label="Breadcrumb"` en inglés.

**`resources/views/facultades/medicina-humana/resena-historica.blade.php`**

- L19: `aria-label="Breadcrumb"` en inglés.

**`resources/views/facultades/medicina-humana/vision-mision.blade.php`**

- L19: `aria-label="Breadcrumb"` en inglés.

**`resources/views/facultades/psicologia.blade.php`**

- L19: `aria-label="Breadcrumb"` en inglés.

**`resources/views/facultades/psicologia/partials/navigation.blade.php`**

- L12: `<nav>` sin `aria-label`/`aria-labelledby`.

**`resources/views/facultades/psicologia/campo-ocupacional.blade.php`**

- L19: `aria-label="Breadcrumb"` en inglés.

**`resources/views/facultades/psicologia/objetivos-academicos.blade.php`**

- L19: `aria-label="Breadcrumb"` en inglés.

**`resources/views/facultades/psicologia/perfil-profesional.blade.php`**

- L19: `aria-label="Breadcrumb"` en inglés.

**`resources/views/facultades/psicologia/resena-historica.blade.php`**

- L19: `aria-label="Breadcrumb"` en inglés.

**`resources/views/facultades/psicologia/vision-mision.blade.php`**

- L19: `aria-label="Breadcrumb"` en inglés.

**`resources/views/facultades/sistemas.blade.php`**

- L19: `aria-label="Breadcrumb"` en inglés.

**`resources/views/facultades/sistemas/partials/navigation.blade.php`**

- L13: `<nav>` sin `aria-label`.

**`resources/views/facultades/veterinaria.blade.php`**

- L19: `aria-label="Breadcrumb"` en inglés.

**`resources/views/facultades/veterinaria/partials/navigation.blade.php`**

- L13: `<nav>` sin `aria-label`.

#### Oficinas y proyectos

**`resources/views/oficinas/academicos.blade.php`**

- L20: `<nav>` de miga de pan sin `aria-label="Miga de pan"` (P5).

**`resources/views/oficinas/academicos/partials/navigation.blade.php`**

- L13: `<nav>` sin `aria-label="Navegación de la oficina"` (P5).

**`resources/views/oficinas/administracion/partials/navigation.blade.php`**

- L12: `<nav>` sin `aria-label` (P5).

**`resources/views/oficinas/admision.blade.php`**

- L20: `<nav>` sin `aria-label` (P5).

**`resources/views/oficinas/admision/partials/navigation.blade.php`**

- L13: `<nav>` sin `aria-label` (P5).

**`resources/views/oficinas/ambiental/partials/navigation.blade.php`**

- L12: `<nav>` sin `aria-label` (P5).

**`resources/views/oficinas/asamblea.blade.php`**

- L46: "Oficinas" en la miga de pan es `<span>` sin enlace a `/oficinas` (incoherente con otras vistas). Observación.

**`resources/views/oficinas/biblioteca.blade.php`**

- L20: `<nav>` sin `aria-label` (P5).

**`resources/views/oficinas/biblioteca/partials/navigation.blade.php`**

- L13: `<nav>` sin `aria-label` (P5).

**`resources/views/oficinas/bienestar.blade.php`**

- L20: `<nav>` sin `aria-label` (P5).

**`resources/views/oficinas/bienestar/actividades.blade.php`**

- L20: `<nav>` sin `aria-label` (P5).

**`resources/views/oficinas/bienestar/partials/navigation.blade.php`**

- L13: `<nav>` sin `aria-label` (P5).

**`resources/views/oficinas/consejo.blade.php`**

- L46: "Oficinas" en miga de pan es `<span>` sin enlace. Observación.

**`resources/views/oficinas/cooperacion/partials/navigation.blade.php`**

- L12: `<nav>` sin `aria-label` (P5).

**`resources/views/oficinas/decanatura.blade.php`**

- L46: "Oficinas" en miga de pan sin enlace. Observación.

**`resources/views/oficinas/incubadora.blade.php`**

- L20: `<nav>` sin `aria-label` (P5).

**`resources/views/oficinas/incubadora/partials/navigation.blade.php`**

- L13: `<nav>` sin `aria-label` (P5).

**`resources/views/oficinas/innovacion.blade.php`**

- L20: `<nav>` sin `aria-label` (P5).

**`resources/views/oficinas/innovacion/partials/navigation.blade.php`**

- L13: `<nav>` sin `aria-label` (P5).

**`resources/views/oficinas/investigacion.blade.php`**

- L20: `<nav>` sin `aria-label` (P5).

**`resources/views/oficinas/investigacion/partials/navigation.blade.php`**

- L14: `<nav>` sin `aria-label` (P5).

**`resources/views/oficinas/oti/partials/navigation.blade.php`**

- L12: `<nav>` sin `aria-label` (P5).

**`resources/views/oficinas/planeamiento/partials/navigation.blade.php`**

- L12: `<nav>` sin `aria-label` (P5).

**`resources/views/proyectos/aldea.blade.php`**

- L32: `<nav>` de miga de pan sin `aria-label="Miga de pan"` (P5).

**`resources/views/proyectos/aldea/partials/navigation.blade.php`**

- L13: `<nav>` sin `aria-label` (P5).

**`resources/views/proyectos/bus.blade.php`**

- L32: `<nav>` sin `aria-label` (P5).

**`resources/views/proyectos/bus/partials/navigation.blade.php`**

- L13: `<nav>` sin `aria-label` (P5).

**`resources/views/proyectos/estacion.blade.php`**

- L32: `<nav>` sin `aria-label` (P5).

**`resources/views/proyectos/estacion/partials/navigation.blade.php`**

- L13: `<nav>` sin `aria-label` (P5).

**`resources/views/proyectos/herbario.blade.php`**

- L32: `<nav>` sin `aria-label` (P5).

**`resources/views/proyectos/herbario/partials/navigation.blade.php`**

- L13: `<nav>` sin `aria-label` (P5).

**`resources/views/proyectos/jardin.blade.php`**

- L32: `<nav>` sin `aria-label` (P5).

**`resources/views/proyectos/jardin/partials/navigation.blade.php`**

- L13: `<nav>` sin `aria-label` (P5).

**`resources/views/proyectos/km16.blade.php`**

- L32: `<nav>` sin `aria-label` (P5).

**`resources/views/proyectos/km16/partials/navigation.blade.php`**

- L13: `<nav>` sin `aria-label` (P5).

**`resources/views/proyectos/km18.blade.php`**

- L32: `<nav>` sin `aria-label` (P5).

**`resources/views/proyectos/km18/partials/navigation.blade.php`**

- L13: `<nav>` sin `aria-label` (P5).

**`resources/views/proyectos/panificadora.blade.php`**

- L32: `<nav>` sin `aria-label` (P5).

**`resources/views/proyectos/panificadora/partials/navigation.blade.php`**

- L13: `<nav>` sin `aria-label` (P5).

#### Transparencia (Artículo 11 e Indicador 55)

**`resources/views/transparencia/indicador-55.blade.php`**

- L32: `<nav>` de migas sin `aria-label="Ruta de navegación"`; coexiste con el `<nav>` del sidebar y el del layout sin nombres diferenciados.

**`resources/views/transparencia/indicador-55/mv1.blade.php`**

- L33: `<nav>` de migas sin `aria-label`.

**`resources/views/transparencia/indicador-55/mv2.blade.php`**

- L32: `<nav>` de migas sin `aria-label`.

**`resources/views/transparencia/indicador-55/mv3.blade.php`**

- L32: `<nav>` de migas sin `aria-label`.

**`resources/views/transparencia/indicador-55/mv4.blade.php`**

- L32: `<nav>` de migas sin `aria-label`.

**`resources/views/transparencia/indicador-55/mv5.blade.php`**

- L32: `<nav>` de migas sin `aria-label`.

**`resources/views/transparencia/indicador-55/mv6.blade.php`**

- L21: `<nav>` de migas sin `aria-label`; L23, L25 separadores "›" como texto (se leen "mayor que") sin `aria-hidden="true"`.

**`resources/views/transparencia/indicador-55/mv7.blade.php`**

- L20: `<nav>` de migas sin `aria-label`; L22, L24 separadores "›" sin `aria-hidden`.

**`resources/views/transparencia/indicador-55/mv8.blade.php`**

- L20: `<nav>` de migas sin `aria-label`; L22, L24 separadores "›" sin `aria-hidden`.

**`resources/views/transparencia/indicador-55/mv9.blade.php`**

- L20: `<nav>` de migas sin `aria-label`; L22, L24 separadores "›" sin `aria-hidden`.

**`resources/views/transparencia/indicador-55/mv10.blade.php`**

- L20: `<nav>` de migas sin `aria-label`; L22, L24 separadores "›" sin `aria-hidden`.

**`resources/views/transparencia/indicador-55/mv11.blade.php`**

- L20: `<nav>` de migas sin `aria-label`; L22, L24 separadores "›" sin `aria-hidden`.

**`resources/views/transparencia/indicador-55/mv12.blade.php`**

- L20: `<nav>` de migas sin `aria-label`; L22, L24 separadores "›" sin `aria-hidden`.

**`resources/views/transparencia/indicador-55/variable.blade.php`**

- L22: `<nav>` de migas sin `aria-label`; L24, L26 separadores `&rsaquo;` sin `aria-hidden`.

**`resources/views/transparencia/indicador-55/partials/navigation-dynamic.blade.php`**

- L13: `<nav>` sin `aria-label` (p. ej. `aria-labelledby` del h3 L8) y coexiste con la nav de migas y la global.

**`resources/views/transparencia/indicador-55/partials/navigation.blade.php`**

- L13: `<nav>` sin `aria-label`.

**`resources/views/transparencia/articulo-11/index.blade.php`**

- L20: `<nav>` de migas sin `aria-label`; L22 separador "›" sin `aria-hidden`.

**`resources/views/transparencia/articulo-11/partials/navigation.blade.php`**

- L9: `<nav>` sin `aria-label` / `aria-labelledby` (podría apuntar al h3 L2 "Navegación Artículo 11").

### 2.4.2 Título de página (A)

_Cada página debe tener un título que describa su tema o propósito._

**Hallazgos: 79**

#### Layouts, partials y JS global

**`resources/views/layouts/app.blade.php`**

- L44: título por defecto correcto; cada vista debe definir `@section('title')` (se audita por vista). Sin hallazgos en el layout.

**`resources/views/admin/layouts/app.blade.php`**

- L8: título por defecto "Dashboard - Panel Administrativo UNAMAD" en inglés y genérico. Propuesta: "Panel de administración – UNAMAD".

#### Portada y vistas generales (comunicados, posgrado, datos abiertos, documentos, acceso, universidad)

**`resources/views/comunicados.blade.php`**

- Falta `@section('title')` → título genérico del layout. Propuesta: `@section('title', 'Comunicados - Portal UNAMAD')`.

**`resources/views/comunicado.blade.php`**

- Falta `@section('title')`. Propuesta: `@section('title', $comunicado->titulo . ' - Comunicados UNAMAD')`.

**`resources/views/universidad/autoridades.blade.php`**

- Falta `@section('title')`. Propuesta: `@section('title', 'Autoridades - UNAMAD')`.

**`resources/views/universidad/presentacion.blade.php`**

- Falta `@section('title')`. Propuesta: `@section('title', 'Presentación - UNAMAD')`.

#### Facultades y escuelas profesionales

**`resources/views/facultades/agroindustrial.blade.php`**

- Sin `@section('title')` → título genérico del layout. Propuesta: `@section('title', 'Ingeniería Agroindustrial - UNAMAD')`.

**`resources/views/facultades/agroindustrial/campo-ocupacional.blade.php`**

- Sin `@section('title')`. Propuesta: `'Campo Ocupacional - Ingeniería Agroindustrial - UNAMAD'`.

**`resources/views/facultades/agroindustrial/objetivos-academicos.blade.php`**

- Sin `@section('title')`.

**`resources/views/facultades/agroindustrial/perfil-profesional.blade.php`**

- Sin `@section('title')`.

**`resources/views/facultades/agroindustrial/resena-historica.blade.php`**

- Sin `@section('title')`.

**`resources/views/facultades/agroindustrial/vision-mision.blade.php`**

- Sin `@section('title')`.

**`resources/views/facultades/biologia.blade.php`**

- Sin `@section('title')`. Propuesta: `'Biología - UNAMAD'`.

**`resources/views/facultades/biologia/campo-ocupacional.blade.php`**

- Sin `@section('title')`.

**`resources/views/facultades/biologia/objetivos-academicos.blade.php`**

- Sin `@section('title')`.

**`resources/views/facultades/biologia/perfil-profesional.blade.php`**

- Sin `@section('title')`.

**`resources/views/facultades/biologia/resena-historica.blade.php`**

- Sin `@section('title')`.

**`resources/views/facultades/biologia/vision-mision.blade.php`**

- Sin `@section('title')`.

**`resources/views/facultades/forestal.blade.php`**

- Sin `@section('title')`. Propuesta: `'Ingeniería Forestal y Medio Ambiente - UNAMAD'`.

**`resources/views/facultades/matematica.blade.php`**

- Sin `@section('title')`. Propuesta: `'Educación: Matemática y Computación - UNAMAD'`.

**`resources/views/facultades/medicina-humana.blade.php`**

- Sin `@section('title')`. Propuesta: `'Medicina Humana - UNAMAD'`.

**`resources/views/facultades/medicina-humana/campo-ocupacional.blade.php`**

- Sin `@section('title')`.

**`resources/views/facultades/medicina-humana/objetivos-academicos.blade.php`**

- Sin `@section('title')`.

**`resources/views/facultades/medicina-humana/perfil-profesional.blade.php`**

- Sin `@section('title')`.

**`resources/views/facultades/medicina-humana/resena-historica.blade.php`**

- Sin `@section('title')`.

**`resources/views/facultades/medicina-humana/vision-mision.blade.php`**

- Sin `@section('title')`.

**`resources/views/facultades/psicologia.blade.php`**

- Sin `@section('title')`. Propuesta: `'Psicología - UNAMAD'`.

**`resources/views/facultades/psicologia/campo-ocupacional.blade.php`**

- Sin `@section('title')`.

**`resources/views/facultades/psicologia/objetivos-academicos.blade.php`**

- Sin `@section('title')`.

**`resources/views/facultades/psicologia/perfil-profesional.blade.php`**

- Sin `@section('title')`.

**`resources/views/facultades/psicologia/resena-historica.blade.php`**

- Sin `@section('title')`.

**`resources/views/facultades/psicologia/vision-mision.blade.php`**

- Sin `@section('title')`.

**`resources/views/facultades/sistemas.blade.php`**

- Sin `@section('title')`. Propuesta: `'Ingeniería de Sistemas e Informática - UNAMAD'`.

**`resources/views/facultades/veterinaria.blade.php`**

- Sin `@section('title')`. Propuesta: `'Medicina Veterinaria - Zootecnia - UNAMAD'`.

#### Oficinas y proyectos

**`resources/views/oficinas/administracion.blade.php`**

- Sin `@section('title')` → título genérico (P8). Propuesta: `@section('title', 'Dirección General de Administración - UNAMAD')`.

**`resources/views/oficinas/ambiental.blade.php`**

- Sin `@section('title')` (P8). Propuesta: `'Gestión Ambiental - Comité Ambiental Universitario - UNAMAD'`.

**`resources/views/oficinas/ambiental/actividades.blade.php`**

- Sin `@section('title')` (P8). Propuesta: `'Actividades - Comité Ambiental Universitario - UNAMAD'`.

**`resources/views/oficinas/calidad.blade.php`**

- Sin `@section('title')` (P8). Propuesta: `'Gestión de la Calidad - UNAMAD'`.

**`resources/views/oficinas/cooperacion.blade.php`**

- Sin `@section('title')` (P8). Propuesta: `'Cooperación y Relaciones Internacionales - UNAMAD'`.

**`resources/views/oficinas/cooperacion/convenios.blade.php`**

- Sin `@section('title')` (P8). Propuesta: `'Convenios - Cooperación y Relaciones Internacionales - UNAMAD'`.

**`resources/views/oficinas/cooperacion/directorio.blade.php`**

- Sin `@section('title')` (P8). Propuesta: `'Directorio - OCRI - UNAMAD'`.

**`resources/views/oficinas/cooperacion/estructura-organica.blade.php`**

- Sin `@section('title')` (P8). Propuesta: `'Estructura Orgánica - OCRI - UNAMAD'`.

**`resources/views/oficinas/cooperacion/mision-vision.blade.php`**

- Sin `@section('title')` (P8). Propuesta: `'Misión, Visión y Objetivos - OCRI - UNAMAD'`.

**`resources/views/oficinas/cooperacion/personal-administrativo.blade.php`**

- Sin `@section('title')` (P8). Propuesta: `'Personal Administrativo - OCRI - UNAMAD'`.

**`resources/views/oficinas/cooperacion/servicios.blade.php`**

- Sin `@section('title')` (P8). Propuesta: `'Servicios - OCRI - UNAMAD'`.

**`resources/views/oficinas/oti.blade.php`**

- Sin `@section('title')` (P8). Propuesta: `'Oficina de Tecnologías de la Información - UNAMAD'`.

**`resources/views/oficinas/planeamiento.blade.php`**

- Sin `@section('title')` (P8). Propuesta: `'Oficina de Planeamiento y Presupuesto - UNAMAD'`.

**`resources/views/oficinas/secretaria.blade.php`**

- Sin `@section('title')` (P8). Propuesta: `'Secretaría General - UNAMAD'`.

**`resources/views/proyectos/panificadora.blade.php`**

- L3: título "Panificadora UNAMAD - UNAMAD" repite "UNAMAD". Propuesta: `'Panificadora - UNAMAD'`. Observación.

#### Transparencia (Artículo 11 e Indicador 55)

**`resources/views/transparencia/indicador-55/mv6.blade.php`**

- Sin `@section('title')`: la pestaña muestra el título genérico del layout. Propuesta: `@section('title', 'MV6: Estudiantes por Facultad - Indicador 55 UNAMAD')`.

**`resources/views/transparencia/indicador-55/mv7.blade.php`**

- Sin `@section('title')`. Propuesta: 'MV7: Reglamento de Estudiantes - Indicador 55 UNAMAD'.

**`resources/views/transparencia/indicador-55/mv8.blade.php`**

- Sin `@section('title')`. Propuesta: 'MV8: Espacios y Servicios - Indicador 55 UNAMAD'.

**`resources/views/transparencia/indicador-55/mv9.blade.php`**

- Sin `@section('title')`. Propuesta: 'MV9: Proyectos de Investigación - Indicador 55 UNAMAD'.

**`resources/views/transparencia/indicador-55/mv10.blade.php`**

- Sin `@section('title')`. Propuesta: 'MV10: Tarifas de Servicios - Indicador 55 UNAMAD'.

**`resources/views/transparencia/indicador-55/mv11.blade.php`**

- Sin `@section('title')`. Propuesta: 'MV11: Plana Docente - Indicador 55 UNAMAD'.

**`resources/views/transparencia/indicador-55/mv12.blade.php`**

- Sin `@section('title')`. Propuesta: 'MV12: Mallas Curriculares - Indicador 55 UNAMAD'.

**`resources/views/transparencia/indicador-55/variable.blade.php`**

- Sin `@section('title')`. Propuesta: `@section('title', $variable->titulo_completo . ' - Indicador 55 UNAMAD')`.

**`resources/views/transparencia/articulo-11/index.blade.php`**

- Sin `@section('title')`. Propuesta: 'Transparencia - Artículo 11 - UNAMAD'.

#### Panel de administración

**`resources/views/admin/anuncios/create.blade.php`**

- Sin `@section('title')` → título genérico "Dashboard - Panel Administrativo UNAMAD" (T2). Propuesta: `@section('title', 'Crear anuncio')`.

**`resources/views/admin/anuncios/show.blade.php`**

- Sin `@section('title')` ni `@section('header')` (T2). Propuesta: `@section('title', 'Anuncio: ' . $anuncio->titulo)`.

**`resources/views/admin/anuncios/index.blade.php`**

- Sin `@section('title')` (T2). Propuesta: `@section('title', 'Anuncios')`.

**`resources/views/admin/comunicado-categorias/create.blade.php`**

- Sin `@section('title')` (T2). Propuesta: `@section('title', 'Nueva categoría de comunicado')`.

**`resources/views/admin/comunicado-categorias/edit.blade.php`**

- Sin `@section('title')` (T2). Propuesta: `@section('title', 'Editar categoría ' . $comunicadoCategoria->nombre)`.

**`resources/views/admin/comunicado-categorias/index.blade.php`**

- Sin `@section('title')` (T2).

**`resources/views/admin/comunicado-categorias/show.blade.php`**

- Sin `@section('title')` (T2).

**`resources/views/admin/comunicados/create.blade.php`**

- Sin `@section('title')` (T2). Propuesta: `@section('title', 'Nuevo comunicado')`.

**`resources/views/admin/comunicados/edit.blade.php`**

- Sin `@section('title')` (T2).

**`resources/views/admin/comunicados/show.blade.php`**

- Sin `@section('title')` (T2). Propuesta: `@section('title', $comunicado->titulo)`.

**`resources/views/admin/dashboard.blade.php`**

- Sin `@section('title')`: el título por defecto "Dashboard" es aceptable aquí; se recomienda `@section('title', 'Panel de administración')` por coherencia con el h1.

**`resources/views/admin/documentos/index.blade.php`**

- Sin `@section('title')` (T2). Propuesta: `@section('title', 'Documentos' . ($carpetaActual ? ' — ' . $carpetaActual->nombre : ''))`.

**`resources/views/admin/enlaces-normativos/create.blade.php`**

- Sin `@section('title')` (T2). Propuesta: `@section('title', 'Nuevo enlace normativo')`.

**`resources/views/admin/enlaces-normativos/edit.blade.php`**

- Sin `@section('title')` (T2).

**`resources/views/admin/enlaces-normativos/index.blade.php`**

- Sin `@section('title')` (T2).

**`resources/views/admin/indicador55/edit.blade.php`**

- Sin `@section('title')` (T2). Propuesta: `@section('title', 'Editar ' . $indicador55->titulo)`.

**`resources/views/admin/indicador55/index.blade.php`**

- Sin `@section('title')` (T2). Propuesta: `@section('title', 'Indicador 55 – Transparencia')`.

**`resources/views/admin/users/index.blade.php`**

- Sin `@section('title')` (T2). Propuesta: `@section('title', 'Usuarios')`.

**`resources/views/admin/videos-destacados/create.blade.php`**

- Sin `@section('title')` (T2). Propuesta: `@section('title', 'Nuevo video destacado')`.

**`resources/views/admin/videos-destacados/edit.blade.php`**

- Sin `@section('title')` (T2).

**`resources/views/admin/videos-destacados/index.blade.php`**

- Sin `@section('title')` (T2).

### 2.4.4 Propósito de los enlaces (A)

_El propósito de cada enlace debe deducirse de su texto o de su contexto programático._

**Hallazgos: 157**

#### Layouts, partials y JS global

**`resources/views/layouts/app.blade.php`**

- Enlaces con `target="_blank"` sin aviso de nueva ventana (texto ni `aria-label`): L147, L151, L156-157 (`aria-label="Facebook UNAMAD"`), L163-164 (`aria-label="YouTube UNAMAD"`), L489, L1000, L1019, L1038, L1078, L1097, L1370, L1382, L1424, L1431, L1581, L1718, L1720, L1722, L1725, L1727, L1787, L1790, L1800, L1802, L2733, L2741, L2749, L2766, L2839. (El footer L2787/L2797/L2807 sí lo indica: "(abre en nueva pestaña)".) Propuesta global: `<span class="sr-only">(se abre en una ventana nueva)</span>` o un icono con texto alternativo; en los `aria-label` de L157/L164 añadir el sufijo.
- L1382-1391 y L1790-1791: "Descargar Formato" no indica qué formato, tipo ni tamaño de archivo (enlace a Google Drive). Propuesta: "Descargar formato de solicitud de acceso a la información pública (PDF, se abre en una ventana nueva)".
- L1370-1379 y L1787-1788: "Formulario Virtual" depende del contexto visual "Acceso a Información Pública" (L1363/L1784) que no está asociado programáticamente. Propuesta: "Formulario virtual de acceso a la información pública" o `aria-describedby` al título del grupo.
- L176-177 y L185-186: `title="Panel Admin"` / `title="Iniciar Sesión"` distinto del `aria-label` ("Panel de administración"/"Iniciar sesión"): dos nombres para el mismo enlace. Propuesta: eliminar `title` o igualarlo al `aria-label`.
- Observación L2737: "Admisión 2025" desactualizado (hoy 2026); usar texto sin año o generarlo con `date('Y')`.

**`resources/views/admin/layouts/app.blade.php`**

- L72 "Eventos", L134 "Galería", L142 "Configuración": `href="#"` sin destino (funcionalidades no implementadas). Propuesta: eliminar hasta que existan o `aria-disabled="true"` + texto "(próximamente)".
- L212 "Mi Perfil", L213 "Configuración": `href="#"`; además "Configuración" aparece dos veces (L149 y L213) con destinos distintos (ambos `#`).
- L36-132: enlace de la sección actual con clase `bg-[#db0455]` pero sin `aria-current="page"`.

#### Portada y vistas generales (comunicados, posgrado, datos abiertos, documentos, acceso, universidad)

**`resources/views/home.blade.php`**

- L107, L179, L216, L246, L265, L286, L305, L324, L342, L361, L380, L399, L436, L455, L474, L493, L513, L551, L647, L684, L749, L861, L879, L901, L920, L974, L1034, L1053, L1070, L1092, L1097, L1125, L1133, L1141, L1149, L1157, L1164, L1173, L1181, L1189, L1197, L1205, L1212, L1982 (JS): 44 enlaces con `target="_blank"` sin aviso de nueva ventana. Propuesta global: `<span class="sr-only">(se abre en una ventana nueva)</span>` dentro del enlace o un script que lo añada a todo `a[target=_blank]`.
- L1092-1096 y L1097-1108: dos enlaces adyacentes al mismo destino (imagen del boletín y tarjeta) → dos paradas de tabulación redundantes. Propuesta: fusionar en un solo `<a>` o `tabindex="-1" aria-hidden="true"` en el de la imagen.
- L605: `<article role="link" aria-label="{{ titulo }}">` — `aria-label` sustituye todo el contenido: la oficina y la fecha no se anuncian. Propuesta: quitar `aria-label` y convertir el `<h3>` en `<a href>` (patrón tarjeta con enlace interno); mismo caso en JS L2171.
- L455, L493: enlaces a `portal.unamad.edu.pe/...` (mismo sitio) abren en nueva pestaña innecesariamente. Propuesta: usar `url('oficinas/calidad')`, `url('facultades/forestal')` sin `target`.
- L127-141: `aria-label="Slide 1"`…"Slide 8" mezclan idioma y no indican acción. Propuesta: `aria-label="Ir a la diapositiva 1 de 8"`; L147, L154: "Slide anterior/siguiente" → "Diapositiva anterior"/"Diapositiva siguiente".

**`resources/views/comunicados.blade.php`**

- L141-143: `<span>Leer más →</span>` parece un enlace pero no lo es; con el `<a>` propuesto arriba, convertirlo en `aria-hidden="true"`.

**`resources/views/comunicado.blade.php`**

- L104: enlaces de adjuntos con `target="_blank"` sin aviso (y `rel="noopener"` sin `noreferrer`). Propuesta: añadir `<span class="sr-only">(se abre en una ventana nueva)</span>` e indicar tamaño: "Resolución.pdf (PDF, 1,2 MB)".

**`resources/views/capacitaciones-servir.blade.php`**

- L89, L110, L117, L150, L171, L178, L197, L218, L225, L244, L265, L272, L305, L326, L333, L352, L373, L380, L399, L420, L427, L484, L497, L504, L523, L536, L543, L562, L575, L582, L601, L614, L621, L690, L703, L710, L717, L802, L809: 39 enlaces `target="_blank"` sin aviso de nueva ventana y sin `rel="noopener noreferrer"`.
- L122, L183, L230, L277, L338, L385, L432, L509, L548, L587, L626, L715: 12 enlaces con el texto idéntico "Descargar" a destinos distintos (acortadores cutt.ly, sin indicar formato/tamaño). Propuesta: `aria-label="Descargar video «{{ título }}» (MP4)"` o `<span class="sr-only">`.
- L176, L223, L270, L331, L378, L425: "YouTube" ×6; L502, L541, L580, L619, L708 (×4): "Ver" ×9; L722, L814: "Pieza gráfica" ×10; L807: "Ver Matriz (PDF)" ×6 → textos repetidos con destinos distintos. Propuesta: incluir el título en `aria-label` o sr-only.

**`resources/views/datasets/show.blade.php`**

- L29-34: "Fuente de datos" con `target="_blank"` sin aviso. Propuesta: sr-only "(se abre en una ventana nueva)".

**`resources/views/documentos/publicos/index.blade.php`**

- L177-181, L266-270, L379-383: enlaces "Descargar"/"Acceder" repetidos para cada documento sin contexto. Propuesta: `aria-label="Descargar {{ $documento->titulo }} (PDF)"` o sr-only con el título.
- L178, L267, L380: `target="_blank"` condicional sin aviso ni `rel="noopener noreferrer"`.
- L180: "Descargar" no indica formato ni tamaño del archivo. Propuesta: "Descargar (PDF, 350 KB)".

**`resources/views/auth/login.blade.php`**

- L91-93: `<a href="#">¿Olvidó su contraseña?</a>` enlace muerto (no lleva a ningún flujo). Propuesta: ruta `password.request` real o eliminar el enlace.

**`resources/views/universidad/autoridades.blade.php`**

- L93-95, L260-262: dos enlaces con el mismo texto "Web Info" a destinos distintos, `target="_blank"` sin aviso ni `rel="noopener noreferrer"`, texto en inglés y no descriptivo. Propuesta: "Perfil del investigador en CTI Vitae (CONCYTEC) – se abre en una ventana nueva".

**`resources/views/universidad/politicas.blade.php`**

- L270-286: "Email" y "Teléfono" tienen aspecto de botones (`cursor-not-allowed`) pero no son enlaces ni contienen datos de contacto; el texto L267 promete "contáctanos a través de los siguientes medios" sin medios reales. Propuesta: `<a href="mailto:…">` y `<a href="tel:…">` reales o eliminar el bloque.

**`resources/views/universidad/presentacion.blade.php`**

- L169, L177, L185, L194: cuatro enlaces "Historia", "Autoridades", "Estatuto", "Plan Estratégico" con `href="#"` (enlaces muertos que desplazan al inicio). Propuesta: `href="{{ url('universidad/historia') }}"`, `{{ url('universidad/autoridades') }}`, y rutas reales de Estatuto/PEI (o eliminar los que no existan).

#### Facultades y escuelas profesionales

**`resources/views/facultades/administracion.blade.php`**

- L37: `href="/facultades"` apunta a una ruta inexistente (404).
- L33 "Inicio" (→ `/`) y partial L19 "Inicio" (→ `/facultades/administracion`): mismo texto, destinos distintos. Propuesta: "Inicio de la carrera" en el sidebar.

**`resources/views/facultades/administracion/partials/navigation.blade.php`**

- L14-20: "Inicio" ambiguo respecto al "Inicio" de las migas (ver vista).

**`resources/views/facultades/agroindustrial.blade.php`**

- L34: "Facultades" en migas es `<span>` no navegable (no hay página índice).
- L22 "Inicio" (→ `/`) vs partial L18 "Inicio" (→ `/facultades/agroindustrial`): mismo texto, destino distinto.

**`resources/views/facultades/agroindustrial/partials/navigation.blade.php`**

- L18: "Inicio" ambiguo frente al "Inicio" de las migas.

**`resources/views/facultades/agroindustrial/campo-ocupacional.blade.php`**

- L34, L42: "Facultades" e "Ingeniería Agroindustrial" en migas son `<span>` no enlazables (no se puede volver a la página de la carrera desde las migas).

**`resources/views/facultades/agroindustrial/objetivos-academicos.blade.php`**

- L34, L42: migas intermedias no enlazables.

**`resources/views/facultades/agroindustrial/perfil-profesional.blade.php`**

- L34, L42: migas intermedias no enlazables.

**`resources/views/facultades/agroindustrial/resena-historica.blade.php`**

- L34, L42: migas intermedias no enlazables.

**`resources/views/facultades/agroindustrial/vision-mision.blade.php`**

- L34, L42: migas intermedias no enlazables.

**`resources/views/facultades/biologia.blade.php`**

- L34: "Facultades" no enlazable; L22 "Inicio" vs partial L18 "Inicio" con destinos distintos.

**`resources/views/facultades/biologia/partials/navigation.blade.php`**

- L18: "Inicio" ambiguo.

**`resources/views/facultades/biologia/campo-ocupacional.blade.php`**

- L34, L42: migas intermedias no enlazables.

**`resources/views/facultades/biologia/objetivos-academicos.blade.php`**

- L34, L42: migas intermedias no enlazables.

**`resources/views/facultades/biologia/perfil-profesional.blade.php`**

- L34, L42: migas intermedias no enlazables.

**`resources/views/facultades/biologia/resena-historica.blade.php`**

- L34, L42: migas intermedias no enlazables.

**`resources/views/facultades/biologia/vision-mision.blade.php`**

- L34, L42: migas intermedias no enlazables.

**`resources/views/facultades/contabilidad.blade.php`**

- L37: `href="/facultades"` → 404.
- L33 "Inicio" vs partial L19 "Inicio": mismo texto, destino distinto.

**`resources/views/facultades/contabilidad/partials/navigation.blade.php`**

- L14-20: "Inicio" ambiguo.

**`resources/views/facultades/derecho.blade.php`**

- L37: `href="/facultades"` → 404.
- L33 "Inicio" vs partial L19 "Inicio": destinos distintos.

**`resources/views/facultades/derecho/partials/navigation.blade.php`**

- L14-20: "Inicio" ambiguo.

**`resources/views/facultades/ecoturismo.blade.php`**

- L37: `href="/facultades"` → 404.
- L33 "Inicio" vs partial L19 "Inicio": destinos distintos.

**`resources/views/facultades/ecoturismo/partials/navigation.blade.php`**

- L14-20: "Inicio" ambiguo.

**`resources/views/facultades/en-desarrollo.blade.php`**

- L81-84: "Portal UNAMAD" con `target="_blank"` sin aviso. Propuesta: texto "Portal UNAMAD (se abre en una ventana nueva)" o `aria-label` equivalente + icono.

**`resources/views/facultades/enfermeria.blade.php`**

- L37: `href="/facultades"` → 404.
- L33 "Inicio" vs partial L19 "Inicio": destinos distintos.

**`resources/views/facultades/enfermeria/partials/navigation.blade.php`**

- L14-20: "Inicio" ambiguo.

**`resources/views/facultades/forestal.blade.php`**

- L34: "Facultades" no enlazable; L22 "Inicio" vs partial L19 "Inicio" con destinos distintos.

**`resources/views/facultades/forestal/partials/navigation.blade.php`**

- L14-20: "Inicio" ambiguo.

**`resources/views/facultades/matematica.blade.php`**

- L34: "Facultades" no enlazable; L22 "Inicio" vs partial L19 "Inicio" con destinos distintos.

**`resources/views/facultades/matematica/partials/navigation.blade.php`**

- L14-20: "Inicio" ambiguo.

**`resources/views/facultades/medicina-humana.blade.php`**

- L34: "Facultades" no enlazable; L22 "Inicio" vs partial L18 "Inicio" con destinos distintos.

**`resources/views/facultades/medicina-humana/partials/navigation.blade.php`**

- L18: "Inicio" ambiguo.
- L116: `href="tel:986089861"` sin prefijo internacional (`tel:+51986089861`).

**`resources/views/facultades/medicina-humana/campo-ocupacional.blade.php`**

- L34, L42: migas intermedias no enlazables.

**`resources/views/facultades/medicina-humana/objetivos-academicos.blade.php`**

- L34, L42: migas intermedias no enlazables.

**`resources/views/facultades/medicina-humana/perfil-profesional.blade.php`**

- L34, L42: migas intermedias no enlazables.

**`resources/views/facultades/medicina-humana/resena-historica.blade.php`**

- L34, L42: migas intermedias no enlazables.

**`resources/views/facultades/medicina-humana/vision-mision.blade.php`**

- L34, L42: migas intermedias no enlazables.

**`resources/views/facultades/psicologia.blade.php`**

- L34: "Facultades" no enlazable; L22 "Inicio" vs partial L18 "Inicio" con destinos distintos.

**`resources/views/facultades/psicologia/partials/navigation.blade.php`**

- L18: "Inicio" ambiguo.

**`resources/views/facultades/psicologia/campo-ocupacional.blade.php`**

- L34, L42: migas intermedias no enlazables.

**`resources/views/facultades/psicologia/objetivos-academicos.blade.php`**

- L34, L42: migas intermedias no enlazables.

**`resources/views/facultades/psicologia/perfil-profesional.blade.php`**

- L34, L42: migas intermedias no enlazables.

**`resources/views/facultades/psicologia/resena-historica.blade.php`**

- L34, L42: migas intermedias no enlazables.

**`resources/views/facultades/psicologia/vision-mision.blade.php`**

- L34, L42: migas intermedias no enlazables.

**`resources/views/facultades/sistemas.blade.php`**

- L34: "Facultades" no enlazable; L22 "Inicio" vs partial L19 "Inicio" con destinos distintos.

**`resources/views/facultades/sistemas/partials/navigation.blade.php`**

- L14-20: "Inicio" ambiguo.

**`resources/views/facultades/veterinaria.blade.php`**

- L34: "Facultades" no enlazable; L22 "Inicio" vs partial L19 "Inicio" con destinos distintos.

**`resources/views/facultades/veterinaria/partials/navigation.blade.php`**

- L14-20: "Inicio" ambiguo.

#### Oficinas y proyectos

**`resources/views/oficinas/academicos.blade.php`**

- L21: enlace solo icono sin nombre accesible (P1).

**`resources/views/oficinas/admision.blade.php`**

- L21: enlace solo icono sin `aria-label` (P1).
- L71: "visite el portal principal de admisiones" menciona un portal pero no lo enlaza (el enlace está solo en el sidebar). Observación.

**`resources/views/oficinas/admision/partials/navigation.blade.php`**

- L75: `<a href="https://admision.unamad.edu.pe/" target="_blank">` sin aviso de nueva ventana (P6). Propuesta: `aria-label="admision.unamad.edu.pe (se abre en una ventana nueva)"` o añadir `rel="noopener"` + texto.

**`resources/views/oficinas/ambiental.blade.php`**

- L157: "utiliza el menú de navegación de la izquierda" — instrucción dependiente de la posición visual (en móvil el sidebar queda arriba y para lector de pantalla no hay "izquierda"). Propuesta: enlazar directamente a "Actividades" (`/oficinas/ambiental/actividades`).

**`resources/views/oficinas/ambiental/actividades.blade.php`**

- L151-158: `<a target="_blank">` "Link de Inscripción" (Zoom) sin aviso de nueva ventana (P6); texto "Link de Inscripción" es genérico fuera de contexto. Propuesta: "Inscribirse a la videoconferencia (se abre en una ventana nueva)".
- L42: "Gestión Ambiental" en la miga de pan es `<span>` sin enlace a `/oficinas/ambiental`.

**`resources/views/oficinas/ambiental/partials/navigation.blade.php`**

- L59, L65: teléfono y correo son texto plano; propuesta `<a href="tel:+51082573213">` y `<a href="mailto:ambiental@unamad.edu.pe">`. Observación.

**`resources/views/oficinas/biblioteca.blade.php`**

- L21: enlace solo icono sin `aria-label` (P1).

**`resources/views/oficinas/bienestar.blade.php`**

- L21: enlace solo icono sin `aria-label` (P1).

**`resources/views/oficinas/bienestar/actividades.blade.php`**

- L21: enlace solo icono sin `aria-label` (P1).
- L67-72: "Volver al Inicio" apunta a `/oficinas/bienestar`, no al inicio del sitio; texto ambiguo. Propuesta: "Volver a Bienestar Universitario".

**`resources/views/oficinas/bienestar/partials/navigation.blade.php`**

- L59, L70: teléfono "+51 956344053" y correo "bienestar@unamad.edu.pe" como texto plano; propuesta `<a href="tel:+51956344053">` y `<a href="mailto:…">`. Observación.

**`resources/views/oficinas/calidad.blade.php`**

- L550, L559, L568, L577: `<a href="#">` "Manual de Calidad", "Formularios de Evaluación", "Preguntas Frecuentes", "Biblioteca de Recursos" → enlaces vacíos (placeholder). Propuesta: enlazar al documento real o retirar hasta que exista.
- L67: `href="#inicio"` usado como pestaña (no navega). Propuesta: `<button type="button" role="tab">`.

**`resources/views/oficinas/cooperacion.blade.php`**

- L103: "utiliza el menú de navegación de la izquierda" – instrucción por posición visual; propuesta: enlazar directamente "Misión, Visión y Objetivos" (`/oficinas/cooperacion/mision-vision`).
- L34: "Oficinas" en miga de pan sin enlace. Observación.

**`resources/views/oficinas/cooperacion/partials/navigation.blade.php`**

- L115, L121: teléfono y correo en texto plano; propuesta `tel:`/`mailto:`. Observación.

**`resources/views/oficinas/cooperacion/convenios.blade.php`**

- L265, L276, L291, L302: `<a href="#">` "Español"/"Inglés" – enlaces placeholder sin destino; además dos enlaces "Español" y dos "Inglés" con destinos (previstos) distintos. Propuesta: `aria-label="Descargar modelo de Convenio Marco en español (PDF)"`, etc., y href real.
- L413-422: "Ver Convenios Institucionales" con `target="_blank"` (gob.pe) sin aviso de nueva ventana (P6).
- L41, L51: "Oficinas" y "Cooperación y Relaciones Internacionales" en la miga de pan sin enlace. Observación.

**`resources/views/oficinas/cooperacion/directorio.blade.php`**

- L42: "Cooperación y Relaciones Internacionales" en miga de pan sin enlace. Observación.
- L106: siglas "OCRI" sin `<abbr>`. Observación.

**`resources/views/oficinas/cooperacion/personal-administrativo.blade.php`**

- L109, L115, L143, L149: enlaces `mailto:`/`tel:` correctos (buena práctica). Color `text-gray-600` sin subrayado, distinguible solo por icono; propuesta `underline`. Observación.

**`resources/views/oficinas/cooperacion/servicios.blade.php`**

- L200: correo y teléfono en texto plano; propuesta `mailto:`/`tel:`. Observación.

**`resources/views/oficinas/incubadora.blade.php`**

- L21: enlace solo icono sin `aria-label` (P1).

**`resources/views/oficinas/innovacion.blade.php`**

- L21: enlace solo icono sin `aria-label` (P1).

**`resources/views/oficinas/investigacion.blade.php`**

- L21: enlace solo icono sin `aria-label` (P1).

**`resources/views/oficinas/oti.blade.php`**

- L34: "Oficinas" en miga de pan sin enlace. Observación.

**`resources/views/oficinas/planeamiento.blade.php`**

- L34: "Oficinas" en miga de pan sin enlace. Observación.

**`resources/views/oficinas/secretaria.blade.php`**

- L34: "Oficinas" en miga de pan sin enlace. Observación.

#### Transparencia (Artículo 11 e Indicador 55)

**`resources/views/transparencia/indicador-55/mv1.blade.php`**

- L211-213: enlace de documento con `target="_blank"` sin aviso de ventana nueva.
- L211: `href="{{ $doc['url'] ?? '#' }}"` genera enlace a `#` cuando no hay URL (enlace sin destino). Propuesta: no renderizar el `<a>` o mostrar texto "URL no disponible".

**`resources/views/transparencia/indicador-55/mv2.blade.php`**

- L120, 160, 178, 196, 228, 246, 264, 296, 314, 332, 364, 382, 414, 432, 464, 482: 16 enlaces `target="_blank"` sin aviso de ventana nueva.
- L120: `href="… ?? '#'"` enlace a `#` cuando falta URL.

**`resources/views/transparencia/indicador-55/mv3.blade.php`**

- L168, 212, 248, 285, 309, 346: enlaces `target="_blank"` sin aviso de ventana nueva.
- L168: `href` a `#` cuando falta URL.

**`resources/views/transparencia/indicador-55/mv4.blade.php`**

- L168, 213, 237, 275, 299, 337, 361, 399, 423, 461, 485, 523, 547: 13 enlaces `target="_blank"` sin aviso.
- L168: `href` a `#` cuando falta URL.

**`resources/views/transparencia/indicador-55/mv5.blade.php`**

- L168, 212, 249, 267, 285, 317, 335, 353, 371, 403, 421, 439, 471, 489, 507, 525, 543, 575, 593, 611: 20 enlaces `target="_blank"` sin aviso.
- L168: `href` a `#` cuando falta URL.

**`resources/views/transparencia/indicador-55/mv6.blade.php`**

- L107 (dinámico), 135, 158, 181, 204, 227, 250: siete enlaces con el mismo texto "Ver documento →" a destinos distintos; el contexto (h4 "2024 (Período I)") no está asociado programáticamente. Propuesta: `aria-labelledby` al id del h4 o texto "Ver documento: {{ titulo }}" (y `aria-hidden` en la flecha "→").
- L103, 131, 154, 177, 200, 223, 246: `target="_blank"` sin aviso de ventana nueva.
- L103: `href` a `#` cuando falta URL.

**`resources/views/transparencia/indicador-55/mv7.blade.php`**

- L83 (dinámico), L115 "Ver documento →" y L132, L159 "Ver resolución →": textos repetidos a destinos distintos sin asociación programática con el h4 del documento.
- L79, 111, 128, 155: `target="_blank"` sin aviso; L79 `href` a `#` cuando falta URL.

**`resources/views/transparencia/indicador-55/mv8.blade.php`**

- L88 (dinámico), 125, 157: "Ver documento →" repetido a destinos distintos sin contexto programático.
- L84, 121, 153: `target="_blank"` sin aviso; L84 `href` a `#` cuando falta URL.

**`resources/views/transparencia/indicador-55/mv9.blade.php`**

- L105 (dinámico), 133, 156, 179, 202, 225, 248: "Ver documento →" ×7 a destinos distintos sin contexto programático.
- L101, 129, 152, 175, 198, 221, 244: `target="_blank"` sin aviso; L101 `href` a `#` cuando falta URL.

**`resources/views/transparencia/indicador-55/mv10.blade.php`**

- L95 (dinámico), 132, 175, 218, 261, 304 "Ver documento →" y L149, 192, 235, 278, 321 "Ver resolución →": textos repetidos a destinos distintos sin contexto programático.
- L91, 128, 145, 171, 188, 214, 231, 257, 274, 300, 317: `target="_blank"` sin aviso; L91 `href` a `#` cuando falta URL.

**`resources/views/transparencia/indicador-55/mv11.blade.php`**

- Enlaces con texto genérico idéntico a destinos distintos (el departamento/año está solo en el h5/h3 visual, no asociado): "PDF" L152, 198, 217; "Excel" L160, 220; "Resolución" L206, 223; "Descargar" L294, 309, 332, 416, 477, 589, 677, 738, 851, 941, 1006, 1104, 1184, 1245, 1346, 1422, 1474, 1586; "Descargar Excel" L551, 566, 828, 1081, 1323, 1559; "Descargar DOCX" L813, 1066, 1308, 1540; "Ordinarios"/"Contratados" L175/183, 431/439, 692/700, 956/964, 1199/1207; "Ver Relación" L242, 269, 324, 355, 408, 454, 469, 496, 526, 581, 613, 669, 715, 730, 757, 788, 843, 875, 933, 979, 998, 1021, 1047, 1096, 1123, 1176, 1222, 1237, 1260, 1286, 1338, 1361, 1414, 1443, 1466, 1489, 1518, 1578, 1605; "Ver documento →" L103, 134, 390, 651, 915, 1158, 1396. Propuesta: `aria-label="Relación de docentes 2024 – D.A. Ecoturismo (PDF, se abre en una ventana nueva)"` o `<span class="sr-only">` con departamento + año + formato.
- Enlaces cuyo único texto es un número de resolución ("278-2024", "113-2023", "N.° 098-2019-UNAMAD-R"…): L248-254, 275-279, 338-340, 361-364, 482, 502-511, 532-536, 595-598, 619, 623-625, 743, 763-773, 794-798, 857-860, 881-882, 886-889, 984, 1027-1032, 1052, 1109, 1129-1132, 1266-1271, 1292-1293, 1367-1370, 1495-1503, 1524-1525, 1545, 1564, 1591, 1611-1612 (≈115 enlaces, 12 px). Propuesta: anteponer "Resolución" (`<span class="sr-only">Resolución </span>278-2024`) y asociar el grupo al departamento.
- L74 (dinámico, 204 en total): todos los enlaces `target="_blank"` sin aviso de ventana nueva; L74 y L99 `href` a `#` cuando falta URL.
- L1612: enlace "028-2019-CFI" apunta a `CamScanner_03-04-2025_09.16.pdf` (nombre de archivo no descriptivo; observación).

**`resources/views/transparencia/indicador-55/mv12.blade.php`**

- L91 (dinámico) "Ver Documento"; L116, 129, 142, 155, 168, 181, 194, 207, 220, 233, 246, 259 "Ver Diseño Curricular" (×12); L279, 292, 305, 318, 331, 344, 357, 370, 383, 396, 409, 422 "Ver Malla Curricular" (×12): mismo texto a destinos distintos; el nombre del programa está en el h4 hermano no asociado. Propuesta: `aria-labelledby="{{ id del h4 }} {{ id del enlace }}"` o texto "Ver diseño curricular de Enfermería".
- L85 (dinámico), 110, 123, 136, 149, 162, 175, 188, 201, 214, 227, 240, 253, 273, 286, 299, 312, 325, 338, 351, 364, 377, 390, 403, 416: 25 enlaces `target="_blank"` sin aviso; L85 `href` a `#` cuando falta URL.
- Observación: las secciones "Diseño Curricular 2024" (L104) y "Malla Curricular 2023" (L267) enlazan exactamente los mismos 11 PDF; duplica 12 enlaces sin aportar destino distinto.

**`resources/views/transparencia/indicador-55/variable.blade.php`**

- L114 "Ver documento", L137 y L214 "Ver documento →", L185 "Ver PDF"/"Ver Resolución": texto repetido a destinos distintos; el título del documento (h4 L107/127/168/204) no está asociado. Propuesta: `aria-label="Ver documento: {{ $item['titulo'] }}"`.
- L84, 108, 133, 174, 210: `target="_blank"` sin aviso de ventana nueva.

**`resources/views/transparencia/articulo-11/index.blade.php`**

- L128, 146, 164 "Ver actas →" (×3, destinos distintos) y L187, 209 "Ver reportes →" (×2): texto idéntico sin contexto programático (el h4 "Actas de Facultad"… no está asociado).
- L61 "Ver documento →", L83 "Ver TUPA →", L105 "Ver presupuesto →", L231 "Ver estadísticas →", L253 "Ver proceso →", L275 "Verificar reporte →", L297 "Ver ROF →", L319 "Ver POI →": textos genéricos; el nombre completo del documento (h4) debería formar parte del nombre accesible (`aria-labelledby="h4id linkid"`).
- L57, 79, 101, 124, 142, 160, 183, 205, 227, 249, 271, 293, 315: 13 enlaces `target="_blank"` sin aviso de ventana nueva. Observación: L227 usa `http://` sin TLS.

#### Panel de administración

**`resources/views/admin/anuncios/show.blade.php`**

- L68 y L73: dos enlaces al mismo destino, ambos `target="_blank"` sin aviso (T12); el segundo es icono sin nombre. Eliminar el duplicado L73 o darle `aria-label`.

**`resources/views/admin/comunicados/edit.blade.php`**

- L169 enlace a archivo adjunto `target="_blank"` sin aviso (T12). Propuesta: `aria-label="Abrir {{ nombre }} ({{ $ext }}, se abre en una ventana nueva)"`.

**`resources/views/admin/comunicados/show.blade.php`**

- L61 enlaces a adjuntos `target="_blank"` sin aviso (T12).

**`resources/views/admin/datasets/index.blade.php`**

- L142 `target="_blank"` sin aviso (T12).

**`resources/views/admin/datasets/show.blade.php`**

- L31 "Portal" y L111 "Ver origen" con `target="_blank"` sin aviso (T12). "Ver origen" es poco descriptivo → "Ver fuente en el PNDA (se abre en una ventana nueva)".
- L22 "Plantilla CSV" descarga un archivo sin indicarlo → "Descargar plantilla CSV".

**`resources/views/admin/documentos/index.blade.php`**

- L173 título del documento `target="_blank"` sin aviso (T12).
- L98 (carpeta) y L173 (documento) aceptables como texto; pero el `title` de L205 "Ver" es genérico repetido por fila (T4).

**`resources/views/admin/enlaces-normativos/index.blade.php`**

- L70 URL `target="_blank"` sin aviso (`rel` ✓) (T12); el texto es la URL truncada a 70 caracteres → `aria-label="{{ $enlace->titulo }} (se abre en una ventana nueva)"`.

**`resources/views/admin/indicador55/edit.blade.php`**

- L18 "Vista previa" `target="_blank"` sin aviso (T12).

**`resources/views/admin/indicador55/index.blade.php`**

- L93 "Editar" y L100 "Ver" se repiten 12 veces con destinos distintos → `aria-label="Editar {{ $variable->titulo }}"` / `aria-label="Ver {{ $variable->titulo }} en el sitio (se abre en una ventana nueva)"`.
- L11, L100 `target="_blank"` sin aviso (T12).

**`resources/views/admin/videos-destacados/index.blade.php`**

- L80 URL `target="_blank"` sin aviso (T12); texto = URL truncada → `aria-label="Abrir video {{ $video->titulo }} (se abre en una ventana nueva)"`.

### 2.4.6 Encabezados y etiquetas (AA)

_Encabezados y etiquetas descriptivos._

**Hallazgos: 7**

#### Layouts, partials y JS global

**`resources/views/layouts/app.blade.php`**

- Observación L834-836 y L1674-1675: "FACULTAD DE CIENCIAS EMPRESARIALES" escrito en mayúsculas en el HTML (el resto usa la clase `uppercase`); algunos lectores deletrean palabras en mayúsculas. Escribir en minúsculas y dejar que el CSS lo transforme. (El comentario HTML L833 dice "Facultad de Ecoturismo": desalineado con el contenido.)

#### Portada y vistas generales (comunicados, posgrado, datos abiertos, documentos, acceso, universidad)

**`resources/views/home.blade.php`**

- L781: `<h2>LA UNAMAD EN CIFRAS:</h2>` con dos puntos finales y en mayúsculas en el HTML (se lee tal cual). Propuesta: "La UNAMAD en cifras" (mayúsculas vía CSS `uppercase`).
- L235: `<p>CONOCE TODOS</p>` texto en mayúsculas sin sentido aislado ("Conoce todos nuestros servicios" está partido en dos elementos). Propuesta: integrar en el h2 o `aria-hidden` en el sobretítulo.

#### Facultades y escuelas profesionales

**`resources/views/facultades/biologia/perfil-profesional.blade.php`**

- L86-91: h3 "El biólogo egresado de la UNAMAD está capacitado para:" redactado como frase introductoria con dos puntos. Propuesta: "Capacidades del egresado".

**`resources/views/facultades/veterinaria.blade.php`**

- L96, L104, L112: `<h4>` de una sola palabra ("Salud", "Económico", "Social") que etiquetan iconos, sin contenido asociado → `<ul>/<li>`.

#### Oficinas y proyectos

**`resources/views/oficinas/cooperacion/partials/navigation.blade.php`**

- L30: texto de enlace "Misión Vision Objetivos" sin acento ni separadores; propuesta "Misión, Visión y Objetivos" (coincide con el h1 de la vista destino).

**`resources/views/oficinas/secretaria.blade.php`**

- L59, L79: encabezados en MAYÚSCULAS literales (no vía CSS `uppercase`); algunos lectores deletrean. Propuesta: texto en caja normal + `class="uppercase"`.

### 2.4.7 Foco visible (AA)

_El indicador de foco del teclado debe ser visible._

**Hallazgos: 18**

#### Layouts, partials y JS global

**`resources/views/admin/layouts/app.blade.php`**

- Observación: no hay `outline-none`; se usa el outline por defecto del navegador. Replicar el `*:focus-visible` reforzado del layout público.

**`resources/views/partials/video-destacado.blade.php`**

- L25: `focus:outline-none focus:ring-2 focus:ring-white/70` — hay reemplazo visible (anillo blanco sobre el video negro). Sin hallazgo; observación: usar `focus-visible:` para no mostrar el anillo tras clic de ratón.

#### Portada y vistas generales (comunicados, posgrado, datos abiertos, documentos, acceso, universidad)

**`resources/views/comunicados.blade.php`**

- L43, L53: `focus:outline-none` reemplazado por `focus:ring-1` (anillo de 1 px, visible pero débil). Propuesta: `focus:ring-2`.

**`resources/views/capacitaciones-servir.blade.php`**

- L88-94 (y equivalentes L149, L196, L243, L304, L351, L398, L483, L522, L561, L600, L689): capa con el enlace "play" tiene `opacity-0 hover:opacity-100`; al tabular al enlace sigue invisible (foco no visible). Propuesta: añadir `focus-within:opacity-100`.

**`resources/views/auth/login.blade.php`**

- L41, L63, L110: `focus:outline-none` con `focus:ring-2` (reemplazo visible). Sin hallazgo.

#### Facultades y escuelas profesionales

**`resources/views/facultades/agroindustrial/partials/navigation.blade.php`**

- L117-141: `@apply` dentro de `<style>` en Blade no se compila → `.agroindustrial-nav-link`/`.active` no aplican; el enlace activo no tiene indicador visual robusto y el hover/foco depende solo del estilo global. Propuesta: mover reglas a `resources/css/app.css` o usar utilidades en el markup.

**`resources/views/facultades/biologia/partials/navigation.blade.php`**

- L118-142: `@apply` en `<style>` inline no compilado → sin estilos de enlace/activo; indicador visual depende solo de color.

**`resources/views/facultades/medicina-humana/partials/navigation.blade.php`**

- L121-145: `@apply` en `<style>` inline no compilado → sin estilos de enlace/activo.

**`resources/views/facultades/psicologia/partials/navigation.blade.php`**

- L115-139: `@apply` en `<style>` inline no compilado → sin estilos de enlace/activo.

#### Panel de administración

**`resources/views/admin/anuncios/index.blade.php`**

- L295 botón X: `focus:outline-none focus:text-gray-200` → foco solo por cambio de color (no visible) ✗.
- L545 "Cancelar": `focus:outline-none focus:shadow-outline-blue` (clase inexistente en v4) ✗.
- L549 "Crear Anuncio": `focus:outline-none focus:shadow-outline` (inexistente) ✗ (T10).

**`resources/views/admin/comunicado-categorias/create.blade.php`**

- L80 "Cancelar" `focus:outline-none focus:shadow-outline-blue` ✗; L84 submit `focus:outline-none focus:shadow-outline` ✗ (T10).

**`resources/views/admin/comunicado-categorias/edit.blade.php`**

- L93, L97 `focus:outline-none` + clases inexistentes (T10).

**`resources/views/admin/comunicados/create.blade.php`**

- L228 "Cancelar" y L232 submit: `focus:outline-none` + clases inexistentes (T10).

**`resources/views/admin/comunicados/edit.blade.php`**

- L279, L283 `focus:outline-none` + clases inexistentes (T10).

**`resources/views/admin/users/index.blade.php`**

- L237, L550 botones X `focus:outline-none focus:text-gray-200` ✗.
- L507, L623 "Cancelar" `focus:outline-none focus:shadow-outline-blue` ✗; L511, L627 submit `focus:outline-none focus:shadow-outline` ✗ (T10).

### 3.1.2 Idioma de las partes (AA)

_Los fragmentos en otro idioma deben marcarse con el atributo lang; los textos de interfaz deben estar en español._

**Hallazgos: 47**

#### Layouts, partials y JS global

**`resources/views/layouts/app.blade.php`**

- Sin texto en otro idioma visible. Observación L2716: "07:00am - 16:00pm" mezcla formato inglés y 24 h (16:00 pm no existe). Propuesta: "07:00 – 16:00 h".
- Ninguno visible al usuario (los comentarios en inglés del código no se muestran).

**`resources/views/admin/layouts/app.blade.php`**

- L8 y L42: "Dashboard" en inglés visible al usuario. Propuesta: "Panel" / "Inicio".
- L8, L42: "Dashboard" (reportado en 3.1.2).

#### Portada y vistas generales (comunicados, posgrado, datos abiertos, documentos, acceso, universidad)

**`resources/views/home.blade.php`**

- L1021: `title="YouTube video playlist"` en inglés (ver 1.2.x).
- L127-141, L147, L154: "Slide" (anglicismo) en `aria-label`.
- L1021 "YouTube video playlist"; L127-141 "Slide N"; L704 "@unamad.oficial" (nombre de cuenta, aceptable).

**`resources/views/capacitaciones-servir.blade.php`**

- L491, L530, L569, L608: etiquetas "Short 1…4" (anglicismo de YouTube). Propuesta: "Video corto 1".

**`resources/views/universidad/autoridades.blade.php`**

- L94, L261: "Web Info" (inglés).
- L205: "MasterThesis" (inglés, sin `lang`). Propuesta: "Tesis de maestría".

**`resources/views/universidad/historia.blade.php`**

- L175: "alma Mater" (latinismo de uso común; sin acción).

**`resources/views/universidad/politicas.blade.php`**

- L275: "Email" → "Correo electrónico".

**`resources/views/universidad/sedes.blade.php`**

- L109: "Email:" → "Correo electrónico:".

#### Facultades y escuelas profesionales

**`resources/views/facultades/agroindustrial.blade.php`**

- L19: `aria-label="Breadcrumb"` anunciado en inglés por el lector de pantalla.

**`resources/views/facultades/agroindustrial/campo-ocupacional.blade.php`**

- L19: `aria-label` en inglés.

**`resources/views/facultades/agroindustrial/objetivos-academicos.blade.php`**

- L19: `aria-label` en inglés.

**`resources/views/facultades/agroindustrial/perfil-profesional.blade.php`**

- L19: `aria-label` en inglés.

**`resources/views/facultades/agroindustrial/resena-historica.blade.php`**

- L19: `aria-label` en inglés.

**`resources/views/facultades/agroindustrial/vision-mision.blade.php`**

- L19: `aria-label` en inglés.

**`resources/views/facultades/biologia.blade.php`**

- L19: `aria-label` en inglés.

**`resources/views/facultades/biologia/campo-ocupacional.blade.php`**

- L19: `aria-label` en inglés.

**`resources/views/facultades/biologia/objetivos-academicos.blade.php`**

- L19: `aria-label` en inglés.

**`resources/views/facultades/biologia/perfil-profesional.blade.php`**

- L19: `aria-label` en inglés.

**`resources/views/facultades/biologia/resena-historica.blade.php`**

- L19: `aria-label` en inglés.

**`resources/views/facultades/biologia/vision-mision.blade.php`**

- L19: `aria-label` en inglés.

**`resources/views/facultades/forestal.blade.php`**

- L19: `aria-label` en inglés.

**`resources/views/facultades/matematica.blade.php`**

- L19: `aria-label` en inglés.

**`resources/views/facultades/medicina-humana.blade.php`**

- L19: `aria-label` en inglés.

**`resources/views/facultades/medicina-humana/campo-ocupacional.blade.php`**

- L19: `aria-label` en inglés.

**`resources/views/facultades/medicina-humana/objetivos-academicos.blade.php`**

- L19: `aria-label` en inglés.

**`resources/views/facultades/medicina-humana/perfil-profesional.blade.php`**

- L19: `aria-label` en inglés.

**`resources/views/facultades/medicina-humana/resena-historica.blade.php`**

- L19: `aria-label` en inglés.

**`resources/views/facultades/medicina-humana/vision-mision.blade.php`**

- L19: `aria-label` en inglés.

**`resources/views/facultades/psicologia.blade.php`**

- L19: `aria-label` en inglés.

**`resources/views/facultades/psicologia/campo-ocupacional.blade.php`**

- L19: `aria-label` en inglés.

**`resources/views/facultades/psicologia/objetivos-academicos.blade.php`**

- L19: `aria-label` en inglés.

**`resources/views/facultades/psicologia/perfil-profesional.blade.php`**

- L19: `aria-label` en inglés.

**`resources/views/facultades/psicologia/resena-historica.blade.php`**

- L19: `aria-label` en inglés.

**`resources/views/facultades/psicologia/vision-mision.blade.php`**

- L19: `aria-label` en inglés.

**`resources/views/facultades/sistemas.blade.php`**

- L19: `aria-label` en inglés.

**`resources/views/facultades/veterinaria.blade.php`**

- L19: `aria-label` en inglés.

#### Oficinas y proyectos

**`resources/views/oficinas/ambiental/actividades.blade.php`**

- L157: "Link" (anglicismo) → "Enlace de inscripción".

**`resources/views/oficinas/cooperacion/convenios.blade.php`**

- L164: "staff" (inglés) sin `lang="en"`; propuesta: "personal profesional".
- L164: "staff" → "personal".

#### Panel de administración

**`resources/views/admin/comunicados/create.blade.php`**

- L244 TinyMCE sin `language: 'es'`: toda la barra de herramientas, tooltips y diálogos se leen en inglés; además `no-api-key` muestra un aviso en inglés al usuario.

**`resources/views/admin/comunicados/edit.blade.php`**

- L295 TinyMCE sin `language: 'es'` (ver create).

**`resources/views/admin/indicador55/edit.blade.php`**

- L300 "Gradiente From (Tailwind)", L307 "Gradiente To (Tailwind)", L236 "Tip:", L155 "Ver JSON": términos en inglés sin `lang="en"` → traducir ("Gradiente inicial", "Gradiente final", "Consejo").

### 3.2.1 – 3.2.5 Previsible (A/AA)

_Sin cambios de contexto automáticos al recibir foco o al cambiar un control._

**Hallazgos: 8**

#### Layouts, partials y JS global

**`resources/views/layouts/app.blade.php`**

- L3218-3272: script que, si detecta cookies `portal_session`/`old_session`/`PHPSESSID`, borra TODAS las cookies y recarga la página automáticamente (`window.location.href = … cleaned=1`, L3262) sin aviso al usuario: cambio de contexto no solicitado (3.2.5) y riesgo de borrar la sesión Laravel activa. Propuesta: eliminar el script (ya no debería haber sesiones antiguas) o pedir confirmación.

**`resources/views/partials/video-destacado.blade.php`**

- L157: `setTimeout(abrir, retardo)` abre el diálogo automáticamente sin acción del usuario, bloquea el scroll (`body.style.overflow='hidden'`, L108) y NO mueve el foco al diálogo: un usuario de teclado/lector queda en una página bloqueada sin saber que hay un modal abierto (cambio de contexto no solicitado, 3.2.5 / 2.2.x). Propuesta: al abrir, guardar `document.activeElement`, `focus()` en `#video-destacado-cerrar`, y considerar mostrarlo solo tras interacción o con `mostrar_una_vez` por defecto.

#### Portada y vistas generales (comunicados, posgrado, datos abiertos, documentos, acceso, universidad)

**`resources/views/home.blade.php`**

- L1836-1846, L1869-1885: el modal de anuncios se abre automáticamente 3 s tras la carga sin acción del usuario (cambio de contexto no solicitado; sumado al modal de video de `partials.video-destacado`, pueden abrirse dos diálogos consecutivos). Propuesta: mostrar un aviso no modal (banner) o abrir solo a petición; como mínimo, no abrir si el usuario ya interactúa (foco en el contenido) y respetar `sessionStorage`.

#### Panel de administración

**`resources/views/admin/anuncios/index.blade.php`**

- L861 recarga automática de la página 1,5 s después de guardar (y L169, etc.) → cambio de contexto no solicitado; anunciar antes o evitar recarga (T7).

**`resources/views/admin/datasets/index.blade.php`**

- L54, L64 `<select onchange="this.form.submit()">` → cambio de contexto al cambiar el valor (3.2.2). Los usuarios de teclado que recorren opciones con flechas disparan envíos. Añadir botón "Filtrar" y quitar `onchange` (o al menos avisar).

**`resources/views/admin/datasets/show.blade.php`**

- L171-192 los `<select>` regeneran el gráfico al cambiar (en `dataset-chart.js`, fuera de este alcance) — verificar que no haya recarga/foco perdido.

**`resources/views/admin/users/index.blade.php`**

- L1038-1056 al escribir 8 dígitos de DNI se consultan datos externos y se **rellenan automáticamente** nombres/apellidos/fecha (cambio de valores en otros campos sin acción explícita, 3.2.2). El mensaje L1058 existe pero no se anuncia (sin `aria-live`); el resaltado verde L1040 desaparece a los 3 s.
- L879, L668 recargas automáticas (T7).

### 3.3.1 – 3.3.3 Ayuda a la entrada de datos (A/AA)

_Identificación de errores, etiquetas e instrucciones, sugerencias de corrección._

**Hallazgos: 23**

#### Layouts, partials y JS global

**`resources/views/layouts/app.blade.php`**

- Sin formularios en el layout. Observación: el portal no tiene buscador de sitio en el header (2.4.5 "múltiples vías" recomienda una búsqueda accesible con `<label>`/`role="search"`).

#### Portada y vistas generales (comunicados, posgrado, datos abiertos, documentos, acceso, universidad)

**`resources/views/documentos/publicos/index.blade.php`**

- L43 + L220: la búsqueda solo se ejecuta con ≥2 caracteres, sin indicarlo. Propuesta: texto de ayuda `aria-describedby="search-help"` "Escriba al menos 2 caracteres; los resultados aparecen automáticamente".

**`resources/views/auth/login.blade.php`**

- L40, L62: campos obligatorios (`required`) sin indicación visual/textual de obligatoriedad. Propuesta: "(obligatorio)" en la etiqueta o leyenda "Todos los campos son obligatorios".
- L42: formato del correo solo insinuado por el placeholder (desaparece al escribir). Propuesta: texto de ayuda persistente "Use su correo institucional @unamad.edu.pe" con `aria-describedby`.
- L120-134: mensaje de error general de sesión sin `role="alert"`. Propuesta: `role="alert"`.

#### Panel de administración

**`resources/views/admin/anuncios/create.blade.php`**

- L124 texto "o arrastrar aquí" pero no existe ningún manejador drag-and-drop → instrucción engañosa; eliminar o implementar.
- L39, L55 placeholders "Ingrese el título…" desaparecen al escribir; las instrucciones de formato deben ir en texto visible (ya hay label, aceptable; se anota).

**`resources/views/admin/anuncios/index.blade.php`**

- L541 leyenda "Los campos marcados con * son obligatorios" ✓ (solo en el modal). L321, L341, L365 asteriscos `text-red-500` sin `aria-hidden`.
- L346 `<option value="" disabled selected>`: correcto, pero el `select` `required` sin instrucción de error accesible.

**`resources/views/admin/comunicado-categorias/create.blade.php`**

- L30 "*" sin leyenda explicativa (T14).

**`resources/views/admin/comunicado-categorias/edit.blade.php`**

- L43 "*" sin leyenda (T14).

**`resources/views/admin/comunicados/create.blade.php`**

- L41, L58, L109 "*" sin leyenda (T14).
- L111 `<input type="file" required>`: la instrucción de tamaño/formatos (L120) no está asociada (`aria-describedby`).

**`resources/views/admin/comunicados/edit.blade.php`**

- L54, L71, L137 "*" sin leyenda (T14).

**`resources/views/admin/datasets/create.blade.php`**

- L45 "Nombre del Dataset *" sin leyenda del asterisco (T14).

**`resources/views/admin/datasets/edit.blade.php`**

- L69 "*" sin leyenda (T14). L238 advertencia importante (borra todas las filas) solo como texto de ayuda; asociarla con `aria-describedby="aviso-csv"` al input L236.

**`resources/views/admin/documentos/index.blade.php`**

- L350, L365, L446, L454, L469, L556, L571, L649, L657, L672 "*" sin leyenda (T14).

**`resources/views/admin/enlaces-normativos/_form.blade.php`**

- L5, L22 "*" sin leyenda (T14).

**`resources/views/admin/indicador55/edit.blade.php`**

- L70, L76 "*" `text-red-500` sin leyenda (T14) y 3.8:1 ✗.
- L301, L308, L315 esperan nombres de clases Tailwind ("blue-600") sin validación ni instrucciones de formato; el placeholder es la única ayuda.

**`resources/views/admin/users/index.blade.php`**

- L503 leyenda "campos marcados con *" ✓ (solo modal usuario); el modal de contraseña L565-595 no la tiene.
- L263, L315, L328, L344, L365, L410, L437, L567, L594 asteriscos `text-red-500` (3.8:1 ✗) sin `aria-hidden`.

**`resources/views/admin/videos-destacados/_form.blade.php`**

- L5, L38 "*" sin leyenda (T14).

### 4.1.2 Nombre, función, valor (A)

_Los componentes de interfaz exponen nombre, rol y estado (aria-expanded, aria-selected, role=dialog…)._

**Hallazgos: 118**

#### Layouts, partials y JS global

**`resources/views/layouts/app.blade.php`**

- L1441-1447: botón hamburguesa sin `type="button"`; `aria-label="Abrir menú de navegación"` fijo aunque `aria-expanded="true"` (aceptable, pero mejor `aria-label="Menú de navegación"`).
- L1466, L1534, L1564, L1590, L1632, L1701, L1734, L1764: botones de submenú móvil sin `type="button"`, sin `aria-controls` (los paneles tienen id: L1481 `universidad`, L1550 `oficinas`, L1573, L1599, L1651, L1717, L1748, L1778) y sin `aria-expanded` en el HTML (se añade por JS en L2955-2965: si el JS falla no hay estado). Propuesta: `type="button" aria-expanded="false" aria-controls="mm-universidad"`.
- L1481, L1550, L1651, L1717, L1748, L1778: ids genéricos (`universidad`, `oficinas`, `facultades`, `programas`, `proyectos`, `transparencia`) que pueden colisionar con anclas de las vistas (`getElementById` L2891 devolvería el primero). Propuesta: prefijo `mm-`.
- L222, L352, L717, L983, L1125, L1297: `aria-haspopup="true"` equivale a `menu` (implica `role="menu"` + navegación con flechas) pero el desplegable es un panel de enlaces sin roles; y `aria-controls` se asigna con id aleatorio (L2980-2983). Propuesta: quitar `aria-haspopup` (patrón disclosure) e ids estáticos.
- L429 y L516: `aria-expanded="false"` estático que nunca se actualiza (ver 2.1.1).
- L2992-2999: Escape hace `activeElement.blur()` → el foco se pierde (va a `<body>`) en vez de volver al botón disparador (2.4.3 orden del foco).
- L215, L246-336, L384-702, L749-925, L1454-1521, L1466-1765: la página actual se marca con clase `active`/color pero sin `aria-current="page"`. Propuesta: `@if(request()->is('…')) aria-current="page" @endif` en cada enlace.
- L3072: `<button onclick="togglePlayerSize()">` sin `type="button"` y con función inexistente (código muerto).
- L3066: `</div>` de cierre sobrante tras `#mobileInfo` (L3062-3065): HTML mal formado (4.1.1) que puede desbalancear el árbol DOM/accesibilidad.

**`resources/views/admin/layouts/app.blade.php`**

- L177: botón toggle del sidebar sin `type="button"`, sin `aria-expanded` ni `aria-controls="sidebar"`.
- L200: botón del menú de perfil sin `type="button"`, sin `aria-expanded` ni `aria-controls="profileDropdown"`; el JS L240-243 no sincroniza estado.
- L190: botón de notificaciones sin `type="button"` y sin ninguna acción asociada (no hace nada al pulsar).

**`resources/views/partials/video-destacado.blade.php`**

- L9-11: `role="dialog" aria-modal="true" aria-labelledby` correctos. Falta gestión de foco: no se enfoca nada al abrir (L98-125), no hay trampa de foco (Tab sale del modal al contenido de fondo bloqueado; `aria-modal` no lo impide en todos los navegadores) y no se devuelve el foco al cerrar (L127-147). Propuesta: enfocar el botón cerrar al abrir, `inert` en `header/main/footer` mientras esté abierto, y restaurar el foco al elemento previo al cerrar.

#### Portada y vistas generales (comunicados, posgrado, datos abiertos, documentos, acceso, universidad)

**`resources/views/home.blade.php`**

- L125-141: `role="tablist"`/`role="tab"` en los indicadores sin `role="tabpanel"`, `aria-controls` ni `id` en las diapositivas, sin navegación por flechas ni `tabindex` itinerante; `aria-selected` no se actualiza (L1755-1770). Propuesta: quitar los roles de tabs y usar `<button type="button" aria-label="Ir a la diapositiva N" aria-current="true|false">`, o implementar el patrón completo de carrusel con tabs.
- L12-66: las diapositivas no activas no llevan `aria-hidden="true"` ni `inert`; las 8 imágenes se exponen a la vez. Propuesta: `aria-hidden` dinámico en `.slide:not(.active)` y `aria-live="polite"` en el contenedor cuando el autoplay está pausado.
- L126, L128, L130, L132, L134, L136, L138, L140, L145, L152, L1234, L1245, L1252, L1334, L1372, L1385, L1392, L1438, L1459, L1472, L1502, L2062: 22 `<button>` sin `type="button"`.
- L1227, L1869-1885, L2037-2048: modal de anuncios sin gestión de foco: al abrir no se mueve el foco al diálogo, no hay trampa de foco, al cerrar no se devuelve al elemento origen; fondo no `inert`. Escape sí funciona (L2079). Propuesta: `modal.focus()`/foco en botón cerrar, `inert` en `<main>` mientras esté abierto, restaurar foco al cerrar.
- L1367-1368, L2225-2247: lightbox con `role="dialog"` sin gestión de foco (igual que arriba); Escape OK (L2273).
- L1446: `role="slider"` con `aria-valuenow="0"` estático; nunca se actualiza en `timeupdate` (L1688-1695) → estado incorrecto. Propuesta: actualizar `aria-valuenow` y añadir `aria-valuetext="1:23 de 3:45"`.
- L1459-1461, L1502-1503: botón Reproducir/Pausar con `aria-label="Reproducir himno"` fijo; el JS (L1583-1602) solo cambia iconos. Propuesta: actualizar `aria-label` a "Pausar himno" o usar `aria-pressed`.
- L1472: botón "Silenciar" sin `aria-pressed`; etiqueta no cambia a "Activar sonido" (L1651-1659).
- L1438: "Minimizar reproductor" sin `aria-expanded`/`aria-controls="audioPlayer"`.
- L605-607, L2171-2173: `<article role="link">` sobrescribe la semántica de artículo; el `<h3>` interior queda dentro de un "enlace". Propuesta: `<article>` con `<a href>` alrededor del `<h3>` (ver 2.4.4).

**`resources/views/comunicados.blade.php`**

- L16: `aria-current="page"` en `<li>` en lugar del elemento del enlace/texto; aceptable, pero mejor en el `<span>`.

**`resources/views/comunicado.blade.php`**

- L164, L172: `<button>` sin `type="button"`.

**`resources/views/posgrado/partials/navigation.blade.php`**

- L15-16: enlace de la página actual sin `aria-current="page"`.

**`resources/views/datasets/show.blade.php`**

- L100-105 + L150-157: botón "Diccionario de datos" que muestra/oculta `#contenido-diccionario` sin `aria-expanded` ni `aria-controls`; el icono no refleja el estado. Propuesta: `aria-expanded="true" aria-controls="contenido-diccionario"` y actualizar en el `click`.

**`resources/views/documentos/publicos/index.blade.php`**

- L61: `<button onclick="clearSearch()">` sin `type="button"`.
- L88, L341 + L288-307: elementos que expanden/colapsan sin `aria-expanded`/`aria-controls`; el estado solo se transmite girando el icono 45° (L296, L301).

**`resources/views/auth/login.blade.php`**

- L66: botón de alternar sin `aria-pressed`/etiqueta dinámica (ver 1.1.1).
- L84-88: checkbox "Recordarme" correctamente etiquetado. Sin hallazgo.

#### Facultades y escuelas profesionales

**`resources/views/facultades/administracion/partials/navigation.blade.php`**

- L15: enlace activo sin `aria-current="page"`.

**`resources/views/facultades/agroindustrial/partials/navigation.blade.php`**

- L13, L24, L35, L47, L58, L69: enlace activo sin `aria-current="page"`.

**`resources/views/facultades/biologia/partials/navigation.blade.php`**

- L13, L24, L35, L47, L58, L69: enlace activo sin `aria-current="page"`.

**`resources/views/facultades/contabilidad/partials/navigation.blade.php`**

- L15: enlace activo sin `aria-current="page"`.

**`resources/views/facultades/derecho/partials/navigation.blade.php`**

- L15: enlace activo sin `aria-current="page"`.

**`resources/views/facultades/ecoturismo/partials/navigation.blade.php`**

- L15: enlace activo sin `aria-current="page"`.

**`resources/views/facultades/enfermeria/partials/navigation.blade.php`**

- L15: enlace activo sin `aria-current="page"`.

**`resources/views/facultades/forestal/partials/navigation.blade.php`**

- L15: enlace activo sin `aria-current="page"`.

**`resources/views/facultades/matematica/partials/navigation.blade.php`**

- L15: enlace activo sin `aria-current="page"`.

**`resources/views/facultades/medicina-humana/partials/navigation.blade.php`**

- L13, L24, L35, L47, L58, L69: enlace activo sin `aria-current="page"`.

**`resources/views/facultades/psicologia/partials/navigation.blade.php`**

- L13, L24, L35, L47, L58, L69: enlace activo sin `aria-current="page"`.

**`resources/views/facultades/sistemas/partials/navigation.blade.php`**

- L15: enlace activo sin `aria-current="page"`.

**`resources/views/facultades/veterinaria/partials/navigation.blade.php`**

- L15: enlace activo sin `aria-current="page"`.

#### Oficinas y proyectos

**`resources/views/oficinas/academicos/partials/navigation.blade.php`**

- L14-15: enlace actual sin `aria-current="page"` (P4).

**`resources/views/oficinas/administracion.blade.php`**

- L34: "Oficinas" es `<span>` no enlazado dentro de la miga de pan (inconsistente con otras vistas donde es enlace a `/oficinas`). Observación.

**`resources/views/oficinas/administracion/partials/navigation.blade.php`**

- L13: enlace actual sin `aria-current="page"` (P4).

**`resources/views/oficinas/admision/partials/navigation.blade.php`**

- L14-15: enlace actual sin `aria-current="page"` (P4).

**`resources/views/oficinas/ambiental/partials/navigation.blade.php`**

- L13, L24: enlace actual sin `aria-current="page"` (P4).

**`resources/views/oficinas/biblioteca/partials/navigation.blade.php`**

- L14-15: enlace actual sin `aria-current="page"` (P4).

**`resources/views/oficinas/bienestar/partials/navigation.blade.php`**

- L14-15, L21-22: enlace actual sin `aria-current="page"` (P4).

**`resources/views/oficinas/calidad.blade.php`**

- L66-124 + L171/L339/L414/L486/L593: patrón de pestañas sin `role="tablist"`/`role="tab"`/`aria-selected`/`aria-controls` y paneles sin `role="tabpanel"`/`aria-labelledby`; el estado activo se transmite solo por clase CSS. El JS (L763-788) tampoco gestiona el foco ni flechas de teclado.
- L694, L702: `<button>` sin `type="button"` y sin acción asociada ("Acceder como Docente", "Panel Administrativo") → botones que no hacen nada; si son enlaces externos deben ser `<a href>`.

**`resources/views/oficinas/cooperacion/partials/navigation.blade.php`**

- L13, L24, L36, L47, L58, L69, L80: enlace actual sin `aria-current="page"` (P4).

**`resources/views/oficinas/incubadora/partials/navigation.blade.php`**

- L14-15: enlace actual sin `aria-current="page"` (P4).

**`resources/views/oficinas/innovacion/partials/navigation.blade.php`**

- L14-15: enlace actual sin `aria-current="page"` (P4).

**`resources/views/oficinas/investigacion/partials/navigation.blade.php`**

- L15-16: enlace actual sin `aria-current="page"` (P4).

**`resources/views/oficinas/oti/partials/navigation.blade.php`**

- L13: enlace actual sin `aria-current="page"` (P4).

**`resources/views/oficinas/planeamiento/partials/navigation.blade.php`**

- L13: enlace actual sin `aria-current="page"` (P4).

**`resources/views/proyectos/aldea/partials/navigation.blade.php`**

- L14-15: enlace actual sin `aria-current="page"` (P4).

**`resources/views/proyectos/bus/partials/navigation.blade.php`**

- L14-15: enlace actual sin `aria-current="page"` (P4).

**`resources/views/proyectos/estacion/partials/navigation.blade.php`**

- L14-15: enlace actual sin `aria-current="page"` (P4).

**`resources/views/proyectos/herbario/partials/navigation.blade.php`**

- L14-15: enlace actual sin `aria-current="page"` (P4).

**`resources/views/proyectos/jardin/partials/navigation.blade.php`**

- L14-15: enlace actual sin `aria-current="page"` (P4).

**`resources/views/proyectos/km16/partials/navigation.blade.php`**

- L14-15: enlace actual sin `aria-current="page"` (P4).

**`resources/views/proyectos/km18/partials/navigation.blade.php`**

- L14-15: enlace actual sin `aria-current="page"` (P4).

**`resources/views/proyectos/panificadora/partials/navigation.blade.php`**

- L14-15: enlace actual sin `aria-current="page"` (P4).

#### Transparencia (Artículo 11 e Indicador 55)

**`resources/views/transparencia/indicador-55.blade.php`**

- L41: página actual de las migas es `<span>` sin `aria-current="page"`.

**`resources/views/transparencia/indicador-55/mv1.blade.php`**

- L46: elemento actual de migas sin `aria-current="page"`.

**`resources/views/transparencia/indicador-55/mv2.blade.php`**

- L45: página actual de migas sin `aria-current="page"`.

**`resources/views/transparencia/indicador-55/mv3.blade.php`**

- L45: página actual de migas sin `aria-current="page"`.

**`resources/views/transparencia/indicador-55/mv4.blade.php`**

- L45: página actual de migas sin `aria-current="page"`.

**`resources/views/transparencia/indicador-55/mv5.blade.php`**

- L45: página actual de migas sin `aria-current="page"`.

**`resources/views/transparencia/indicador-55/mv6.blade.php`**

- L26: página actual de migas sin `aria-current="page"`.

**`resources/views/transparencia/indicador-55/mv7.blade.php`**

- L25: página actual de migas sin `aria-current="page"`.

**`resources/views/transparencia/indicador-55/mv8.blade.php`**

- L175, 190, 205: tres `<button>` "Ver galería →" sin `type="button"`, sin manejador de evento ni destino (no hacen nada), sin `aria-controls`/`aria-expanded`; para teclado y lector son controles rotos. Propuesta: convertir en `<a href>` a las galerías reales o eliminar hasta que exista funcionalidad.
- L25: página actual de migas sin `aria-current="page"`.

**`resources/views/transparencia/indicador-55/mv9.blade.php`**

- L25: página actual de migas sin `aria-current="page"`.

**`resources/views/transparencia/indicador-55/mv10.blade.php`**

- L25: página actual de migas sin `aria-current="page"`.

**`resources/views/transparencia/indicador-55/mv11.blade.php`**

- L25: página actual de migas sin `aria-current="page"`.
- L1679-1692: `<script>` `toggleSection()` referencia `#toggle-*` y secciones `hidden` que no existen en la vista (código muerto de un acordeón eliminado); si se reintroduce, debe usar `<button aria-expanded aria-controls>`.

**`resources/views/transparencia/indicador-55/mv12.blade.php`**

- L25: página actual de migas sin `aria-current="page"`.

**`resources/views/transparencia/indicador-55/variable.blade.php`**

- L27: página actual de migas sin `aria-current="page"`.

**`resources/views/transparencia/indicador-55/partials/navigation-dynamic.blade.php`**

- L14-15, L45-46: enlace activo sin `aria-current="page"`.

**`resources/views/transparencia/indicador-55/partials/navigation.blade.php`**

- L14-15, 23-24, 32-33, 41-42, 50-51, 59-60, 68-69, 77-78, 86-87, 95-96, 104-105, 113-114, 122-123: estado activo solo por clases de color, sin `aria-current="page"`.

**`resources/views/transparencia/articulo-11/index.blade.php`**

- L23: página actual de migas sin `aria-current="page"`.

**`resources/views/transparencia/articulo-11/partials/navigation.blade.php`**

- L10-11: enlace activo marcado solo con clases de color/borde, sin `aria-current="page"`.

#### Panel de administración

**`resources/views/admin/anuncios/create.blade.php`**

- L173 botón "+ Agregar otro enlace": el nuevo campo se inserta sin mover el foco ni anunciarlo → añadir `aria-live` al contenedor L160 o `focus()` al primer input nuevo.
- L273 botón de eliminar enlace (JS): sin `aria-label` (ver 1.1.1).

**`resources/views/admin/anuncios/index.blade.php`**

- L272 modal: tiene `role="dialog" aria-modal="true" aria-labelledby="modal-title"` ✓, pero L579-645 no mueve el foco al abrir, no lo atrapa (tab sale al fondo), no lo devuelve al botón que lo abrió y **no se cierra con Escape** (a diferencia de users/index). Además no hay capa de fondo (comentario L274) y el contenido de fondo sigue operable.
- L12, L46, L225, L294 `<button>` sin `type="button"` (T8).
- L556-562 estado "Guardando…" del botón cambia sin `aria-live`; añadir `aria-busy="true"` al form o `role="status"` al span.
- L620, L653, L758, L800: los enlaces añadidos por JS re-escriben `innerHTML` → se pierde el foco del usuario; usar `appendChild` y `focus()` en el nuevo campo.

**`resources/views/admin/comunicado-categorias/index.blade.php`**

- L86 botón "Activo/Inactivo": cambia el estado al pulsar pero no tiene `type="button"`, ni `aria-pressed`, ni contexto. Propuesta: `<button type="button" aria-pressed="{{ $categoria->estado ? 'true':'false' }}" aria-label="Estado de {{ $categoria->nombre }}: {{ … }}. Pulse para cambiar">` (T9).

**`resources/views/admin/comunicado-categorias/show.blade.php`**

- L178 `<button onclick="toggleEstado()">` sin `type="button"` (T8).

**`resources/views/admin/comunicados/show.blade.php`**

- L192 `<button onclick="toggleEstado()">` sin `type="button"` (T8).

**`resources/views/admin/dashboard.blade.php`**

- L150 "Crear Evento" y L158 "Agregar Usuario": `<button>` sin `type` y **sin ninguna acción** (`onclick` ausente) → controles muertos que confunden a usuarios de teclado/lector. Enlazar a la ruta correspondiente o eliminar.

**`resources/views/admin/datasets/edit.blade.php`**

- L168 "Agregar campo" ✓ `type="button"`; pero L325-331 inserta la fila sin mover el foco al primer input nuevo ni anunciarlo.
- L224 mensaje "diccionario vacío" que aparece/desaparece (L319-323) sin `aria-live`.

**`resources/views/admin/datasets/index.blade.php`**

- L121 botón "Visible/Oculto": sin `type="button"`, sin `aria-pressed`, sin contexto (T9). Propuesta: `aria-label="Visibilidad en el portal de {{ $dataset->nombre }}: {{ … }}"`.

**`resources/views/admin/documentos/index.blade.php`**

- L277 modal con `aria-labelledby="modal-title"` pero **ningún elemento tiene `id="modal-title"`** (los `<h3>` L329, L425, L538, L631 no tienen `id`) → referencia rota; el diálogo no tiene nombre. Añadir `id="modal-title"` a cada h3.
- L12, L20, L118, L124, L137, L212, L218, L265, L337, L433, L546, L639 `<button>` sin `type="button"` (T8).
- L118, L124 llaman a `cambiarOrden('carpeta', id, 'up'|'down')`, función **inexistente** (las definidas son `cambiarOrdenCarpeta(id, 'subir'|'bajar')` L897 y `cambiarOrdenDocumento` L924) → los botones Subir/Bajar no funcionan (error JS). Los documentos no tienen controles de orden.
- L133 `#{{ orden }}` con `title="Orden actual"` → texto visible "Orden: N" o `<span class="sr-only">Orden</span>`.
- L406, L519, L612, L722 "Creando…/Actualizando…" sin `aria-live`.
- L218 botón "Cambiar estado" no indica el estado actual ni tiene `aria-pressed`; el badge L178-183 sí tiene texto ✓.

**`resources/views/admin/enlaces-normativos/index.blade.php`**

- L76 botón "Activo/Inactivo": sin `type="button"`, sin `aria-pressed`, sin contexto (T9).

**`resources/views/admin/indicador55/edit.blade.php`**

- L154 botón "Ver JSON / Editor Visual" alterna paneles (L241, L161) sin `aria-expanded`/`aria-controls` (patrón de pestañas: usar `role="tablist"` o al menos `aria-controls="json-editor"` + `aria-pressed`).
- L173, L184, L200, L224 contenedores dinámicos: al agregar/eliminar no hay `aria-live` ni gestión de foco (L522, L649, L1047 solo hacen `scrollIntoView`).
- L435, L1119 `alert()` nativo para errores de JSON: accesible, pero bloquea; considerar mensaje en línea con `role="alert"`.

**`resources/views/admin/indicador55/index.blade.php`**

- L63 botón submit "Activo/Inactivo" alterna estado sin `aria-pressed` y sin contexto (¿de qué variable?) → `aria-label="Estado de {{ $variable->titulo }}: {{ … }}. Pulse para cambiar"` (T9).

**`resources/views/admin/users/index.blade.php`**

- L214 y L534 modales: `role/aria-modal/aria-labelledby` ✓, Escape ✓ (L1176); pero no se mueve el foco al abrir (L682-727, L783-793), no hay trampa de foco y no se devuelve al cerrar.
- L11, L150, L160, L167, L236, L549 `<button>` sin `type="button"` (T8).
- L150 botón "Activo/Inactivo" sin `aria-pressed`/contexto (T9).
- L354 spinner de consulta DNI sin texto (`role="status"` + `<span class="sr-only">Consultando DNI…</span>`).
- L518, L634 "Guardando…/Actualizando…" sin `aria-live`.
- L332, L369 `<option disabled selected>` ✓; pero L1129/L1161 "✓ Las contraseñas coinciden" y L1133 "no coinciden" se escriben sin `aria-live`.

**`resources/views/admin/videos-destacados/index.blade.php`**

- L86 botón "Activo/Inactivo" sin `type="button"`, `aria-pressed` ni contexto (T9).

### 4.1.3 Mensajes de estado (AA)

_Los cambios de estado se anuncian mediante regiones aria-live sin mover el foco._

**Hallazgos: 36**

#### Layouts, partials y JS global

**`resources/views/layouts/app.blade.php`**

- L124-140: `#loading-screen` sin `role="status"`/`aria-live` ni `aria-label="Cargando la página"`; el lector solo oye "Logo UNAMAD punto punto punto". Propuesta: `role="status" aria-label="Cargando"` y `aria-hidden="true"` en la imagen y los puntos.

**`resources/views/admin/layouts/app.blade.php`**

- Observación L256-272: toastr (≥2.1.3) añade `aria-live` a los avisos, verificar versión "latest"; `timeOut: 4000` hace desaparecer los mensajes en 4 s (2.2.1 tiempo ajustable): usar `timeOut: 0` para errores o aumentar `extendedTimeOut`.

**`public/js/dataset-chart.js`**

- L25-27, L33-34, L108-110, L120-127: los mensajes ("No se pudo cargar la librería…", "No hay datos para esta combinación", "Mostrando las 50 categorías…", error de carga) se escriben en `#grafico-aviso` (un `<p>` sin `role="status"`/`aria-live` en ambas vistas) → no se anuncian. Propuesta: `aviso.setAttribute('role','status')` al inicio del script o `role="status" aria-live="polite"` en las vistas.
- Observación L95-98: `selAgg.disabled` cambia dinámicamente; el estado se anuncia al enfocar el select, no requiere `aria-live`.

#### Portada y vistas generales (comunicados, posgrado, datos abiertos, documentos, acceso, universidad)

**`resources/views/home.blade.php`**

- L1259-1263: contador "N / total" del modal cambia al navegar sin `aria-live`. Propuesta: `aria-live="polite"` en el contenedor o mover el foco al `<h2 id="modal-titulo">` al cambiar de anuncio.
- L1291-1330, L1917-2000: al pasar de anuncio se reemplaza título/descr./imágenes sin anuncio al lector. Propuesta: `document.getElementById('modal-titulo').focus()` (con `tabindex="-1"`) tras cargar.
- L1400-1404: contador del lightbox sin `aria-live`.
- L1519-1523, L1622-1626: `#mobileInfo` aparece 3 s como "toast" sin `role="status"` (bajo impacto).
- L2103-2130: estado de carga `#loading-anuncios` y contenedor de resultados sin `role="status"`/`aria-live` (código inactivo, ver 1.4.1).

**`resources/views/comunicados.blade.php`**

- L84-88: "Resultados para: X" se renderiza en servidor; no requiere live region. Sin hallazgos adicionales.

**`resources/views/datasets/show.blade.php`**

- L91: `#grafico-aviso` recibe mensajes ("No se pudieron cargar…", "Mostrando las 50 categorías…", "No hay datos…") sin `role="status"`/`aria-live`. Propuesta: `role="status" aria-live="polite"`.
- L64-90: al cambiar cualquier `<select>` el gráfico se re-renderiza sin anuncio. Propuesta: actualizar el `aria-label` del canvas y anunciar "Gráfico actualizado" en la live region.

**`resources/views/documentos/publicos/index.blade.php`**

- L58-64, L250-276: resultados de búsqueda insertados dinámicamente (incluido "No se encontraron documentos" L255) sin `aria-live`. Propuesta: `role="status"`/`aria-live="polite"` en `#searchResults` o anunciar "N resultados".
- L48: `#searchLoader` sin `role="status"`/texto "Buscando".
- L126-132, L324, L328: "Cargando contenido…" / "Error al cargar contenido" sin `role="status"`/`role="alert"`.
- L76: `#itemCount` se muestra estático (no cambia); sin hallazgo.

#### Oficinas y proyectos

**`resources/views/proyectos/bus.blade.php`**

- L68-73: indicador "Trabajando en el contenido..." es estático (no requiere `aria-live`); el spinner `animate-spin` (L69) debe llevar `aria-hidden="true"`.

**`resources/views/proyectos/km16.blade.php`**

- L69: spinner `animate-spin` decorativo sin `aria-hidden="true"`.

**`resources/views/proyectos/km18.blade.php`**

- L69: spinner `animate-spin` decorativo sin `aria-hidden="true"`.

#### Panel de administración

**`resources/views/admin/anuncios/index.blade.php`**

- L54 aviso `session('success')` sin `role="status"` (T7).
- L733, L859, L865, L870, L876 `toastr.*` sin región `aria-live` persistente (T7).

**`resources/views/admin/comunicado-categorias/index.blade.php`**

- L22, L33 avisos de sesión sin `role="status"`/`role="alert"` (T7).
- L167, L172, L177 `toastr.*` + recarga L169 (T7).

**`resources/views/admin/comunicado-categorias/show.blade.php`**

- L222, L227, L232 `toastr.*` + recarga L224 (T7).

**`resources/views/admin/comunicados/show.blade.php`**

- L261, L266, L271 `toastr.*` + recarga L263 (T7).

**`resources/views/admin/datasets/index.blade.php`**

- L24, L27 avisos de sesión sin `role="status"`/`alert` (T7).
- L201, L204, L207 `toastr.*` + recarga L202 a 800 ms (T7).

**`resources/views/admin/datasets/show.blade.php`**

- L56 aviso de sesión sin `role="status"` (T7).
- L195 `#grafico-aviso` se muestra/oculta por JS sin `aria-live="polite"`.

**`resources/views/admin/documentos/index.blade.php`**

- L59, L70 avisos de sesión sin `role` (T7).
- L759, L765, L769, L775, L843, L849, L853, L859, L882, L887, L892, L910, L915, L920, L937, L942, L947, L967, L972, L991, L996 `toastr.*` + recargas (T7).

**`resources/views/admin/enlaces-normativos/index.blade.php`**

- L24, L35 avisos sin `role` (T7). L141, L144, L149 `toastr.*` + recarga L142 (T7).

**`resources/views/admin/indicador55/index.blade.php`**

- L22, L33 avisos sin `role` (T7).

**`resources/views/admin/users/index.blade.php`**

- L61, L72 avisos sin `role` (T7).
- L667, L672, L677, L774, L877, L883, L888, L894, L939, L942, L946, L952 `toastr.*` (T7).

**`resources/views/admin/videos-destacados/index.blade.php`**

- L24, L35 avisos sin `role` (T7). L151, L154, L159 `toastr.*` + recarga L152 (T7).

### Observaciones adicionales (buenas prácticas, WCAG 2.2 y redacción)

_Hallazgos que no constituyen incumplimiento AA de WCAG 2.1 pero se recomienda atender._

**Hallazgos: 17**

#### Facultades y escuelas profesionales

**`resources/views/facultades/agroindustrial.blade.php`**

- L6: `background-attachment: fixed` (parallax) sin respetar `prefers-reduced-motion`.

**`resources/views/facultades/biologia/campo-ocupacional.blade.php`**

- L99, L103, L107, L147, L175: siglas (EIA, PAMA, SSOMA, OEFA, SUNASS, ANA, SERNANP, SERFOR, MINAM, OSINFOR, SIG, INS, IIAP, INIA, CIP) sin expansión ni `<abbr>` (3.1.4 es AAA; recomendable expandir la primera vez).

**`resources/views/facultades/en-desarrollo.blade.php`**

- L50: `animate-ping` infinito; depende del `prefers-reduced-motion` global — confirmar que el layout lo desactiva.

#### Oficinas y proyectos

**`resources/views/oficinas/administracion/partials/navigation.blade.php`**

- L61-85: `<style>` con `@apply` no compilado por Tailwind 4 (P9).

**`resources/views/oficinas/ambiental/partials/navigation.blade.php`**

- L70-94: `<style>` con `@apply` no compilado (P9).

**`resources/views/oficinas/biblioteca.blade.php`**

- L90: "Preponer" (errata por "Proponer"). Observación.

**`resources/views/oficinas/calidad.blade.php`**

- L716-756: `<style>` con `@apply` no compilado (P9); `.calidad-nav-link*` no recibe estilos.

**`resources/views/oficinas/cooperacion/partials/navigation.blade.php`**

- L126-154: `<style>` con `@apply` no compilado (P9); `.cooperacion-nav-link-disabled` (L143) no se usa.

**`resources/views/oficinas/oti/partials/navigation.blade.php`**

- L61-85: `<style>` con `@apply` no compilado (P9).

**`resources/views/oficinas/planeamiento/partials/navigation.blade.php`**

- L61-85: `<style>` con `@apply` no compilado (P9).

#### Panel de administración

**`resources/views/admin/comunicados/show.blade.php`**

- L219-222 los enlaces dentro del contenido llevan color + `text-decoration: underline` ✓ (1.4.1).

**`resources/views/admin/dashboard.blade.php`**

- L14 "1,284" usuarios es un valor fijo en la plantilla (no real); no es de accesibilidad pero induce a error.

**`resources/views/admin/datasets/create.blade.php`**

- Todos los campos tienen `<label for>` ✓; `@section('title')` ✓; formatos y límites del CSV explicados en texto ✓.

**`resources/views/admin/datasets/show.blade.php`**

- `@section('title', $dataset->nombre)` ✓.

**`resources/views/admin/enlaces-normativos/_form.blade.php`**

- Todos los campos con `<label for>` ✓; L34 avisa "Se abrirá en una nueva pestaña" ✓; sin `focus:outline-none` ✓.

**`resources/views/admin/users/index.blade.php`**

- L983, L987, L1004 `console.log` con datos personales (DNI) en consola — no es accesibilidad, pero conviene retirarlo.

**`resources/views/admin/videos-destacados/_form.blade.php`**

- Todos los controles con `<label for>` ✓; L67 unidad "(milisegundos)" y L80 ejemplo "1500 = 1.5 segundos" ✓; L92-95 y L107-110 descripciones dentro del label ✓ (forman parte del nombre; largo pero válido).

## Anexo A. Hallazgos transversales en oficinas y proyectos

- **T1 (1.3.1 / 2.4.6) Doble `<h1>`**: el layout ya imprime `<h1>@yield('header', 'Panel de Administración')</h1>` (layouts/app L185). 24 de 28 vistas NO definen `@section('header')` y además escriben su propio `<h1>` → la página tiene dos h1: "Panel de Administración" (genérico) + el de la vista. Las 4 vistas de `datasets/` sí definen `header` pero repiten el mismo texto en un segundo `<h1>`. Corrección: usar `@section('header', 'Texto')` y convertir el `<h1>` de la vista en `<h2>` (o eliminar el h1 del layout).
- **T2 (2.4.2) Título de página**: 24 de 28 vistas no definen `@section('title')` → `<title>` = "Dashboard - Panel Administrativo UNAMAD" en todas (anuncios, comunicados, usuarios, documentos…). Solo `datasets/*` lo definen.
- **T3 (1.1.1) SVG decorativos sin `aria-hidden="true"`**: todos los iconos inline (`<svg class="w-5 h-5" …>`) junto a texto carecen de `aria-hidden="true"` y `focusable="false"`. Son ~230 ocurrencias; se listan por archivo.
- **T4 (1.1.1 / 4.1.2) Botones y enlaces de acción solo con icono**: los botones "Ver / Editar / Eliminar / Cambiar contraseña / Subir / Bajar / Quitar" usan solo `title="…"`. `title` no es un nombre accesible fiable (no se lee en móvil ni en todos los lectores) y no da contexto (¿editar qué?). Propuesta: `aria-label="Editar anuncio {{ $anuncio->titulo }}"` + `<svg aria-hidden="true">`.
- **T5 (1.3.1 / 3.3.x) Errores de validación no asociados**: todos los `@error … <p class="text-red-600">` y los `<div id="error-*">` de los modales carecen de `id` enlazado con `aria-describedby` en el campo y de `aria-invalid="true"`; los contenedores JS carecen de `aria-live`. Los textos de ayuda (`<p class="text-xs text-gray-500">`) tampoco se asocian con `aria-describedby`.
- **T6 (1.3.1) Tablas de listado**: ninguna tabla tiene `<caption>` (o `aria-label`) ni `scope="col"` en los `<th>`.
- **T7 (4.1.3) Mensajes de estado**: los avisos `session('success'/'error')` no llevan `role="status"`/`role="alert"`. Las llamadas `toastr.success/error` (toastr 2.1.4 desde CDN) crean el `aria-live` en el mismo instante que el texto, por lo que la mayoría de lectores no lo anuncian; además `window.location.reload()` a los 800–1500 ms lo elimina. Propuesta: contenedor `#toast-container` persistente con `aria-live="polite"` en el layout y demorar/omitir la recarga.
- **T8 (4.1.2) `<button>` sin `type`** en botones `onclick` (`openModal`, `toggleEstado`, cerrar modal…): dentro de un `<form>` se convierten en submit por defecto.
- **T9 (4.1.2) Botones "Activo/Inactivo" que alternan estado** (toggle) sin `aria-pressed`, sin `type="button"`, con aspecto de etiqueta (no parecen botones) y sin nombre que diga a qué registro pertenecen.
- **T10 (2.4.7) `focus:outline-none` sin reemplazo**: las clases `focus:shadow-outline` / `focus:shadow-outline-blue` no existen en Tailwind v4 → el foco desaparece por completo en botones "Cancelar", "Crear/Actualizar" y en el botón X de los modales (que solo cambia color `focus:text-gray-200`). El `*:focus-visible` global del layout público NO está en el layout admin (verificar), por lo que se reporta.
- **T11 (1.4.3 / 1.4.11) Contraste con la paleta Tailwind v4 sobre blanco**: `text-gray-400` (#99a1af) = 2.5:1 ✗; `text-green-500` (#00c950) = 2.2:1 ✗; `text-green-600` (#00a63e) = 3.2:1 ✗ texto normal; `text-amber-600` (#e17100) = 3.2:1 ✗ normal; `text-purple-500` = 4.1:1 ✗; `text-orange-500` = 2.9:1 ✗; `text-red-500` = 3.8:1 ✗; `text-yellow-500` = 2.0:1 ✗; blanco sobre `blue-500` = 3.8:1 ✗ normal; blanco sobre `green-500→600` = 2.2–3.2:1 ✗. Nota: blanco sobre `#db0455` = 5.05:1 ✓ (pasa, a diferencia de #ed145b) y `text-gray-500` (#6a7282) = 4.8:1 ✓. `placeholder-gray-400` en todos los inputs = 2.5:1 (placeholders no son requisito estricto, pero se usan como única instrucción en varios campos).
- **T12 (2.4.4) `target="_blank"` sin aviso** en enlaces a documentos/vista previa/portal público. Propuesta: `aria-label="… (se abre en una ventana nueva)"` o texto visible.
- **T13 (1.3.1) Listas maquetadas con `<div>`**: listados de anuncios recientes, carpetas/documentos, comunicados de una categoría y tarjetas de variables deberían ser `<ul>/<li>`.
- **T14 (3.3.2) Asterisco como único indicador de obligatoriedad** sin leyenda "Los campos marcados con * son obligatorios" (solo lo tienen los modales de anuncios y usuarios).
- **T15 (1.1.1 / 2.4.6) Emojis en encabezados, `<option>` y `<label>`** (📁 🔗 🎬 📰 ✅ ⭐ 📅 …): los lectores de pantalla los verbalizan ("carpeta de archivos Gestión de Documentos"). Propuesta: `<span aria-hidden="true">📁</span>` o eliminarlos.

---

## Anexo B. Ratios de contraste calculados (paleta)

| Primer plano | Fondo | Ratio | Texto normal (4.5:1) | Texto grande / UI (3:1) |
|---|---|---:|---|---|
| #ed145b (fucsia original) | #ffffff | 4.33 | No cumple | Cumple |
| #db0455 (fucsia corregido) | #ffffff | 5.05 | Cumple | Cumple |
| #ffffff | #ed145b | 4.33 | No cumple | Cumple |
| #ffffff | #db0455 | 5.05 | Cumple | Cumple |
| #ff1744 | #ffffff | 3.85 | No cumple | Cumple |
| #a00340 | #ffffff | 8.13 | Cumple | Cumple |
| gray-400 #99a1af | #ffffff | 2.60 | No cumple | No cumple |
| gray-500 #6a7282 | #ffffff | 4.84 | Cumple | Cumple |
| gray-600 #4a5565 | #ffffff | 7.56 | Cumple | Cumple |
| gray-400 #99a1af | gray-800 #1e2939 | 5.64 | Cumple | Cumple |
| #ffffff | green-600 #00a63e | 3.22 | No cumple | Cumple |
| #ffffff | emerald-500 #00bc7d | 2.47 | No cumple | No cumple |
| #ffffff | amber-500 #fe9a00 | 2.13 | No cumple | No cumple |
| #ffffff | red-600 #e7000b | 4.77 | Cumple | Cumple |
| #ff8fb5 | gray-800 #1e2939 | 7.0 | Cumple | Cumple |

## Anexo C. Páginas verificadas automáticamente

- http://localhost:8085/
- http://localhost:8085/comunicados
- http://localhost:8085/transparencia/documentos
- http://localhost:8085/transparencia/indicador-55
- http://localhost:8085/transparencia/articulo-11
- http://localhost:8085/universidad/presentacion
- http://localhost:8085/universidad/autoridades
- http://localhost:8085/oficinas/admision
- http://localhost:8085/oficinas/biblioteca
- http://localhost:8085/oficinas/cooperacion/directorio
- http://localhost:8085/facultades/sistemas
- http://localhost:8085/facultades/medicina-humana
- http://localhost:8085/facultades/biologia/perfil-profesional
- http://localhost:8085/posgrado
- http://localhost:8085/proyectos/jardin
- http://localhost:8085/capacitaciones-servir
- http://localhost:8085/login
