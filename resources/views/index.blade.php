<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    </head>
    <body>

        <form class="box">
            <div class="control has-addon">
                <input type="text" class="control-field" placeholder="Username">
                <span class="control-addon">

                    <i class="fa fa-user" aria-hidden="true"></i>
                </span>
            </div>

            <div class="control has-addon">
                <input type="email" class="control-field" placeholder="Email">
                <span class="control-addon">

                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </span>
            </div>

        </form>

    </body>
</html>
