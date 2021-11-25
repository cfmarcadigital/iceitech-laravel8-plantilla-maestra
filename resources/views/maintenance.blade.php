<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body class="antialiased">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4 text-center">
                    <p><h4>Aplicación en mantenimiento.</h4></p>
                    <img class="img-fluid rounded img-thumbnail" src="{{ asset('storage/mantenimiento.png') }}">
                    <p><h4>Aplicación en mantenimiento.</h4></p>
                </div>
                <div class="col-md-4">
                </div>
            </div>
        </div>
    </body>
</html>
