<?php

namespace App\Http\Controllers;

use App\Models\tecnico;
use Illuminate\Http\Request;
use usuario;

class TecnicoController extends Controller
{
    public function index(){
        return view('tecnico.index');
    }

    public function criarServico($id){
        $tecnicos = tecnico::where('usuario_id', '=', $id)->first();

        @session_start(); 

        $_SESSION['id_tecnico'] = $tecnicos->id;
        

        return view('tecnico.criarServico');
    }

    public function perfil(){
        return view('tecnico.perfilTecnico');
    }
    
}
