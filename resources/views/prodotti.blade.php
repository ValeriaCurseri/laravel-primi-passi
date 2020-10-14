        @extends('layout.app')

        @section('titolo', 'Prodotti - Laravel primi passi')

        @section('main')
            <div class="container prodotti">                
                <h1>Prodotti</h1>
                <div class="bottoni-prodotti">
                    <button class="button-anchor" type="button"><a href="#lunga">pasta lunga</a></button>
                    <button class="button-anchor" type="button"><a href="#corta">pasta corta</a></button>
                    <button class="button-anchor" type="button"><a href="#cortissima">pasta cortissima</a></button>
                </div>
                <section class="anchor" id="lunga">
                    <h2>paste Lunghe</h2>
                    <div class="paste">
                        @foreach($pasteLunghe as $key => $prodotto)
                        <div class="pasta">
                            <a href="{{ route('dettaglio-prodotto', $prodotto['slug']) }}">
                                <img src="{{ $prodotto['src'] }}" alt="{{ $prodotto['titolo'] }}}">
                            </a>
                        </div>
                        @endforeach
                    </div>
                </section>
                <section class="anchor" id="corta">
                    <h2>paste corte</h2>
                    <div class="paste">
                        @foreach($pasteCorte as $key => $prodotto)
                        <div class="pasta">
                            <a href="{{ route('dettaglio-prodotto', $prodotto['slug']) }}">
                                <img src="{{ $prodotto['src'] }}" alt="{{ $prodotto['titolo'] }}}">
                            </a>
                        </div>
                        @endforeach
                    </div>
                </section>
                <section class="anchor" id="cortissima">
                    <h2>paste cortissime</h2>
                    <div class="paste">
                        @foreach($pasteCortissime as $key => $prodotto)
                            <div class="pasta">
                                <a href="{{ route('dettaglio-prodotto', $prodotto['slug']) }}">
                                    <img src="{{ $prodotto['src'] }}" alt="{{ $prodotto['titolo'] }}}">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>
        @endsection