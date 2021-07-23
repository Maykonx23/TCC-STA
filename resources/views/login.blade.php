
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link href="{{ URL::asset('assets/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ url::asset('assets/css/style.css') }}" rel="stylesheet">
    
    <title>LOGIN</title>
</head>
<body class="bg_login">

    <div class="container">
        <div class="row">

                <div class="login">
                
                    <h1>LOGIN</h1>
                    <div class="row form_login">
                        
                        <div class="col-12">
                            <label for="cpf" id="cpf">CPF</label><br>
                            <img class="icones" src="{{ URL::asset('assets/icons/perfil-de-usuario.png') }}" alt="">
                            <input type="cpf" name="cpf" placeholder="Digite seu CPF">
                        </div>

                        <div class="col-12">
                            <label for="senha" id="senha">SENHA</label><br>
                            <img class="icones" src="{{ URL::asset('assets/icons/cadeado.png') }}" alt="">
                            <input type="password" name="password" placeholder="Digite sua Senha"> 
                        </div>

                        <button class="btn btn-outline" type="submit">Entrar</button>

                        <hr class="linha">

                        <div class="col-12">
                            <a class="esqueceu" href="#">Esqueceu a senha?</a>
                            <a class="cadastrar_se" href="cadastro.php">Cadastrar-se</a>
                        </div>

                    </div>
                
                </div>

        </div>
        
    </div>

    <!-- JavaScript -->

    <!-- Scripts DataTables -->
    

</body>
</html>