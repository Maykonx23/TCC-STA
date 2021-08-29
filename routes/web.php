<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TecnicoController;
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

Route::get('usuario', [UsuariosController::class, 'index'])->name('usuario.index');

Route::get('usuario/perfil', [UsuariosController::class, 'perfil'])->name('usuario.perfil');

Route::get('usuario/perfil/edit', [UsuariosController::class, 'editarPerfil'])->name('usuario.editarPerfil');


/* Rotas Tecnicos */
Route::get('tecnico/index', [TecnicoController::class, 'index'])->name('tecnicos.index');

Route::get('tecnico/criar/servico', [TecnicoController::class, 'criarServico'])->name('tecnicos.criarServico');

Route::get('tecnico/perfil', [TecnicoController::class, 'perfil'])->name('tecnicos.perfil');

Route::get('tecnico/index', [TecnicoController::class, 'index'])->name('tecnico.index');