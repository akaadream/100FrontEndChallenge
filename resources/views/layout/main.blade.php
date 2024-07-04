<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>100 challenges - @yield('title')</title>

        <script src="https://kit.fontawesome.com/c0bdc5a6b6.js" crossorigin="anonymous"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @yield('styles')
    </head>

    <body>
        @include('layout.nav')

        <div id="page">
            @yield('content')
        </div>
    </body>
</html>
