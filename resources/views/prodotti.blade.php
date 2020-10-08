<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>La Molisana</title>
    </head>
    <body>

        <header>
            <img src="https://www.lamolisana.it/wp-content/uploads/2020/04/marchio-sito-test.png" alt="logo">
        </header>

        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('prodotti') }}">Prodotti</a></li>
                <li><a href="{{ route('contatti') }}">Contatti</a></li>
            </ul>
        </nav>

    </body>
</html>
