<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} - Selamat Datang</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" style="font-family: Arial, sans-serif; padding: 2rem;">
        <h1>Halo, selamat datang!</h1>
        <p>Ini tampilan HTML dasar menggunakan Blade.</p>
        <nav>
            <a href="{{ url('/') }}">Beranda</a> |
            <a href="">Login</a>
        </nav>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>