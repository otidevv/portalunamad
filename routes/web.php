<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AnuncioController;
use App\Http\Controllers\Admin\ComunicadoCategoriaController;
use App\Http\Controllers\Admin\ComunicadoController;
use App\Http\Controllers\Admin\DocumentoController;
use App\Http\Controllers\DocumentosPublicosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionCleanupController;

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('force.clean.home');
Route::get('/anuncio/{anuncio}', [HomeController::class, 'verAnuncio'])->name('anuncio.ver');
Route::get('/comunicados', [HomeController::class, 'listarComunicados'])->name('comunicados.index');
Route::get('/comunicado/{comunicado}', [HomeController::class, 'verComunicado'])->name('comunicado.ver');
Route::get('/api/anuncios/categoria', [HomeController::class, 'anunciosPorCategoria'])->name('anuncios.categoria');

// Rutas públicas de documentos
Route::get('/transparencia/documentos', [DocumentosPublicosController::class, 'index'])->name('documentos.publicos');
Route::get('/transparencia/documento/{documento}/acceder', [DocumentosPublicosController::class, 'acceder'])->name('documentos.publicos.acceder');

Route::get('/universidad/presentacion', function () {
    return view('universidad.presentacion');
});

Route::get('/universidad/autoridades', function () {
    return view('universidad.autoridades');
});

Route::get('/universidad/historia', function () {
    return view('universidad.historia');
});

Route::get('/universidad/sedes', function () {
    return view('universidad.sedes');
});

Route::get('/universidad/politicas', function () {
    return view('universidad.politicas');
});

Route::get('/oficinas/asamblea', function () {
    return view('oficinas.asamblea');
});

Route::get('/oficinas/consejo', function () {
    return view('oficinas.consejo');
});

Route::get('/oficinas/decanatura', function () {
    return view('oficinas.decanatura');
});

Route::get('/oficinas/secretaria', function () {
    return view('oficinas.secretaria');
});

Route::get('/oficinas/calidad', function () {
    return view('oficinas.calidad');
});

Route::get('/oficinas/cooperacion', function () {
    return view('oficinas.cooperacion');
});

Route::get('/oficinas/cooperacion/mision-vision', function () {
    return view('oficinas.cooperacion.mision-vision');
});

Route::get('/oficinas/cooperacion/estructura-organica', function () {
    return view('oficinas.cooperacion.estructura-organica');
});

Route::get('/oficinas/cooperacion/personal-administrativo', function () {
    return view('oficinas.cooperacion.personal-administrativo');
});

Route::get('/oficinas/cooperacion/directorio', function () {
    return view('oficinas.cooperacion.directorio');
});

Route::get('/oficinas/cooperacion/servicios', function () {
    return view('oficinas.cooperacion.servicios');
});

Route::get('/oficinas/cooperacion/convenios', function () {
    return view('oficinas.cooperacion.convenios');
});

Route::get('/oficinas/ambiental', function () {
    return view('oficinas.ambiental');
});

Route::get('/oficinas/ambiental/actividades', function () {
    return view('oficinas.ambiental.actividades');
});

Route::get('/oficinas/administracion', function () {
    return view('oficinas.administracion');
});

Route::get('/oficinas/oti', function () {
    return view('oficinas.oti');
});

Route::get('/oficinas/planeamiento', function () {
    return view('oficinas.planeamiento');
});

Route::get('/oficinas/admision', function () {
    return view('oficinas.admision');
});

Route::get('/oficinas/biblioteca', function () {
    return view('oficinas.biblioteca');
});

Route::get('/oficinas/academicos', function () {
    return view('oficinas.academicos');
});

Route::get('/oficinas/bienestar', function () {
    return view('oficinas.bienestar');
});

Route::get('/oficinas/bienestar/actividades', function () {
    return view('oficinas.bienestar.actividades');
});

Route::get('/oficinas/incubadora', function () {
    return view('oficinas.incubadora');
});

Route::get('/oficinas/innovacion', function () {
    return view('oficinas.innovacion');
});

Route::get('/oficinas/investigacion', function () {
    return view('oficinas.investigacion');
});

Route::get('/facultades/agroindustrial', function () {
    return view('facultades.agroindustrial');
});

Route::get('/facultades/agroindustrial/resena-historica', function () {
    return view('facultades.agroindustrial.resena-historica');
});

Route::get('/facultades/agroindustrial/vision-mision', function () {
    return view('facultades.agroindustrial.vision-mision');
});

Route::get('/facultades/agroindustrial/perfil-profesional', function () {
    return view('facultades.agroindustrial.perfil-profesional');
});

Route::get('/facultades/agroindustrial/campo-ocupacional', function () {
    return view('facultades.agroindustrial.campo-ocupacional');
});

Route::get('/facultades/agroindustrial/objetivos-academicos', function () {
    return view('facultades.agroindustrial.objetivos-academicos');
});

Route::get('/facultades/forestal', function () {
    return view('facultades.forestal');
});

Route::get('/facultades/sistemas', function () {
    return view('facultades.sistemas');
});

Route::get('/facultades/veterinaria', function () {
    return view('facultades.veterinaria');
});

Route::get('/facultades/matematica', function () {
    return view('facultades.matematica');
});

Route::get('/facultades/derecho', function () {
    return view('facultades.derecho');
});

Route::get('/facultades/enfermeria', function () {
    return view('facultades.enfermeria');
});

Route::get('/facultades/ecoturismo', function () {
    return view('facultades.ecoturismo');
});

Route::get('/facultades/administracion', function () {
    return view('facultades.administracion');
});

Route::get('/facultades/contabilidad', function () {
    return view('facultades.contabilidad');
});

Route::get('/posgrado', function () {
    return view('posgrado');
});

Route::get('/proyectos/jardin', function () {
    return view('proyectos.jardin');
});

Route::get('/proyectos/panificadora', function () {
    return view('proyectos.panificadora');
});

Route::get('/proyectos/bus', function () {
    return view('proyectos.bus');
});

Route::get('/proyectos/herbario', function () {
    return view('proyectos.herbario');
});

Route::get('/proyectos/estacion', function () {
    return view('proyectos.estacion');
});

Route::get('/proyectos/aldea', function () {
    return view('proyectos.aldea');
});

Route::get('/proyectos/km16', function () {
    return view('proyectos.km16');
});

Route::get('/proyectos/km18', function () {
    return view('proyectos.km18');
});

Route::get('/transparencia/indicador-55', function () {
    return view('transparencia.indicador-55');
});

Route::get('/transparencia/indicador-55/mv1', function () {
    return view('transparencia.indicador-55.mv1');
});

Route::get('/transparencia/indicador-55/mv2', function () {
    return view('transparencia.indicador-55.mv2');
});

Route::get('/transparencia/indicador-55/mv3', function () {
    return view('transparencia.indicador-55.mv3');
});

Route::get('/transparencia/indicador-55/mv4', function () {
    return view('transparencia.indicador-55.mv4');
});

Route::get('/transparencia/indicador-55/mv5', function () {
    return view('transparencia.indicador-55.mv5');
});

Route::get('/transparencia/indicador-55/mv6', function () {
    return view('transparencia.indicador-55.mv6');
});

Route::get('/transparencia/indicador-55/mv7', function () {
    return view('transparencia.indicador-55.mv7');
});

Route::get('/transparencia/indicador-55/mv8', function () {
    return view('transparencia.indicador-55.mv8');
});

Route::get('/transparencia/indicador-55/mv9', function () {
    return view('transparencia.indicador-55.mv9');
});

Route::get('/transparencia/indicador-55/mv10', function () {
    return view('transparencia.indicador-55.mv10');
});

Route::get('/transparencia/indicador-55/mv11', function () {
    return view('transparencia.indicador-55.mv11');
});

Route::get('/transparencia/indicador-55/mv12', function () {
    return view('transparencia.indicador-55.mv12');
});

Route::get('/transparencia/articulo-11', function () {
    return view('transparencia.articulo-11.index');
});

// Rutas de limpieza de sesión (disponibles siempre)
Route::get('/session/clear', [SessionCleanupController::class, 'clearSession'])->name('session.clear');
Route::get('/session/force-cleanup', [SessionCleanupController::class, 'forceCleanup'])->name('session.force-cleanup');

// Rutas de Autenticación
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    // Panel de Administración
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
        
        // Rutas de Anuncios
        Route::resource('anuncios', AnuncioController::class);
        Route::post('anuncios/{anuncio}/estado', [AnuncioController::class, 'cambiarEstado'])->name('anuncios.estado');
        Route::post('anuncios/{anuncio}/destacado', [AnuncioController::class, 'toggleDestacado'])->name('anuncios.destacado');

        // Rutas de Usuarios
        Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
        Route::post('users/{user}/estado', [\App\Http\Controllers\Admin\UserController::class, 'toggleEstado'])->name('users.estado');
        Route::post('users/{user}/password', [\App\Http\Controllers\Admin\UserController::class, 'changePassword'])->name('users.password');
        
        // Rutas de Comunicado Categorías
        Route::resource('comunicado-categorias', ComunicadoCategoriaController::class);
        Route::post('comunicado-categorias/{comunicadoCategoria}/estado', [ComunicadoCategoriaController::class, 'toggleEstado'])->name('comunicado-categorias.estado');
        
        // Rutas de Comunicados
        Route::resource('comunicados', ComunicadoController::class);
        Route::post('comunicados/{comunicado}/estado', [ComunicadoController::class, 'toggleEstado'])->name('comunicados.estado');
        
        // Rutas de Documentos
        Route::get('documentos', [DocumentoController::class, 'index'])->name('documentos.index');
        Route::post('documentos', [DocumentoController::class, 'store'])->name('documentos.store');
        Route::get('documentos/{documento}', [DocumentoController::class, 'show'])->name('documentos.show');
        Route::get('documentos/{documento}/edit', [DocumentoController::class, 'edit'])->name('documentos.edit');
        Route::put('documentos/{documento}', [DocumentoController::class, 'update'])->name('documentos.update');
        Route::delete('documentos/{documento}', [DocumentoController::class, 'destroy'])->name('documentos.destroy');
        Route::delete('documentos/carpeta/{carpeta}', [DocumentoController::class, 'destroyCarpeta'])->name('documentos.carpeta.destroy');
        Route::post('documentos/{documento}/estado', [DocumentoController::class, 'toggleEstado'])->name('documentos.estado');
        Route::get('documentos/{documento}/acceder', [DocumentoController::class, 'acceder'])->name('documentos.acceder');
        
        // Rutas de ordenamiento
        Route::post('documentos/carpeta/{carpeta}/subir-orden', [DocumentoController::class, 'subirOrdenCarpeta'])->name('documentos.carpeta.subir-orden');
        Route::post('documentos/carpeta/{carpeta}/bajar-orden', [DocumentoController::class, 'bajarOrdenCarpeta'])->name('documentos.carpeta.bajar-orden');
        Route::post('documentos/{documento}/subir-orden', [DocumentoController::class, 'subirOrdenDocumento'])->name('documentos.subir-orden');
        Route::post('documentos/{documento}/bajar-orden', [DocumentoController::class, 'bajarOrdenDocumento'])->name('documentos.bajar-orden');
        
        // Rutas de edición de carpetas
        Route::get('documentos/carpeta/{carpeta}/edit', [DocumentoController::class, 'editCarpeta'])->name('documentos.carpeta.edit');
        Route::put('documentos/carpeta/{carpeta}', [DocumentoController::class, 'updateCarpeta'])->name('documentos.carpeta.update');
        
        // Rutas API para anuncios
        Route::prefix('api')->name('api.')->group(function () {
            Route::get('anuncios', [App\Http\Controllers\Api\AnuncioController::class, 'index'])->name('anuncios.index');
            Route::post('anuncios', [App\Http\Controllers\Api\AnuncioController::class, 'store'])->name('anuncios.store');
            Route::get('anuncios/{anuncio}', [App\Http\Controllers\Api\AnuncioController::class, 'show'])->name('anuncios.show');
            Route::put('anuncios/{anuncio}', [App\Http\Controllers\Api\AnuncioController::class, 'update'])->name('anuncios.update');
            Route::delete('anuncios/{anuncio}', [App\Http\Controllers\Api\AnuncioController::class, 'destroy'])->name('anuncios.destroy');
            Route::put('anuncios/{anuncio}/estado', [App\Http\Controllers\Api\AnuncioController::class, 'updateEstado'])->name('anuncios.estado');
            Route::put('anuncios/{anuncio}/destacado', [App\Http\Controllers\Api\AnuncioController::class, 'toggleDestacado'])->name('anuncios.destacado');
        });
    });
});
