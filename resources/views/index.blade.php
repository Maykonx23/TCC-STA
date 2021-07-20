<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ URL::asset('assets/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">

    <title>STA - SISTEMA PARA TECNICOS AUTONOMOS</title>
</head>
<body class="bg_templates">
    <nav>
        <div class="logo">

        </div>

        <div class="mobile-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-list">
            <li><a href="">Início</a></li>
            <li><a href="index.php">Sobre</a></li>
            <li><a href="cadastro.php">Cadastrar</a></li>
            <li><a href="{{route('usuario.login')}}">Login</a></li>
        </ul>
    </nav>

    <!-- JavaScript -->

    <!-- Scripts DataTables -->
    <script src="{{ URL::asset('assets/javaScript/javaScript.js') }}"></script>
    <script src="{{ URL::asset('assets/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ URL::asset('assets/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ URL::asset('assets/datatables/datatables-demo.js') }}"></script>

</body>
</html>