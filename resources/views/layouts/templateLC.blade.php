<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script  type="text/javascript" src="{{ URL::asset('assets/javaScript/jquery-3.3.1.min.js') }}"></script>
    <script  type="text/javascript" src="{{ URL::asset('assets/bootstrap.min.js') }}"></script>
    <script  type="text/javascript" src="{{ URL::asset('assets/javaScript/jquery.mask.min.js') }}"></script>
    
    <script type="text/javascript" src="{{ URL::asset('assets/javaScript/javaScript.js') }}"></script>

    <script type="text/javascript">
    </script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ URL::asset('assets/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">

    <title>@yield('title')</title>
</head>
<body class="bg_login">
    <nav>
        <a href="{{route('index')}}"><div class="logo"> </div></a>

    </nav>

    @yield('content')

    <!-- JavaScript -->

    <!-- Scripts DataTables -->
    <script  type="text/javascript" src="{{ URL::asset('assets/datatables/jquery.dataTables.min.js')}}"></script>
    <script  type="text/javascript" src="{{ URL::asset('assets/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script  type="text/javascript" src="{{ URL::asset('assets/datatables/datatables-demo.js') }}"></script>

</body>
</html>