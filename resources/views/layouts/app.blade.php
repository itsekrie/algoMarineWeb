<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script src="https://kit.fontawesome.com/dc88ec6997.js" crossorigin="anonymous"></script>
    {{-- <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" /> --}}
    <title>@yield('title')  | Algomarine</title>
    @yield('head')
    <script>document.documentElement.classList.add('js')</script>
</head>
<body>
    @include('partials.Header')

    @yield('content')

    @include('partials.Footer')
</body>
</html>