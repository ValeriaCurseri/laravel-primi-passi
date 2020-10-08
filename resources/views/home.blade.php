<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home - Laravel primi passi</title>

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <style>
            main{
                height: calc(100vh - 220px);
            }
        </style>
    </head>
    <body>
        @include('template/header')
        <main>
            <div class="container">
                <h1>Home</h1>
            </div>
        </main>
        @include('template/footer')
    </body>
</html>
