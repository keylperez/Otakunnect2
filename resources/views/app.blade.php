<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" defer></script>

        <title>Otakunnect</title>

    </head>
    <body>
        {{-- <div id="app" data-page="{{ json_encode($page) }}"></div> --}}
        @inertia
    </body>
</html>
