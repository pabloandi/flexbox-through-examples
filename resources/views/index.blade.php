<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body>

        <ul class="episode-list">

            <li class="episode-list-item">
                <span class="position">1</span>
                <h4 class="title"><a href="#">Babel setup</a></h4>
                <span class="length">9:00</span>
            </li>

            <li class="episode-list-item is-current">
                <span class="position">2</span>
                <h4 class="title"><a href="#">ES6 compilation with Laravel Elixir</a></h4>
                <i class="material-icons">remove_red_eye</i>
                <span class="length">10:02</span>
            </li>

            <li class="episode-list-item">
                <span class="position">3</span>
                <h4 class="title">
                    <a href="#">Babel setup</a>
                </h4>
                <span class="length">10:02</span>
            </li>

            <li class="episode-list-item">
                <span class="position">4</span>
                <h4 class="title"><a href="#">Arrows</a></h4>
                <span class="length">7:41</span>
            </li>

        </ul>

    </body>
</html>
