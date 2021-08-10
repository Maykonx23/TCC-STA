<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TecnicoController extends Controller
{
    public function criarServço(){
        return view('tecnico.criarServico');
    }
}
