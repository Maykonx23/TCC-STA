<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function login(){
        return view('login');
    }

    public function cadastro(){
        return view('cadastro');
    }
}
