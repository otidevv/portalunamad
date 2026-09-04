# Evidencia de cumplimiento de accesibilidad web – Portal UNAMAD

**Marco normativo:** Ley N° 29973, Ley General de la Persona con Discapacidad (art. 22, accesibilidad en los medios de comunicación y portales web), Reglamento D.S. N° 002-2014-MIMP, NTP-ISO/IEC 40500:2012 (equivalente a WCAG 2.0) y WCAG 2.1 nivel AA como estándar técnico aplicado; requisito de SUNEDU sobre condiciones básicas de calidad y accesibilidad del portal institucional.
**Periodo de trabajo:** 3 y 4 de septiembre de 2026.
**Repositorio:** portal institucional (Laravel 12 + Blade + Tailwind CSS 4). Commits desde `9a8435b` hasta `ee58472` en la rama `main`.

## 1. Alcance

| Elemento | Detalle |
|---|---|
| Plantillas revisadas | 163 vistas Blade (portal público y panel de administración), hojas de estilo, scripts propios |
| Páginas verificadas automáticamente | 17 (portada, comunicados, transparencia, universidad, oficinas, facultades, posgrado, proyectos, capacitaciones, acceso) |
| Archivos modificados | 170 (9371 líneas añadidas, 7365 eliminadas) |
| Informe de auditoría | `AUDITORIA_ACCESIBILIDAD.md` (1.591 hallazgos con archivo y línea, organizados por criterio WCAG) |

## 2. Problemas encontrados (síntesis)

| Criterio WCAG 2.1 | Hallazgos | Ejemplos |
|---|---:|---|
| 1.1.1 Contenido no textual | 292 | Fotos de autoridades y docentes sin alt, banners con texto, iconos SVG no ocultos a lectores de pantalla |
| 1.2 Multimedia | 13 | Video emergente e iframes sin título ni subtítulos, himno sin transcripción |
| 1.3.1 Información y relaciones | 353 | Menús con h3/h5/h6 antes del h1, vistas sin h1, tablas sin th/scope/caption, campos sin label |
| 1.3.3 / 1.4.1 Uso del color | 54 | Estados activos y leyendas solo por color |
| 1.4.3 / 1.4.11 Contraste | 209 | Fucsia institucional #ed145b (4.33:1), gray-400 sobre blanco (2.6:1), insignias verdes y naranjas |
| 1.4.4 / 1.4.10 Redimensionado | 29 | Alturas fijas con recorte, submenús móviles cortados, nowrap |
| 2.1.1 Teclado | 19 | Mega-menús solo con hover, divs con onclick, carrusel y modal sin control por teclado |
| 2.4.1 Bloques | 112 | Navegaciones laterales sin nombre ni lista |
| 2.4.2 Título de página | 79 | Vistas sin @section('title') |
| 2.4.4 Propósito del enlace | 157 | "Ver más", "Descargar" repetidos; enlaces con solo icono; ventanas nuevas sin aviso |
| 2.4.6 / 2.4.7 Encabezados y foco | 25 | outline-none sin alternativa, encabezados vacíos |
| 3.1.2 Idioma | 47 | "Dashboard", "Breadcrumb", "Short" visibles |
| 3.2 / 3.3 Previsible y ayuda a la entrada | 31 | Modal y video que se abren solos sin foco, campos obligatorios sin marcar, errores sin asociar |
| 4.1.2 / 4.1.3 Nombre, rol, valor y estado | 154 | aria-controls con ids aleatorios, aria-haspopup incorrecto, botones sin type, avisos sin aria-live |

## 3. Correcciones aplicadas (referencia a commits)

Todos los cambios se hicieron en commits pequeños por categoría, con el prefijo `fix(a11y)`, `feat(a11y)`, `chore(a11y)` o `docs(a11y)`:

| Commit | Fecha | Descripción |
|---|---|---|
| `64f82a3` | 2026-09-03 | fix(a11y): unificar el color institucional en #db0455 para cumplir contraste |
| `7f64d4f` | 2026-09-03 | feat(a11y): barra de accesibilidad con lectura en voz alta y persistencia |
| `295f9ef` | 2026-09-03 | fix(a11y): navegación por teclado, ARIA y estructura en los layouts |
| `a54a124` | 2026-09-03 | chore(a11y): verificación automática con pa11y-ci (npm run a11y) y línea base |
| `77ddb10` | 2026-09-03 | docs(a11y): informe de auditoría WCAG 2.1 AA del portal |
| `70d52a9` | 2026-09-03 | chore: ignorar worktrees locales de .claude |
| `79c8dc5` | 2026-09-03 | fix(a11y): agregar textos alternativos a imágenes e iconos (facultades) |
| `c9d2861` | 2026-09-03 | fix(a11y): agregar textos alternativos a imágenes e iconos (transparencia) |
| `819c1a6` | 2026-09-03 | fix(a11y): agregar textos alternativos a imágenes e iconos (home) |
| `f6a2d20` | 2026-09-03 | fix(a11y): títulos de página, jerarquía de encabezados y landmarks (transparencia) |
| `cc21775` | 2026-09-03 | fix(a11y): agregar textos alternativos a imágenes e iconos (oficinas) |
| `a1fdcd8` | 2026-09-03 | fix(a11y): agregar textos alternativos a imágenes e iconos (admin) |
| `ce5f9ba` | 2026-09-03 | fix(a11y): títulos de página, jerarquía de encabezados y landmarks (facultades) |
| `7029187` | 2026-09-03 | fix(a11y): títulos de página, jerarquía de encabezados y landmarks (home) |
| `213d354` | 2026-09-03 | fix(a11y): enlaces descriptivos y botones con nombre accesible (transparencia) |
| `ff3fea5` | 2026-09-03 | fix(a11y): etiquetas, ayuda a la entrada y mensajes de estado en formularios (home) |
| `21466dc` | 2026-09-03 | fix(a11y): tablas de datos con caption y encabezados con scope (home) |
| `ed4f3c2` | 2026-09-03 | fix(a11y): enlaces descriptivos y botones con nombre accesible (facultades) |
| `2c2fc24` | 2026-09-03 | fix(a11y): títulos de página, jerarquía de encabezados y landmarks (admin) |
| `609edaa` | 2026-09-03 | fix(a11y): contraste de color y uso del color (facultades) |
| `e498e37` | 2026-09-03 | fix(a11y): contraste de color y uso del color (transparencia) |
| `6b14fd8` | 2026-09-03 | fix(a11y): títulos de página, jerarquía de encabezados y landmarks (oficinas) |
| `0dedae7` | 2026-09-03 | fix(a11y): operabilidad por teclado, foco visible y ARIA en componentes interactivos (facultades) |
| `81be806` | 2026-09-03 | fix(a11y): operabilidad por teclado, foco visible y ARIA en componentes interactivos (transparencia) |
| `9767e24` | 2026-09-03 | fix(a11y): redimensionado de texto e idioma de partes (facultades) |
| `67f805e` | 2026-09-03 | fix(a11y): enlaces descriptivos y botones con nombre accesible (home) |
| `bc345d0` | 2026-09-03 | fix(a11y): redimensionado de texto e idioma de partes (transparencia) |
| `5e13b04` | 2026-09-03 | fix(a11y): enlaces descriptivos y botones con nombre accesible (oficinas) |
| `f881ad5` | 2026-09-03 | fix(a11y): títulos de página, jerarquía de encabezados y landmarks (transparencia) |
| `d604ed6` | 2026-09-03 | fix(a11y): reaplicar color de contraste #db0455 tras integrar facultades |
| `b2c6cc0` | 2026-09-03 | fix(a11y): contraste de color y uso del color (home) |
| `b702c88` | 2026-09-03 | fix(a11y): contraste de color y uso del color (oficinas) |
| `afd289d` | 2026-09-03 | fix(a11y): operabilidad por teclado, foco visible y ARIA en componentes interactivos (oficinas) |
| `436a100` | 2026-09-03 | fix(a11y): redimensionado de texto e idioma de partes (oficinas) |
| `0fa9fec` | 2026-09-03 | fix(a11y): operabilidad por teclado, foco visible y ARIA en componentes interactivos (home) |
| `4b4ec4c` | 2026-09-04 | fix(a11y): multimedia con título, subtítulos y controles (home) |
| `74f38f0` | 2026-09-04 | fix(a11y): redimensionado de texto e idioma de partes (home) |
| `7324ca5` | 2026-09-04 | fix(a11y): reaplicar color de contraste #db0455 tras integrar portada y vistas generales |
| `62cc360` | 2026-09-04 | fix(a11y): etiquetas, ayuda a la entrada y mensajes de estado en formularios (admin) |
| `c258b9b` | 2026-09-04 | fix(a11y): tablas de datos con caption y encabezados con scope (admin) |
| `48ab419` | 2026-09-04 | fix(a11y): enlaces descriptivos y botones con nombre accesible (admin) |
| `2f53932` | 2026-09-04 | fix(a11y): contraste de color y uso del color (admin) |
| `f15755b` | 2026-09-04 | fix(a11y): corregir hallazgos residuales de la verificación automática |
| `8e379f7` | 2026-09-04 | fix(a11y): operabilidad por teclado, foco visible y ARIA en componentes interactivos (admin) |
| `05c8ce9` | 2026-09-04 | fix(a11y): multimedia con título, subtítulos y controles (admin) |
| `257bb79` | 2026-09-04 | fix(a11y): redimensionado de texto e idioma de partes (admin) |
| `ee58472` | 2026-09-04 | chore(a11y): resultado de pa11y-ci tras las correcciones y configuración de informe |

### 3.1 Cambios transversales (layouts)

- Color institucional unificado en `#db0455` (5.05:1) en todo el sitio; enlaces de la barra superior oscura en `#ff8fb5` con subrayado.
- Mega-menús de escritorio con patrón *disclosure* (Enter/Espacio, Escape, cierre al salir con Tab), `aria-expanded`/`aria-controls` estables, botones de Vicerrectorados operables.
- Menú móvil con Escape, fondo `inert`, ids únicos y submenús sin recorte.
- Encabezados de menús convertidos a párrafos y pie con h2; enlace "Ir al contenido principal" también en el panel de administración.
- Aviso "(se abre en una ventana nueva)" y `rel="noopener"` añadidos automáticamente a todo enlace `target="_blank"`, y `aria-current="page"` en el enlace de la página actual.
- Video emergente y modal de anuncios con gestión de foco, trampa de foco y devolución del foco al cerrar.

### 3.2 Cambios por grupo de vistas

Cada grupo se corrigió sobre su informe de auditoría con commits por categoría (ver tabla anterior). Los hallazgos que no pudieron resolverse en código y su motivo se listan en la sección 6.

## 4. Herramientas de apoyo implementadas

**Barra de accesibilidad** (`resources/views/partials/barra-accesibilidad.blade.php`, `resources/js/accesibilidad.js`, `resources/css/accesibilidad.css`), visible en todas las páginas del portal y del panel de administración, con botón flotante y atajo Alt + 0:

| Función | Implementación |
|---|---|
| Aumentar / disminuir tamaño de texto | 8 niveles (80 % a 160 %) sobre el tamaño raíz; todo el sitio escala en rem |
| Modo alto contraste | Fondo negro, texto blanco, enlaces amarillos (ratio > 7:1), foco amarillo |
| Escala de grises | Filtro CSS sobre el documento |
| Resaltar enlaces | Subrayado, fondo amarillo y borde en todos los enlaces |
| Fuente para dislexia | Tipografías de trazo reconocible (OpenDyslexic si está instalada, Comic Sans/Verdana como alternativa) con mayor interlineado y espaciado |
| Detener animaciones | Desactiva transiciones y animaciones CSS |
| Lectura en voz alta | Web Speech API (SpeechSynthesis) con voz en español (es-PE, es-MX, es-ES…), lee el texto seleccionado o el contenido principal bloque a bloque, con Pausar/Reanudar/Detener y resaltado del bloque leído |
| Restablecer configuración | Vuelve a los valores por defecto |
| Persistencia | `localStorage` (clave `unamad_a11y`); las preferencias se reaplican antes del primer render para evitar parpadeos |
| Accesibilidad de la propia barra | `role="region"` con nombre, botones con `aria-pressed`/`aria-expanded`/`aria-controls`, cierre con Escape y devolución del foco, región `role="status"` para anunciar cambios |

**Verificación automática** (`npm run a11y`): pa11y-ci 4.1 con axe-core 4.11 y HTML_CodeSniffer, estándar WCAG2AA, sobre 17 URL del sitio en ejecución (`.pa11yci.json`). `npm run a11y:report` guarda el resultado en `docs/accesibilidad/reporte-despues.json`.

## 5. Resultado de la verificación automática

| Indicador | Antes (`9a8435b`) | Después (`ee58472`) |
|---|---:|---:|
| Páginas analizadas | 17 | 17 |
| Páginas sin errores | 0 | 17 |
| Errores confirmados | 175 | 0 |
| Avisos para revisión manual (resultados "incompletos" de axe) | 1457 | 1640 |

### 5.1 Errores por página

| Página | Antes | Después |
|---|---:|---:|
| / | 14 | 0 |
| /comunicados | 9 | 0 |
| /transparencia/documentos | 8 | 0 |
| /transparencia/indicador-55 | 6 | 0 |
| /transparencia/articulo-11 | 8 | 0 |
| /universidad/presentacion | 6 | 0 |
| /universidad/autoridades | 6 | 0 |
| /oficinas/admision | 8 | 0 |
| /oficinas/biblioteca | 10 | 0 |
| /oficinas/cooperacion/directorio | 6 | 0 |
| /facultades/sistemas | 6 | 0 |
| /facultades/medicina-humana | 6 | 0 |
| /facultades/biologia/perfil-profesional | 6 | 0 |
| /posgrado | 6 | 0 |
| /proyectos/jardin | 6 | 0 |
| /capacitaciones-servir | 58 | 0 |
| /login | 6 | 0 |

### 5.2 Errores por regla

| Regla | Antes | Después |
|---|---:|---:|
| `WCAG2AA.Principle1.Guideline1_4.1_4_3.G18.Fail` | 85 | 0 |
| `color-contrast` | 45 | 0 |
| `link-name` | 17 | 0 |
| `WCAG2AA.Principle4.Guideline4_1.4_1_2.H91.A.NoContent` | 17 | 0 |
| `WCAG2AA.Principle1.Guideline1_3.1_3_1.F68` | 3 | 0 |
| `WCAG2AA.Principle4.Guideline4_1.4_1_2.H91.InputText.Name` | 2 | 0 |
| `WCAG2AA.Principle1.Guideline1_3.1_3_1.H42.2` | 1 | 0 |
| `WCAG2AA.Principle4.Guideline4_1.4_1_1.F77` | 1 | 0 |
| `select-name` | 1 | 0 |
| `WCAG2AA.Principle4.Guideline4_1.4_1_2.H91.Select.Name` | 1 | 0 |
| `button-name` | 1 | 0 |
| `WCAG2AA.Principle4.Guideline4_1.4_1_2.H91.Button.Name` | 1 | 0 |

Los avisos ("incompletos") corresponden en su gran mayoría a la regla `color-contrast` de axe sobre textos superpuestos a imágenes o degradados, que la herramienta no puede calcular; se revisaron manualmente y se añadieron capas oscuras (`bg-black/50`) donde el contraste dependía de la fotografía. Su número aumenta tras las correcciones porque las páginas exponen más elementos analizables (listas, tablas alternativas, textos sr-only).

### 5.3 Verificación manual complementaria

- Navegación completa por teclado de cabecera, mega-menús, menú móvil, barra de accesibilidad, video emergente y modal de anuncios (Tab, Enter, Espacio, Escape) en Chrome.
- Comprobación de un único h1 por página, imágenes con alt, botones y enlaces con nombre accesible mediante script en consola sobre la portada.
- Contraste de la paleta calculado con la fórmula WCAG (Anexo B del informe de auditoría).
- Pruebas de la barra de accesibilidad: aumento de texto, alto contraste, resaltar enlaces, restablecer y persistencia tras recargar.

## 6. Hallazgos que requieren acción del área usuaria

### Portada y vistas generales

1. **Banners del slider (1.1.1)** — alt redactados según el tema de cada banner ("Campus de la UNAMAD en Puerto Maldonado", etc.). Si las imágenes contienen texto (convocatorias, fechas), el área de comunicación debe transcribirlo en el alt.
2. **Himno UNAMAD (1.2.1)** — no existe letra/transcripción ni pista de subtítulos; requiere que el área usuaria facilite la letra para añadir un enlace "Letra del himno".
3. **Videos SERVIR (1.2.x)** — contenido externo de YouTube/cutt.ly; solo se añadió la nota sobre subtítulos CC. Las transcripciones dependen del proveedor (SERVIR).
4. **reCAPTCHA v2 (1.3.1/1.1.1)** — widget en iframe externo; su alternativa de audio la gestiona Google.
5. **Apertura automática del modal de anuncios (3.2.x)** — se conserva por indicación de la guía; queda mitigado con foco, Escape y devolución de foco. Se recomienda evaluar en producto abrirlo solo a petición o coordinarlo con el video emergente (`partials/video-destacado`, otro grupo).
6. **Reproductor en anchos ≤800 px (1.4.4)** — ya no se oculta por nivel de zoom, pero en pantallas estrechas sigue mostrándose solo el botón flotante; ofrecer progreso/volumen apilados requiere rediseño.
7. **Estatuto / Plan Estratégico (presentación)** — enlazan al portal de Documentos Normativos y de Gestión al no existir rutas propias; se indica en sr-only.

### Facultades

1. **2.4.4 «Facultades» no navegable en las migas (28 vistas de la plantilla B + 6 de la plantilla A).** No existe ruta ni vista índice `/facultades`; crear la ruta requiere editar `routes/web.php` y una vista nueva fuera del grupo. En la plantilla A el enlace que devolvía 404 se sustituyó por texto (misma solución que ya usaba la plantilla B). Pendiente para el equipo: crear la página índice y enlazar la miga.
2. **2.4.4 `en-desarrollo` «Portal UNAMAD» con `target="_blank"`.** Según la guía, el layout ya añade por JS el aviso «(se abre en una ventana nueva)»; no se duplicó.
3. **Observación: `background-attachment: fixed` (parallax) en el hero de la plantilla B (28 vistas).** Es un estilo inline; respetar `prefers-reduced-motion` exige una clase en CSS global (`resources/css/app.css`, fuera del grupo) o una media query. No bloquea AA (2.3.3 es AAA).
4. **Observación 3.1.4 (AAA): siglas sin `<abbr>` en biologia/campo-ocupacional.** Fuera del alcance AA.
5. **Recomendación tipográfica (texto `text-xs` de 12 px en los partials).** Cumple contraste tras los cambios; aumentar el tamaño alteraría el diseño y no es un requisito AA.
6. **Hallazgos de 1.4.3 marcados como «pasa» en el informe** (hero de administracion/contabilidad/enfermeria, cifras grandes, correos violet/indigo/blue-600): no se tocaron para no alterar el diseño.

### Oficinas y proyectos

- **P1** enlace de inicio solo icono: `aria-label="Inicio"` (8 vistas) + SVG oculto.
- **P2** SVG decorativos: `aria-hidden="true" focusable="false"` en los 489 SVG inline del grupo.
- **P3** subtítulo de hero: sin `opacity-90`; degradados de marca `from-[#b8003f] to-[#db0455]` (≥5.05:1 con blanco) y velo `/90` sobre foto; en proyectos, velo `bg-black/40` en estación, jardín y panificadora.
- **P4** enlace activo: lo marca el layout (`aria-current="page"`); el CSS `.active`/`[aria-current="page"]` vuelve a aplicarse tras sustituir `@apply` por CSS plano.
- **P5** `<nav aria-label="Secciones de …">` en los 21 partials y calidad; migas de pan `<nav aria-label="Miga de pan">` con `<ol>/<li>` y `aria-current="page"` (16 vistas de plantilla simple) y "Breadcrumb" traducido en las demás.
- **P6** `target="_blank"`: aviso automático del layout; se añadió `rel="noopener"`.
- **P7** listas con `<div>` → `<ul>/<ol>` (funciones de 8 oficinas, áreas, pilares, modalidades y pasos `type="A"`, niveles, tarjetas de personal/servicios/ámbitos, objetivos de aldea/estación/panificadora); pares etiqueta/valor de sidebars y ficha de evento → `<dl>`.
- **P8** `@section('title')` en 14 vistas; título de panificadora sin duplicado.
- **P9** `<style>` con `@apply` reescrito como CSS plano en 5 partials + calidad (estado activo visible, deshabilitados con contraste).
- Imágenes complejas (flujograma, organigrama): `<figure>/<figcaption>`, `alt` que resume y `aria-describedby` a la descripción textual de la página. Fotos de fondo `alt=""`. Emojis e insignias de letra/número ocultos a AT.
- Contraste puntual: insignias `bg-*-500`→`-700`, "Próximamente" `text-gray-700`, deshabilitados `#4b5563`, `text-green-700`, botón `bg-orange-700`, migas de proyectos en tonos 700/800, numeración de panificadora 800, tarjetas `bg-white/20`→`/10` en bloques de degradado.
- **calidad**: sidebar `<aside>` responsive (`flex-col lg:flex-row`, `w-full lg:w-80`); menú como lista real con "Inicio" enlazado a la página; script de pestañas retirado; salto h2→h4 corregido, `<h5>` partidos unificados, mayúsculas literales → `uppercase`, descripción sr-only del organigrama; `href="#"` de "Enlaces Útiles" y botones sin acción convertidos en elementos no interactivos/deshabilitados con nota.
- **convenios**: `href="#"` "Español/Inglés" → botones deshabilitados con contexto sr-only (Marco/Específico) y nota visible con correo de contacto (no existen los archivos en `public/`).
- Enlaces: instrucciones "menú de la izquierda" → enlaces directos; "Link de Inscripción" → "Enlace de inscripción a la videoconferencia"; "Volver al Inicio" → "Volver a Bienestar Universitario"; "Misión Vision Objetivos" → "Misión, Visión y Objetivos"; teléfonos/correos como `tel:`/`mailto:`.

### Transparencia

1. **variable.blade.php L37 (1.3.1)** — `{!! HtmlSanitizer::clean($variable->contenido) !!}` inyecta HTML editado en el panel de administración sin control de niveles de encabezado ni `alt`. La solución está en el editor/sanitizador del admin (fuera de los archivos del grupo). Recomendación: restringir en `HtmlSanitizer` los encabezados a h2–h4 y exigir `alt` en imágenes.
2. **mv11 L1612 (2.4.4, observación)** — el enlace "028-2019-CFI" apunta a `CamScanner_03-04-2025_09.16.pdf`; el nombre del archivo no es descriptivo. Se añadió contexto sr-only al enlace, pero renombrar el archivo corresponde al área usuaria (sinc.unamad.edu.pe).
3. **mv12 secciones "Diseño Curricular 2024" y "Malla Curricular 2023" (2.4.4, observación)** — enlazan exactamente los mismos 11 PDF. Se diferenciaron los nombres accesibles ("Ver Diseño Curricular: X" / "Ver Malla Curricular: X"), pero decidir si se eliminan los duplicados o se publican las mallas 2023 reales requiere contenido del área usuaria.

Notas adicionales:

- **Aviso de ventana nueva** en los 335 `target="_blank"`: no se añadió a mano porque la guía indica que el layout lo inyecta por JS (ese JS no está en este worktree; lo aporta el grupo del layout).
- **Partial huérfano** `indicador-55/partials/navigation.blade.php`: la auditoría proponía eliminarlo; se corrigió en lugar de borrarlo ("no eliminar funcionalidad"). Puede borrarse sin efecto, ya que ninguna vista lo incluye.
- **Clases dinámicas de Tailwind v4** (`bg-{{ $color }}-700`, `text-{{ $color }}-700 hover:…-900`): `app.css` no tiene safelist, así que se añadió en cada bloque `@php` un comentario con las clases literales para que el escaneo `@source` las genere. Si el grupo de CSS global lo permite, es preferible un `@source inline(...)` en `resources/css/app.css`.
- **Verificación**: balance de directivas Blade (`@section/@endsection`, `@if/@endif`, `@foreach/@endforeach`, `@php/@endphp`) y de etiquetas (`ul/li/nav/a/span/h1-6`) comprobado por conteo en los 18 archivos: todos cuadran. No fue posible compilar las vistas (`php artisan view:cache`) ni `npm run build` porque el PHP del host es 7.4 y Sail no está levantado; conviene ejecutarlos al integrar.

### Panel de administración

1. **T7 toastr / región `aria-live` persistente**: debe crearse en `resources/views/admin/layouts/app.blade.php` (archivo excluido del grupo). Las llamadas `toastr.*` de las vistas quedan igual.
2. **Recargas automáticas (`window.location.reload()` a 800–1500 ms)** tras guardar/cambiar estado: se conservan por ser funcionalidad existente; con la región persistente del layout el aviso será anunciado antes de la recarga.
3. **Subtítulos y transcripciones** del video destacado (`videos-destacados/edit`): requieren contenido (archivo de subtítulos/transcripción) del área usuaria.
4. **Alternativa textual dinámica del gráfico** (`datasets/show`): la lógica de agregación está en `public/js/dataset-chart.js` (fuera del alcance); se dejó un `role="img"` con descripción estática y referencia a la tabla de filas.
5. **`<h1>`/`<h2>` dentro del contenido HTML del editor** en `comunicados/show`: depende del sanitizador/`valid_elements` del backend.
6. **Fondo inerte de los modales** (`inert` en el resto de la página) y capa de fondo del modal de anuncios: se implementó trampa de foco + Escape + retorno de foco; hacer inerte el resto requiere tocar el layout.
7. **`autocomplete="name|email"`** en el modal de usuarios: no aplica (los campos describen a otra persona, no al usuario que rellena).
8. **`placeholder-gray-400`**: se mantiene; todos los campos ya tienen etiqueta y ayuda visible, el placeholder no es la única instrucción.
9. **Observaciones no WCAG** del informe (valor fijo "1,284" en el panel, `console.log` con DNI): no se tocaron por no ser de accesibilidad.

## 7. Mantenimiento del cumplimiento

1. Ejecutar `npm run a11y` con el sitio levantado antes de cada despliegue; el comando devuelve código de salida distinto de cero si aparece algún error.
2. Al crear contenido desde el panel (anuncios, comunicados, documentos, videos), redactar textos alternativos descriptivos, títulos de enlace con el tipo de archivo y, en videos, adjuntar subtítulos (archivo .vtt) o transcripción.
3. Mantener el color `#db0455` (o más oscuro) para texto sobre blanco; no reintroducir `#ed145b` en texto.
4. Toda nueva vista debe definir `@section('title')`, un único `<h1>` y etiquetas `<label>` en sus formularios.

## 8. Archivos de evidencia

- `AUDITORIA_ACCESIBILIDAD.md`: informe de auditoría completo.
- `docs/accesibilidad/reporte-antes.json` y `docs/accesibilidad/reporte-despues.json`: salidas de pa11y-ci antes y después.
- `.pa11yci.json`: configuración de la verificación automática.
- Historial de commits `fix(a11y)` en el repositorio (`git log --grep=a11y`).
