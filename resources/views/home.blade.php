@extends('layout.app')

@section('titolo', 'Home - Laravel primi passi')

@section('main')
    <div class="container home row">
        <div class="prodotti col-md-5">
            <a href="{{ route('prodotti') }}">
                <div class="overlay"></div>
                <h2>Prodotti</h2>
            </a>
        </div>
        <div class="contatti col-md-5 col-md-offset-2">
            <a href="{{ route('contatti') }}">
                <div class="overlay"></div>
                <h2>Contatti</h2>
            </a>
        </div>
    </div>
@endsection