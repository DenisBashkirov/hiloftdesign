<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @include('frontend.sources.favicons')

    <title>
        @if (isset($page->title))
            {{ $page->title }}
        @else
            @yield('page_title')
        @endif
    </title>

    <meta property="og:type" content="product" />
    <meta property="og:image" content="{{ asset('favicons/og-image.jpg') }}"/>
    <meta property="og:title" content="
        @if (isset($page->title))
            {{ $page->title }}
        @else
            @yield('page_title')
        @endif
        " />
    <meta property="og:description" content="Профессиональный дизайн интерьеров. Работаем по Москве и регионам." />
    <meta property="og:url" content="https://hiloftdesign.ru"/>
    <meta property="og:site_name" content="Hiloft Design" />
    <meta property="product:price:amount" content="" />
    <meta property="product:price:currency" content="" />
    <meta property="og:availability" content="instock" />

    @if(isset($page->meta_description))
        <meta type="description" content="{{ $page->meta_description }}">
    @endif

    @if(env('APP_ENV') == 'production')
        @include('frontend.sources.services')
        <link rel="stylesheet" href="{{ asset('css/csscritical.css?v=') . md5_file(asset('css/csscritical.css')) }}">
        <link rel="preload" href="{{ asset('css/frontend.min.css?v=') . md5_file(asset('css/frontend.min.css')) }}" as="style" onload="this.rel='stylesheet'" media="all">
    @else
        <link rel="stylesheet" href="{{ asset('css/frontend.css') }}">
    @endif

    @include('frontend.sources.styles')

</head>
<body class="minh-screen flex flex-col">

    @include('frontend.sections.header')

    <div class="container-fluid flex-grow-1 flex flex-col">
        @yield('main_content')
    </div>

    @include('frontend.sections.footer')

    <div class="modals z-5">

        @include('frontend.components.modals.modal', ['modal_name'=>'order-design', 'headline'=>'Заказать дизайн'])

        @yield('page_modals')

    </div>

    @include('frontend.sources.scripts')
    @yield('page_scripts')

</body>
</html>
