<?php @session_start(); ?>
@extends('layouts.templateTecnico')
@section('title', 'Técnicos')
@section('content')
<div class="">

    <form method="POST" action="{{route("usuario.editarPerfil")}}" class="form-perfil">
        <div class="form-row">
            @csrf
            @method('PUT')
            <!-- DADOS  -->

            <h3 class="col-12">Dados</h3>

            <div class="form-group col-3">
                <Label>Nome</Label>
                <input type="text" class="form-control" value="{{$_SESSION['nome_usuario']}}">
            </div>
            <div class="form-group col-3">
                <Label>Email</Label>
                <input type="text" class="form-control" value="{{$_SESSION['email_usuario']}}">
            </div>
            <div class="form-group col-3">
                <Label>Celular</Label>
                <input id="celular" type="text" class="form-control" value="{{$_SESSION['celular_usuario']}}">
            </div>
            <div class="form-group col-3">
                <Label>Telefone</Label>
                <input id="telefone" type="text" class="form-control" value="{{$_SESSION['telefone_usuario']}}">
            </div>
            <div class="form-group col-3">
                <Label>CPF</Label>
                <input  type="text" class="form-control" value="{{$_SESSION['cpf_usuario']}}">
            </div>
            <div class="form-group col-3">
                <Label>Data Nascimento</Label>
                <input id="data" type="texte" class="form-control" value="{{$_SESSION['data_usuario']}}">
            </div>

            <!-- Endereço  -->

            <h3 class="col-12">Endereço</h3>

            <div class="form-group col-3">
                <Label>CEP</Label>
                <input id="cep" type="text" class="form-control" name="cep" value="{{$_SESSION['cep_endereco']}}">
            </div>
            <div class="form-group col-1">
                <Label>UF</Label>
                <input type="text" class="form-control" name="uf" value="{{$_SESSION['uf_endereco']}}">
            </div>
            <div class="form-group col-4">
                <Label>Cidade</Label>
                <input type="text" class="form-control" name="cidade" value="{{$_SESSION['cidade_endereco']}}">
            </div>
            <div class="form-group col-4">
                <Label>Bairro</Label>
                <input type="text" class="form-control" value="{{$_SESSION['bairro_endereco']}}">
            </div>
            <div class="form-group col-3">
                <Label>Rua</Label>
                <input type="text" class="form-control" value="{{$_SESSION['rua_endereco']}}">
            </div>
            <div class="form-group col-1 disabled">
                <Label>Número</Label>
                <input type="text" class="form-control" value="{{$_SESSION['numero_endereco']}}">
            </div>

            <br>
            <!-- Tecnicos  -->
            <div class="form-group col-12 ">
                <Label>Descrição</Label>
                <textarea name="" class="form-control" cols="15" rows="5" disabled>{{$_SESSION['descricao_tecnico']}}</textarea>
            </div>


        </div>

    </form>

</div>

@endsection