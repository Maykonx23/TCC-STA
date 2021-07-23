<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuarioController;

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
/*
Route::get('/', HomeController::class)->name('Teste');
*/
Route::get('/', HomeController::class);

Route::get('/login', [UsuarioController::class, 'login'])->name('login');

Route::get('/cadastro', [UsuarioController::class, 'cadastro'])->name('cadastro');

/*
Route::get('/paineis/index', [\app\Http\Controllers\UsuarioController::class,  'logar'])->name('paineis.logar');



