<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Vue</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>

        <div id="app"> 
            <nav class="navbar navbar-dark bg-dark mb-3">
                <a class="navbar-brand" href="#">Navbar</a>
            </nav>
            <div class="container">
                <job-posting-component :posting="{{ $posting }}" />
            </div>
        </div>
    </body>
    <script src="{{asset('js/app.js') }}"> </script>
</html>
