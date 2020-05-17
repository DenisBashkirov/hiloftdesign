<header class="header text-white absolute flex flex-center justify-between z-5 w-full top-0 xs-sm:px-4 xs-sm:py-3 md:px-6 md:py-5 lg:py-5 lg:px-6 xl:px-8 xl:py-6">

    <a class="md-lg:flex-order-2" href="{{ route('home') }}">
        <picture>
            <source srcset="{{ asset('img/logo/white_xl@2.webp') }}" media="(min-width: 1200px)" type="image/webp">
            <source srcset="{{ asset('img/logo/white_xl@2.png') }}" media="(min-width: 1200px)">
            <source srcset="{{ asset('img/logo/white_lg@2.webp') }}" media="(min-width: 992px)" type="image/webp">
            <source srcset="{{ asset('img/logo/white_lg@2.png') }}" media="(min-width: 992px)">
            <source srcset="{{ asset('img/logo/white_md@2.webp') }}" media="(min-width: 768px)" type="image/webp">
            <source srcset="{{ asset('img/logo/white_md@2.png') }}" media="(min-width: 768px)">
            <source srcset="{{ asset('img/logo/white_sm@2.webp') }}" media="(min-width: 375px)" type="image/webp">
            <source srcset="{{ asset('img/logo/white_sm@2.png') }}" media="(min-width: 375px)">
            <source srcset="{{ asset('img/logo/white_xs@2.webp') }}" type="image/webp">
            <img class="xs-sm:h-6 md:w-28 lg:w-36 xl:h-10 z-5" src="{{ asset('img/logo/white_xs@2.png') }}" alt="Hiloft Design Studio логотип белый" />
        </picture>
    </a>

    <div class="xl:hidden flex flex-center md-lg:flex-order-1 z-5">
        <button class="hamburger hamburger--spring js-hamburger" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
        <span class="xs-sm:hidden xl:hidden ml-3">Меню</span>
    </div>

    <nav class="xs-lg:hidden xl:sx-5 xl:text-lg">
        @component('frontend.components.nav.nav')
        @endcomponent
    </nav>

    <div class="xs-lg:hidden xl:sx-5 xl:text-2xl">
        @component('frontend.components.socials.socials')
        @endcomponent
    </div>

    <div class="xs-sm:hidden md-lg:flex-order-3 inline-flex flex-col flex-end">
        <a class="font-bold md:text-lg lg-xl:text-xl" href="tel:{{ phone_to_int($phone) }}">{{ $phone }}</a>
        <span class="md-xl:mt-1 op-90 cursor-pointer hover-underline" onclick="jivo_api.open({start : 'call'});">заказать звонок</span>
    </div>

    <div class="container hidden fixed flex flex-col w-screen h-screen left-0 top-0 pt-24 sy-12 bg-gradient-dark js-mobile_nav">

        <nav class="flex flex-col sy-6 xs-sm:text-2xl font-bold">
            @component('frontend.components.nav.nav')
            @endcomponent
        </nav>

        <div class="inline-flex flex-col flex-start sy-3">
            <a class="font-bold text-2xl" href="tel:{{ phone_to_int($phone) }}">{{ $phone }}</a>
            <span class="text-lg op-90 cursor-pointer hover-underline" onclick="jivo_api.open({start : 'call'});">заказать звонок</span>
        </div>

        <a class="button button-white-ghost text-sm" href="#">Заказать дизайн</a>

    </div>

</header>
