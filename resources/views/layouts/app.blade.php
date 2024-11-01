<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', '| Algomarine')</title>
    @vite('resources/css/app.css')

    <title>@yield('title') | Algomarine</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    
    @vite(['resources/css/app.css','resources/js/app.js'])
    @yield('head')
</head>
<body>
    @include('partials.Header')

    @yield('content')

    @include('partials.Footer')
</body>
</html>