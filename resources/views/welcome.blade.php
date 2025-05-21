<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Noodz</title>

        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/gh/oathanrex/font-awesome-pro@main/fontawesome-pro-6.5.2-web/css/all.min.css" rel="stylesheet">
        <!-- Styles / Scripts -->
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/scss/app.scss', 'resources/js/app.js'])
        @endif
    </head>
    <body>
        @include('block.cover')
        @include('block.info')
        @include('block.video')
        @include('block.faq')
        @include('block.social')
        @include('block.footer')
    </body>
</html>
