    <nav>
        <li><a class=" {{( url()->current() == route('home') ) ? 'active' : ''}} " href="{{ route('home') }}">home</a></li>
        <li><a class=" {{( url()->current() == route('prodotti') ) ? 'active' : ''}} " href="{{ route('prodotti') }}">prodotti</a></li>
        <li><a class=" {{( Request::route()->getName() == ('contatti') ) ? 'active' : ''}} " href="{{ route('contatti') }}">contatti</a></li>
    </nav>