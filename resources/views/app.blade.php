<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/manifest.js') }}" defer></script>
        <script src="{{ mix('js/vendor.js') }}" defer></script>
        <script src="{{ mix('js/app.js') }}" defer></script>

    </head>
    <body class="h-full min-h-full">
        {{-- <div id="app" data-page="{{ json_encode($page) }}"></div> --}}
        @inertia
    </body>
</html>
