<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        @include('layouts._partials._style')
    </head>
    <body class="antialiased">
        @include('layouts._partials._sidebar')
        <div id="app">
            @yield('main_content')
        </div>
        <script src="{{asset('js/app.js')}}"></script>
        @include('layouts._partials._script')
    </body>
</html>
