<footer class="text-white bg-gradient-dark xs-sm:py-16 md:py-12 lg-xl:py-20">
    <div class="container">
        <div class="flex xs-sm:flex-col md-xl:flex-row md-xl:justify-between md-xl:flex-center xs-sm:text-center">

            <div>
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
                    <img class="xs:w-60 sm:w-72 md-xl:w-40" src="{{ asset('img/logo/white_xs@2.png') }}" alt="Hiloft Design Studio логотип белый" />
                </picture>
                <p class="xs-sm:text-2xl md-xl:text-xl lh-100">Студия современного дизайна интерьера</p>
            </div>

            <div class="xs-sm:mt-8 sx-6 xs-sm:text-3xl md-xl:text-3xl">
                @component('frontend.components.socials.socials')
                @endcomponent
            </div>

        </div>
    </div>
</footer>
