<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ URL::asset('assets/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">

    <title>CADASTRAR</title>
</head>
<body class="bg_cadastro">
    <div class="container container2">

        <div class="row cadastro_bg">

        
            <div class="col-12">
                <h1  class="cadastro">CADASTRO</h1>
            </div>

            <div class="col-12 dados">
                <h4>Dados</h4>
            </div>

            <div class="col-3 nome">
                <label for="name">Nome</label><br>
                <input placeholder="Nome Completo"  type="text">
            </div>

            <div class="col-3 email">
                <label for="name">EMAIL</label><br>
                <input placeholder="Email" type="text">
            </div>

            <div class="col-3 celular">
                <label for="name">CELULAR</label><br>
                <input placeholder="Celular" type="text"> 
            </div>
            <div class="col-3 telefone">
                <label for="name">TELEFONE</label><br>
                <input placeholder="Telefone" type="text"> 
            </div>

            <div class="col-3 cpf">
                <label for="name">CPF</label><br>
                <input placeholder="CPF" type="text"> 
            </div>

            <div class="col-3 data_nasc">
                <label for="name">DATA</label><br>
                <input placeholder="Data de Nascimento" type="text"> 
            </div>

            <div class="col-3 senha">
                <label for="name">SENHA</label><br>
                <input placeholder="Data de Nascimento" type="text"> 
            </div>

            <div class="col-3 senha senha_conf">
                <label for="name">CONFIRMAR SENHA</label><br>
                <input placeholder="Data de Nascimento" type="text"> 
            </div>
            <!--Inicio Endereço-->
            <div class="col-12 endereco">
                <h4>Endereço</h4>
            </div>

            <div class="col-2 cep">
                <label for="name">CEP</label><br>
                <input placeholder="CEP" type="text"> 
            </div>

            <div class="col-1 uf">
                <label for="name">UF</label><br>
                <input placeholder="UF" type="text"> 
            </div>

            <div class="col-3 cidade">
                <label for="name">CIDADE</label><br>
                <input placeholder="Cidade" type="text"> 
            </div>

            <div class="col-3 bairro">
                <label for="name">BAIRRO</label><br>
                <input placeholder="Bairro" type="text"> 
            </div>

            <div class="col-3 rua">
                <label for="name">RUA</label><br>
                <input placeholder="Rua" type="text"> 
            </div>

            <div class="col-3 numero_casa">
                <label for="name">Número</label><br>
                <input placeholder="Número" type="text"> 
            </div>

            <!--Fim Endereço-->

            <div class="col-12">
            <button class="btn btn-outline" type="submit">SALVAR</button>
            </div>

            <hr class="linha2">

            <div class="col-12 click_aqui">
                <span>Já tem cadastro?</span>
                <a href="index.php">Click Aqui</a>
            </div>
            


        </div>


    </div>
</body>
</html>