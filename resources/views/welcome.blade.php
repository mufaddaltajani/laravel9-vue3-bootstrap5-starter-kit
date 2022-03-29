<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 9 Starter Kit with VueJS 3 and Bootstrap 5</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>
    <body>
        <div class="container my-4" id="app">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h3>Laravel 9 Starter Kit with VueJS 3 and Bootstrap 5</h3>
                </div>
                <example-component></example-component>
            </div>
        </div>
    </body>
</html>
