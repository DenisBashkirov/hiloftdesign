<section class="pop-styles xs-sm:mt-3 md:mt-4 lg:mt-6 xl:mt-8">

    <div class="container">
        <h2 class="text-golden">Популярные стили</h2>
    </div>

    <div class="xs-sm:container-fluid xs-sm:mt-6 md-lg:mt-12 xl:mt-20">
        <div class="pop-styles-swiper swiper-container flex flex-center">
            <div class="swiper-wrapper xl:flex xl:justify-between">
                @component('frontend.components.cards.pop-styles-card', ['style_name'=>'Лофт', 'style_name_slug'=>'loft'])
                @endcomponent
                @component('frontend.components.cards.pop-styles-card', ['style_name'=>'Эко-стиль', 'style_name_slug'=>'eko'])
                @endcomponent
                @component('frontend.components.cards.pop-styles-card', ['style_name'=>'Прованс', 'style_name_slug'=>'provans'])
                @endcomponent
                @component('frontend.components.cards.pop-styles-card', ['style_name'=>'Минимализм', 'style_name_slug'=>'minimalizm'])
                @endcomponent
                @component('frontend.components.cards.pop-styles-card', ['style_name'=>'Скандинавский стиль', 'style_name_slug'=>'skandinavskiy'])
                @endcomponent
            </div>
            <div class="swiper-navigation xl:hidden absolute z-5 w-full">
                <div class="swiper-button swiper-button-prev"><i class="icon-arrow"></i></div>
                <div class="swiper-button swiper-button-next"><i class="icon-arrow"></i></div>
            </div>
        </div>
        <div class="swiper-pagination pop-styles-swiper-pagination xl:hidden sx-1 xs-sm:mt-6 md:mt-8 lg:mt-6 xl:mt-16"></div>
    </div>

    {{--
    <div class="flex justify-center">
        <a class="button button-golden-solid xs-sm:text-sm xs-sm:mt-8 md:mt-12 lg-xl:mt-16" href="#">Каталог стилей</a>
    </div>
    --}}

</section>
