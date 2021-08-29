<?php

namespace App\Http\Controllers;

use App\Models\endereco;
use App\Models\tecnico;
use App\Models\usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{

    public function index(){

        return view('usuario.index');
    }
    
    public function cadastro(Request $request){

        $endereco = new Endereco();
        $usuario = new Usuario();

        $endereco->id;

        $endereco->cep = $request->cep;
        $endereco->uf = $request->uf;
        $endereco->cidade = $request->cidade;
        $endereco->bairro = $request->bairro;
        $endereco->rua = $request->rua;
        $endereco->numero = $request->numero_casa;

        $endereco->save();
        
        $usuario->nome = $request->nome;
        $usuario->email = $request->email;
        $usuario->senha = $request->senha;
        $usuario->cpf = $request->cpf;
        $usuario->data_nasc = $request->data_nasc;
        $usuario->celular = $request->celular;
        $usuario->telefone = $request->telefone;
        $usuario->endereco_id = $endereco->id;
        $usuario->nivel = 'usuarios';

        $usuario->save();
        
    
        return view("login");
    }


    public function login(Request $request){
        
        $cpf = $request->cpf;
        $senha = $request->senha;

        $usuarios = usuario::where('cpf', '=', $cpf)->where('senha', '=', $senha)->first();
        
        
        if(@$usuarios->id  != null){
            $enderecos = endereco::where('id', '=', $usuarios->endereco_id)->first();
            $tecnicos = tecnico::where('usuario_id', '=', $usuarios->id)->first();

            if(@$usuarios->nivel == 'tecnicos'){
                
                @session_start();
                //Usuario
                $_SESSION['id_usuario'] = $usuarios->id;
                $_SESSION['nome_usuario'] = $usuarios->nome;
                $_SESSION['email_usuario'] = $usuarios->email;
                $_SESSION['senha_usuario'] = $usuarios->senha;
                $_SESSION['cpf_usuario'] = $usuarios->cpf;
                $_SESSION['data_usuario'] = $usuarios->data_nasc;
                $_SESSION['celular_usuario'] = $usuarios->celular;
                $_SESSION['telefone_usuario'] = $usuarios->telefone;
                $_SESSION['endereco_usuario'] = $usuarios->endereco_id;
                $_SESSION['nivel_usuario'] = $usuarios->nivel;
                //Tecnico
                $_SESSION['descricao_tecnico'] = 
                $tecnicos->descricao;

                //Endereco
                $_SESSION['id_endereco'] = $enderecos->id;
                $_SESSION['cep_endereco'] = $enderecos->cep;
                $_SESSION['uf_endereco'] = $enderecos->uf;
                $_SESSION['cidade_endereco'] = $enderecos->cidade;
                $_SESSION['bairro_endereco'] = $enderecos->bairro;
                $_SESSION['rua_endereco'] = $enderecos->rua;
                $_SESSION['numero_endereco'] = $enderecos->numero;

                return view('tecnico.index');
            }else{
                if(@$usuarios->nivel == 'usuarios'){
                    @session_start();
                   //Usuario
                    $_SESSION['id_usuario'] = $usuarios->id;
                    $_SESSION['nome_usuario'] = $usuarios->nome;
                    $_SESSION['email_usuario'] = $usuarios->email;
                    $_SESSION['senha_usuario'] = $usuarios->senha;
                    $_SESSION['cpf_usuario'] = $usuarios->cpf;
                    $_SESSION['data_usuario'] = $usuarios->data_nasc;
                    $_SESSION['celular_usuario'] = $usuarios->celular;
                    $_SESSION['telefone_usuario'] = $usuarios->telefone;
                    $_SESSION['endereco_usuario'] = $usuarios->endereco_id;
                    $_SESSION['nivel_usuario'] = $usuarios->nivel;

                    //Endereco
                    $_SESSION['id_endereco'] = $enderecos->id;
                    $_SESSION['cep_endereco'] = $enderecos->cep;
                    $_SESSION['uf_endereco'] = $enderecos->uf;
                    $_SESSION['cidade_endereco'] = $enderecos->cidade;
                    $_SESSION['bairro_endereco'] = $enderecos->bairro;
                    $_SESSION['rua_endereco'] = $enderecos->rua;
                    $_SESSION['numero_endereco'] = $enderecos->numero;

                    return view('usuario.index');
                }
            }
            
        }else{
            echo "<script language='javascript'>window.alert('Dados Incorretos ou não possui Cadastro!')</script>";
            return view('login');
        }
    }

    public function perfil(){
        return view('usuario.perfilUsuario');
    }

    public function editarPerfil(usuario $usuarios){

        return $usuarios;

    }
}
