@extends('layout.app')

@section('titolo')
    Home
@endsection

@section('header')
    @include('partials.header')
@endsection

@section('main')
    <main class="main-home">
        <img src="https://media-exp1.licdn.com/dms/image/C4D1BAQFsh0BRfpiNiw/company-background_10000/0?e=2159024400&v=beta&t=hGGfKMf9d6a3Nqm6cHuZ1k9qgkVNPx4h66CGbVXS5_A" alt="bcg-home">
    </main>
@endsection

@section('footer')
    <footer>
        <div class="home-top-footer">
            <p>LA MOLISANA: PASTA E FARINE DI QUALITA'</p>
        </div>
        @include('partials.footer')
    </footer>
@endsection
