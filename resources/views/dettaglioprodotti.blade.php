        @extends('layout.app')

        @section('titolo', 'Prodotti - Laravel primi passi')

        @section('main')
            <div class="container prodotto">                
                <h1>{{ $prodotto['titolo'] }}</h1>
                <div class="dettagli">
                    <ul>
                        <li><strong>Tipo: </strong>pasta {{$prodotto['tipo']}}</li>
                        <li><strong>Cottura: </strong>{{$prodotto['cottura']}}</li>
                        <li><strong>Peso: </strong>{{$prodotto['peso']}}</li>
                        <li><p>{{$prodotto['descrizione']}}</p></li>
                    </ul>
                    <img src="{{ $prodotto['src'] }}" alt="{{ $prodotto['titolo'] }}">
                </div>
            </div>
        @endsection