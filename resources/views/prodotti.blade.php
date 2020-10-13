@extends('layout.app')

@section('titolo')
    Prodotti
@endsection

@section('header')
    <header>
        <img src="https://www.lamolisana.it/wp-content/uploads/2020/04/marchio-sito-test.png" alt="logo">
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('prodotti') }}">Prodotti</a></li>
                <li><a href="{{ route('contatti') }}">Contatti</a></li>
            </ul>
        </nav>
    </header>
@endsection

@section('main')
    <main class="main-prodotti">
        <div class="cards">
            <h2>Le Lunghe</h2>
            <div class="container">
                @foreach ($lunghe as $card)
                    <div class="card">
                            {{-- <h3>{{ $card['titolo'] }}</h3> --}}
                            <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                    </div>
                @endforeach
            </div>

            <h2>Le Corte</h2>
            <div class="container">
                @foreach ($corte as $card)
                    <div class="card">
                        {{-- <h3>{{ $card['titolo'] }}</h3> --}}
                        <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                    </div>
                @endforeach
            </div>

            <h2>Le Cortissime</h2>
            <div class="container">
                @foreach ($cortissime as $card)
                    <div class="card">
                        {{-- <h3>{{ $card['titolo'] }}</h3> --}}
                        <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                    </div>
                @endforeach
            </div>

        </div>
    </main>
@endsection

@section('footer')
    <footer>
        <div class="home-top-footer">
            <p>DAL 1912 SARTORIA DELLA PASTA</p>
        </div>
        @include('partials.footer')
    </footer>
@endsection
