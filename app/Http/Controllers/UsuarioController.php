<?php

namespace App\Http\Controllers;

use App\Models\endereco;
use App\Models\usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller

{public function index(){
        $usuarios = endereco::all();
        return  view('usuarios.index', ['usuarios' => $usuarios]);
    }
    
}
