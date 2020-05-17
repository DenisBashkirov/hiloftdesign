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

        <div class="modal-layout container-fluid fixed h-screen top-0">
            <div class="overlay bg-black-100 op-50"></div>
            <div class="modal-container container flex h-full flex-center justify-center">
                <div class="modal-body py-20 px-10 bg-gradient-dark text-white b-radius-2 shadow">

                    <p class="modal-headline font-bold xs-sm:text-3xl md:text-5xl lg-xl:text-4xl text-center">Заявка</p>

                    <form class="flex flex-col flex-center sy-12 mt-12" action="#" method="post">
                        <input class="input xs-sm:text-xl md-xl:text-2xl" type="text" placeholder="Ваше имя">
                        <input class="input xs-sm:text-xl md-xl:text-2xl" type="text" placeholder="Телефон">
                        <button class="button button-golden-solid xs-sm:w-40 md-xl:w-60 md-xl:text-lg">Готово</button>
                    </form>

                </div>
            </div>
        </div>

    </div>

    @include('frontend.sources.scripts')
    @yield('page_scripts')

</body>
</html>
