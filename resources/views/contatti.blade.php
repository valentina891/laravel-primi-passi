@extends('layout.app')

@section('titolo')
    Contatti
@endsection

@section('header')
    @include('partials.header')
@endsection

@section('main')
    <main class="main-home">
        <img src="https://i.ytimg.com/vi/zF5QaEMyJ4g/maxresdefault.jpg" alt="bcg-contatti">
    </main>
@endsection

@section('footer')
    <footer class="contatti-footer">
        <div class="varie">
            <ul>
                <li>Ragione Sociale: LA MOLISANA S.P.A</li>
                <li>Sede Legale: CAMPOBASSO (ITALY)</li>
                <li>PEC: lamolisana@postacertificata.it</li>
                <li>TELEFONO: +39 0874 123</li>
                <li>FAX: +39 0874 456</li>
                <li>Per informazioni: <strong>INFO@LAMOLISANA.IT</strong></li>
            </ul>
        </div>

    </footer>
@endsection
