<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BusquedaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MensajeController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\PublicoController;
use App\Http\Controllers\UserController;
use App\Models\Evento;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    $eventos = Evento::all();
    $us = User::all();
    return view('welcome', compact('eventos', 'us'));
    /* return route('login'); */
});

Route::redirect('/home', '/', 301);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

/* Route::prefix('admin')->group(function() {
    Route::resource('gestions', GestionController::class);
}); */

Route::middleware(['auth'])->group(function () {
    /* Route::resource('users', UserController::class); */
});

Route::resources([
    'users'         => UserController::class,
    'clientes'      => ClienteController::class,
    'eventos'       => EventoController::class,
    'mensajes'      => MensajeController::class,
    'publicos'      => PublicoController::class,
]);

Route::get('/buscar', [BusquedaController::class, 'buscarGeneral'])->name('buscar.resultado');

Route::get('/visitas-pdf', [PDFController::class, 'visitasPDF'])->name('visitasPDF');
Route::get('/usuarios-pdf', [PDFController::class, 'usuariosPDF'])->name('usuariosPDF');
Route::get('/estadisticas', [PDFController::class, 'estadisticas'])->name('estadisticas');
