<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\LineaController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\SubgrupoController; // Asegúrate de importar el SubgrupoController

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar las rutas web para tu aplicación. Estas
| rutas se cargan por el RouteServiceProvider dentro de un grupo que
| contiene el grupo de middleware "web". ¡Ahora crea algo grandioso!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Rutas CRUD para Tipos
    Route::get('/tipos', [TipoController::class, 'index'])->name('tipos.index');
    Route::get('/tipos/create', [TipoController::class, 'create'])->name('tipos.create');
    Route::post('/tipos', [TipoController::class, 'store'])->name('tipos.store');
    Route::get('/tipos/{tipo}', [TipoController::class, 'show'])->name('tipos.show');
    Route::get('/tipos/{tipo}/edit', [TipoController::class, 'edit'])->name('tipos.edit');
    Route::put('/tipos/{tipo}', [TipoController::class, 'update'])->name('tipos.update');
    Route::delete('/tipos/{tipo}', [TipoController::class, 'destroy'])->name('tipos.destroy');
    /* Route::resource('poliza', SegPolizaController::class)->middleware('auth')->names('seguros.poliza'); */

    // Rutas CRUD para Lineas
    Route::get('/lineas', [LineaController::class, 'index'])->name('lineas.index');
    Route::get('/lineas/create', [LineaController::class, 'create'])->name('lineas.create');
    Route::post('/lineas', [LineaController::class, 'store'])->name('lineas.store');
    Route::get('/lineas/{linea}', [LineaController::class, 'show'])->name('lineas.show');
    Route::get('/lineas/{linea}/edit', [LineaController::class, 'edit'])->name('lineas.edit');
    Route::put('/lineas/{linea}', [LineaController::class, 'update'])->name('lineas.update');
    Route::delete('/lineas/{linea}', [LineaController::class, 'destroy'])->name('lineas.destroy');

    // Rutas CRUD para Grupos
    Route::get('/grupos', [GrupoController::class, 'index'])->name('grupos.index');
    Route::get('/grupos/create', [GrupoController::class, 'create'])->name('grupos.create');
    Route::post('/grupos', [GrupoController::class, 'store'])->name('grupos.store');
    Route::get('/grupos/{grupo}', [GrupoController::class, 'show'])->name('grupos.show');
    Route::get('/grupos/{grupo}/edit', [GrupoController::class, 'edit'])->name('grupos.edit');
    Route::put('/grupos/{grupo}', [GrupoController::class, 'update'])->name('grupos.update');
    Route::delete('/grupos/{grupo}', [GrupoController::class, 'destroy'])->name('grupos.destroy');

    // Rutas CRUD para Subgrupos
    Route::get('/subgrupos', [SubgrupoController::class, 'index'])->name('subgrupos.index');
    Route::get('/subgrupos/create', [SubgrupoController::class, 'create'])->name('subgrupos.create');
    Route::post('/subgrupos', [SubgrupoController::class, 'store'])->name('subgrupos.store');
    Route::get('/subgrupos/{subgrupo}', [SubgrupoController::class, 'show'])->name('subgrupos.show');
    Route::get('/subgrupos/{subgrupo}/edit', [SubgrupoController::class, 'edit'])->name('subgrupos.edit');
    Route::put('/subgrupos/{subgrupo}', [SubgrupoController::class, 'update'])->name('subgrupos.update');
    Route::delete('/subgrupos/{subgrupo}', [SubgrupoController::class, 'destroy'])->name('subgrupos.destroy');

    // Otras rutas de menú
    Route::get('/menu2', function () { return view('menu2'); })->name('menu2');
    Route::get('/menu3', function () { return view('menu3'); })->name('menu3');
    Route::get('/menu4', function () { return view('menu4'); })->name('menu4');
    Route::get('/menu5', function () { return view('menu5'); })->name('menu5');
    Route::get('/menu6', function () { return view('menu6'); })->name('menu6');
    Route::get('/menu7', function () { return view('menu7'); })->name('menu7');
    Route::get('/menu8', function () { return view('menu8'); })->name('menu8');
    Route::get('/menu9', function () { return view('menu9'); })->name('menu9');
    Route::get('/menu10', function () { return view('menu10'); })->name('menu10');
});
