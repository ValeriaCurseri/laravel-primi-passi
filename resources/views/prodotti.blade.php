<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Prodotti - Laravel primi passi</title>
        {{-- <link rel="stylesheet" href="style.css"> --}}

    </head>
    <body>
        @include('template/header')
        <h1>Prodotti</h1>
        @include('template/footer')
    </body>
</html>
