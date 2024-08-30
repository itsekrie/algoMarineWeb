<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'LPK Ohayou')</title>
    @yield('head')

    <style>
        
    </style>


    @vite('resources/js/app.js')
    @vite(['resources/css/app.css','resources/js/app.js','public/js/filament/filament/app.js'])
</head>
<body id="body" class="font-sans text-slate-800">
    @include('partials.header')

    @yield('content')
    
    @include('partials.footer')
</body>
</html>
