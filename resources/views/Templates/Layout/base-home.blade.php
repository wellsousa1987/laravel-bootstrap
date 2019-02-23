<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.css')}}" />
        <link rel="stylesheet" href="{{ asset('/css/custom-bootstrap.css')}}" />
        
        @yield('custom-stylesheet')
             
        <title>Modelo laravel 5-5</title>
    </head>
    <body>
        @yield('content')
        
        <script type="text/javascript" src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/js/bootstrap.js') }}"></script>
        @yield('custom-javascript')
    </body>
</html>

