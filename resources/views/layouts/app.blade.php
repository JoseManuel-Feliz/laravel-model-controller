<!DOCTYPE html>

<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viweport" content="width=device-width, initial-scale=1.0">
    @yield('cdn', '')

    <title>@yield('page title','')</title>
</head>

<body>
    @include('partials.header')

    @yield('main-content')

    @include('partials.footer')
</body>

</html>