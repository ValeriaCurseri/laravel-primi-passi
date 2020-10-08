<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contatti - Laravel primi passi</title>

    </head>
    <body>
        @include('template/header')
        <h1>Contatti</h1>
        @include('template/footer')
    </body>
</html>
