@extends('layouts.templateLC')
@section('title', 'CADASTRO')
@section('content')

<div class="container container2">

    <div class="cadastro_bg">

        <div class="col-12">
            <h1  class="cadastro">CADASTRO</h1>
        </div>

        <div class="col-12 dados">
            <h4>Dados</h4>
        </div>

        <form method="POST" class="form-cadastro row" action="{{route('usuarios.cadastros')}}">
            @csrf

                <div class="form-group col-3 nome">
                    <label for="nome">Nome</label>
                    <input name="nome" type="text" class="form-control" id="nome" placeholder="Nome Completo">
                </div>

                <div class="form-group col-3 email">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Email" autocomplete="off">
                </div>

                <div class="form-group col-2 celular">
                    <label for="celular">Celular</label>
                    <input name="celular" type="celular" class="form-control" id="celular" placeholder="(00) 00000-0000">
                </div>

                <div class="form-group col-3 telefone">
                    <label for="celular">Telefone</label>
                    <input name="telefone" type="telefone" class="form-control" id="telefone" placeholder="(00) 0000-0000">
                </div>

                <div class="form-group col-3 cpf">
                    <label for="cpf">CPF</label>
                    <input name="cpf" type="text" class="form-control" id="cpf" placeholder="CPF">
                </div>

                <div class="form-group col-2 data_nasc">
                    <label for="data_nasc">Data Nascimento</label>
                    <input name="data_nasc" type="date" class="form-control" id="data_nasc data">
                </div>

                <div class="form-group col-3 senha">
                    <label for="senha">Senha</label>
                    <input name="senha" type="password" class="form-control" id="senha" placeholder="Senha" autocomplete="off">
                </div>

                <div class="form-group col-3 senha_conf">
                    <label for="senha_conf">Senha</label>
                    <input type="password" class="form-control" id="senha_conf" placeholder="Confirmar Senha">
                </div>

                <!--Inicio Endereço-->
                <div class="col-12 endereco">
                    <h4>Endereço</h4>
                </div>

                <div class="form-group col-3 cep">
                    <label for="cep">CEP</label>
                    <input name="cep" type="text" class="form-control" id="cep" placeholder="CEP">
                </div>

                <div class="form-group col-1 uf">
                    <label for="uf">UF</label><br>
                    <select  name="uf" class="form-control" id="uf">
                        <option value=""></option>
                        <option value="MS">MS</option>
                        <option value="MT">MT</option>
                    </select>
                </div>

                <div class="form-group col-4 cidade">
                    <label for="cidade">Cidade</label>
                    <input name="cidade" type="text" class="form-control" id="cidade" placeholder="Cidade">
                </div>

                <div class="form-group col-3 bairro">
                    <label for="bairro">Bairro</label>
                    <input name="bairro" type="text" class="form-control" id="bairro" placeholder="Bairro">
                </div>

                <div class="form-group col-3 rua">
                    <label for="rua">Rua</label>
                    <input name="rua" type="text" class="form-control" id="rua" placeholder="Rua">
                </div>

                <div class="form-group col-3 numero_casa">
                    <label for="numero_casa">Numero</label>
                    <input name="numero_casa" type="text" class="form-control" id="numero_casa" placeholder="Número">
                </div>

                <!-- Fim Cadastro Endereço -->

                <button type="submit" class="btn btn-primary">Salvar</button>
        </form>

        <hr class="linha2">

        <div class="col-12 click_aqui">
            <span>Já tem cadastro?</span>
            <a href="{{route('login')}}">Click Aqui</a>
        </div>

    </div>


</div>

@endsection
