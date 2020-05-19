<section class="xs-sm:py-12 md-lg:py-20 xl:py-36 bg-grey-20" id="eshl">

    <div class="container">
        <p class="inline-flex flex-col font-Montserrat font-extrabold xs:text-3xl sm:text-4xl md-lg:text-5xl xl:text-6xl xs-sm:ls-2 md-xl:ls-5">
            <span>E<span class="op-50">uro </span>S<span class="op-50">afe</span></span>
            <span>H<span class="op-50">igh</span> L<span class="op-50">evel Vision</span></span>
        </p>
        <h2 class="text-golden xs-sm:my-6 md:my-12 lg:my-10 xl:my-12 xs-sm:text-2xl">Гарантия реализуемости проекта по методике ESHL</h2>
    </div>

    <div class="container-fluid">

        <div class="eshl-features-swiper swiper-container lg-xl:container flex flex-center">
            <div class="swiper-wrapper lg-xl:flex lg-xl:justify-between">
                @component('frontend.components.cards.eshl-feature-card', ['headline'=>'контролируйте через смартфон', 'text'=>'личный кабинет для контроля выполнения работ по всем этапам'])
                    <picture>
                        <img class="lazyload" data-srcset="{{ asset('img/eshl-features/mobile-app@1.png') }}" alt="">
                    </picture>
                @endcomponent
                @component('frontend.components.cards.eshl-feature-card', ['headline'=>'что в проекте, то и в результате', 'text'=>'контроль на каждом этапе от замера до авторского надзора'])
                    <picture>
                        <img class="lazyload" data-srcset="{{ asset('img/eshl-features/result@1.jpg') }}" alt="">
                    </picture>
                @endcomponent
                @component('frontend.components.cards.eshl-feature-card', ['headline'=>'исчерпывающая документация', 'text'=>'для согласований со службами и работы строителей'])
                    <picture>
                        <img class="lazyload" data-srcset="{{ asset('img/eshl-features/documentation@1.jpg') }}" alt="">
                    </picture>
                @endcomponent
            </div>
            <div class="swiper-navigation lg-xl:hidden absolute z-5 w-full">
                <div class="swiper-button swiper-button-prev"><i class="icon-arrow"></i></div>
                <div class="swiper-button swiper-button-next"><i class="icon-arrow"></i></div>
            </div>
        </div>
        <div class="swiper-pagination eshl-features-swiper-pagination lg-xl:hidden sx-1 xs-sm:mt-6 md:mt-8 lg:mt-6 xl:mt-16"></div>

    </div>

</section>
