<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('public/css/main.css') }}?v={{ time() }}">
    <title>WebDuraTech | @yield('title')</title>
</head>
<body>
    @include('menu')
    @yield('content')
</body>
<script src="{{ asset('public/js/jquery.js') }}"></script>
<script src="{{ asset('public/js/main.js') }}?v={{ time() }}"></script>
</html>