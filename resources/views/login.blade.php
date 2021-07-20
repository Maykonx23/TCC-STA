<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="stylo.css">
    
    <title>LOGIN</title>
</head>
<body class="bg_login">

    <div class="container">
        <div class="row">

                <div class=" login">
                
                    <h1>LOGIN</h1>

                    <div class="row form_login">
<!--
                        <div id="login-box" class="col-md-12">
                            <form id="login-form" class="form" action="{{route('usuarios.login')}}" method="post">
                            @csrf    
                            <h3 class="text-center text-info">Login</h3>
                                <div class="form-group">
                                    <label for="username" class="text-info">Email:</label><br>
                                    <input type="email" name="email" id="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="text-info">Senha:</label><br>
                                    <input type="password" name="senha" id="senha" class="form-control">
                                </div>
                                <div class="form-group">
                                    
                                    <input type="submit" name="submit" class="btn btn-info btn-md" value="Logar">
                                </div>
                            </form> -->

                        
                        <div class="col-12">
                            <label for="cpf" id="cpf">CPF</label><br>
                            <img class="icones" src="icons/perfil-de-usuario" alt="">
                            <input type="cpf" name="cpf" placeholder="Digite seu CPF">
                        </div>

                        <div class="col-12">
                            <label for="senha" id="senha">SENHA</label><br>
                            <img class="icones" src="icons/cadeado.png" alt="">
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

</body>
</html>