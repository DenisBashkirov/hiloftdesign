<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=ffd12f22-8ac8-4128-a78c-d675282765f0&lang=ru_RU"></script>
    @if(env('APP_ENV') == 'production')
        <link rel="stylesheet" href="{{ asset('css/frontend.min.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('css/frontend.css') }}">
    @endif
    @include('frontend.sources.styles')
</head>
<body>

@include('frontend.sections.header')
@yield('main_content')
@include('frontend.sections.footer')

@include('frontend.sources.scripts')
@yield('page_scripts')
</body>
</html>
