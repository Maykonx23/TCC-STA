<?php @session_start(); 
    

?>
@extends('layouts.templateTecnico')
@section('title', 'Criar Serviço')
@section('content')
<div class="">

    <form method="POST" action="{{route("tecnicos.criarServico")}}" class="form-criar">
        <div class="form-row">
            @csrf

            <h2 class="col-12">Novo Serviço</h2>

            <div class="form-group col-3">
                <Label>Titulo</Label>
                <select type="text" class="form-control" value="">
                    <option value=""></option>
                    <option value="Impressora">Impressora</option>
                </select>
            </div>
            <div class="form-group col-1">
                <Label>Tempo</Label>
                <input type="time" id="time" class="form-control" value="">
            </div>
            <div class="form-group col-1">
                <Label>Valor</Label>
                <input maxlength="6" type="" name="" id="" class="form-control" value="" inputmode="numeric">
            </div>

            <div class="form-group col-12">
                <Label>Descrição</Label>
                <textarea maxlength="600" type="text" name="" id="" cols="15" rows="10" class="form-control" value="" inputmode="numeric">{{$_SESSION['id_tecnico']}}</textarea>
            </div>



        </div>

    </form>

</div>

@endsection
