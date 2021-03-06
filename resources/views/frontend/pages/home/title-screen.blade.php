<section class="title-screen bg-title-screen--home webp h-screen text-white xs-sm:pt-12 md-xl:pt-20">
    <div class="overlay xl:hidden bg-black-100 xs-lg:op-50"></div>
    <div class="xs-lg:container xl:container-fluid xl:pl-8 relative flex flex-col xs-md:justify-around lg-xl:justify-center xl:flex-start h-full">

        <div class="xs-md:flex xs-md:flex-col xs-md:flex-center">
            <picture>
                <source srcset="{{ asset('img/logo/white-xl@2.webp') }}" media="(min-width: 1200px)" type="image/webp">
                <source srcset="{{ asset('img/logo/white-xl@2.png') }}" media="(min-width: 1200px)">
                <source srcset="{{ asset('img/logo/white-lg@2.webp') }}" media="(min-width: 992px)" type="image/webp">
                <source srcset="{{ asset('img/logo/white-lg@2.png') }}" media="(min-width: 992px)">
                <source srcset="{{ asset('img/logo/white-md@2.webp') }}" media="(min-width: 768px)" type="image/webp">
                <source srcset="{{ asset('img/logo/white-md@2.png') }}" media="(min-width: 768px)">
                <source srcset="{{ asset('img/logo/white-sm@2.webp') }}" media="(min-width: 375px)" type="image/webp">
                <source srcset="{{ asset('img/logo/white-sm@2.png') }}" media="(min-width: 375px)">
                <source srcset="{{ asset('img/logo/white-xs@2.webp') }}" type="image/webp">
                <img class="xs:w-60 sm:w-72 md:w-100 lg:w-80 xl:h-20" src="{{ asset('img/logo/white-xs@2.png') }}" alt="Hiloft Design Studio логотип белый" />
            </picture>
            <h1 class="lg-xl:w-136 font-bold xs:text-xl sm:text-3xl md:text-5xl lg-xl:text-4xl xs-md:text-center">{{ $page->h1 }}</h1>
        </div>

        <div class="md:as-center xs-md:flex xs-md:flex-col xs-md:flex-center md:w-120 lg:mt-24 xl:mt-36 sy-5 xs-md:text-center">
            <p class="lg-xl:w-116 xs:text-lg sm:text-xl md:text-3xl lg-xl:text-2xl font-medium">Получите профессиональный проект по методике ESHL</p>
            <div class="md:flex md:flex-col md:flex-center md:text-lg xs-sm:w-60 md:w-72 xs-md:sy-5 lg-xl:sx-5">
                <a class="button button-golden-solid xs-md:w-full xl:w-60" href="#eshl">Подробнее про ESHL</a>
            </div>
        </div>

        <a class="lg-xl:absolute lg-xl:bottom-8 as-center text-3xl anim--arrow-down no-underline" href="#portfolio">
            <i class="icon-arrow"></i>
        </a>

    </div>
</section>
