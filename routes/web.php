<?php

use App\Models\Estudiante;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Facultades;
use App\Http\Controllers\Programas;
use App\Http\Controllers\Estudiantes;
use App\Http\Controllers\Calificaciones;
use App\Http\Controllers\Profesores;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [HomeController::class, 'index']);
// Ruta con nombre 
Route::get('/facultades/listado', [Facultades::class, 'index'])->name('listadoFac');

Route::get('/programas/listado', [Programas::class, 'index'])->name('listadoProg');

Route::get('/estudiantes/listado', [Estudiantes::class, 'index'])->name('listadoEst');

Route::get('/profesores/listado', [Profesores::class, 'index'])->name('listadoProf');

Route::get('/regnotas/listado', [Calificaciones::class, 'index']);

Route::get('/facultades/registro',[Facultades::class, 'form_registro']);

Route::post('/facultades/registrar',[Facultades::class, 'registrar']);

Route::get('/estudiantes/registro',[Estudiantes::class, 'form_registro']);

Route::post('/estudiantes/registrar',[Estudiantes::class, 'registrar']);

Route::get('/profesores/registro',[Profesores::class, 'form_registro']);

Route::post('/profesores/registrar',[Profesores::class, 'registrar']);

// Ruta con parámetro
Route::get('/facultades/eliminar/{id}',[Facultades::class, 'eliminar'])->name('eliminaFac');

// Programas
Route::get('/programas/registro',[Programas::class, 'form_registro']);
Route::post('/programas/registrar',[Facultades::class, 'registrar']);




