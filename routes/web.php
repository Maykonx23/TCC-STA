<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosController;

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
/* Rotas Home */
Route::get('/', HomeController::class)->name('index');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/cadastro', [HomeController::class, 'cadastro'])->name('cadastro');

/* Rotas Usuarios */
Route::post('usuario', [UsuariosController::class, 'login'])->name('usuarios.login');
Route::post('cadastrar', [UsuariosController::class, 'cadastro'])->name('usuarios.cadastros');

Route::get('usuario/index', [UsuariosController::class, 'index'])->name('usuario.index');

/* Rotas Tecnicos */
Route::get('tecnicos/index', [TecnicosController::class, 'index'])->name('tecnicos.index');