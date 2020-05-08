<header class="text-white absolute flex flex-center justify-between z-5 w-full top-0 xs-sm:px-4 xs-sm:py-3 md:px-6 md:py-5 lg:py-5 lg:px-6 xl:px-8 xl:py-6">

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
            <img class="xs-sm:h-6 md:w-28 lg:w-36 xl:h-10" src="{{ asset('img/logo/white_xs@2.png') }}" alt="Hiloft Design Studio логотип белый" />
        </picture>
    </a>

    <div class="xl:hidden flex flex-center md-lg:flex-order-1">
        <button class="hamburger hamburger--collapse" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
        <span class="xs-sm:hidden xl:hidden ml-3">Меню</span>
    </div>

    <nav class="xs-lg:hidden xl:sx-5 xl:text-lg">
        <a href="#">Портфолио</a>
        <a href="#">Услуги и цены</a>
        <a href="#">Блог</a>
        <a href="#">Чек-листы</a>
        <a href="#">Контакты</a>
    </nav>

    <div class="xs-lg:hidden xl:sx-5 xl:text-2xl">
        @component('frontend.components.socials.socials')
        @endcomponent
    </div>

    <div class="xs-sm:hidden md-lg:flex-order-3 inline-flex flex-col flex-end">
        <a class="font-bold md:text-lg lg-xl:text-xl" href="tel:{{ phone_to_int($phone) }}">{{ $phone }}</a>
        <span class="md-xl:mt-1 op-90">заказать звонок</span>
    </div>

</header>
