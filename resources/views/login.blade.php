@extends('layouts.templateLC')
@section('title', 'LOGIN')
@section('content')

<div class="container">
    
    <div class="login">

        <h1>LOGIN</h1>
        <form  id="login-form" class="form_login" action="{{route('usuarios.login')}}" method="POST">
            @csrf
            <div class="form-group row">
                <div class="col-sm-10">
                <img class="icones" src="{{ URL::asset('assets/icons/perfil-de-usuario.png') }}" alt="">
                <label for="cpf" id="" class="col-sm-2col-form-label">CPF</label>

                <input type="texte" name="cpf" class="form-control" id="cpf" placeholder="Digite seu CPF">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                <img class="icones" src="{{ URL::asset('assets/icons/cadeado.png') }}" alt="">
                <label id="senha" for="password" class="col-sm-2 col-form-label">SENHA</label>
                
                <input type="password" name="senha" class="form-control" id="senha" placeholder="Digite sua Senha">
            </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                <button type="submit" name="submit" class="btn btn-primary" value="Logar">Entrar</button>
                </div>
            </div>
            
            </form>
            <hr class="linha">

            <div class="col-12">
                <a class="esqueceu" href="#">Esqueceu a senha?</a>
                <a class="cadastrar_se" href="{{route('cadastro')}}">Cadastrar-se</a>
            </div>
    </div>

</div>
@endsection

