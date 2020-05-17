<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @include('frontend.sources.favicons')

    <title>{{ $page->title }}</title>

    <meta property="og:type" content="product" />
    <meta property="og:image" content="{{ asset('favicons/og-image.jpg') }}"/>
    <meta property="og:title" content="Студия современного дизайна интерьеров | Hiloft Design Studio" />
    <meta property="og:description" content="Профессиональный дизайн интерьеров. Работаем по Москве и регионам." />
    <meta property="og:url" content="https://hiloftdesign.ru"/>
    <meta property="og:site_name" content="Hiloft Design" />
    <meta property="product:price:amount" content="" />
    <meta property="product:price:currency" content="" />
    <meta property="og:availability" content="instock" />

    <meta type="description" content="{{ $page->meta_description }}">

    @if(env('APP_ENV') == 'production')
        <link rel="stylesheet" href="{{ asset('css/frontend.min.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('css/frontend.css') }}">
    @endif

    @include('frontend.sources.styles')

</head>
<body class="minh-screen flex flex-col">

    @include('frontend.sections.header')

    @yield('main_content')

    @include('frontend.sections.footer')

    <div class="modals z-5">
        @yield('page_modals')
    </div>

    @include('frontend.sources.scripts')
    @yield('page_scripts')

</body>
</html>
