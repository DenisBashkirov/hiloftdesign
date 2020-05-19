@extends('frontend.layouts.main')

@section('main_content')

    @include('frontend.pages.home.title-screen')

    <section class="xs-sm:my-12 md:my-24 lg:my-28 xl:my-36">

        <div class="container">
            <h2 class="text-golden">Портфолио</h2>
        </div>

        <div class="xs-sm:container-fluid xs-sm:mt-6 md-lg:mt-12 xl:mt-20">
            @component('frontend.components.portfolio.portfolio_items', ['swiper'=>true, 'portfolio_items'=>$portfolio_items])
            @endcomponent
        </div>

        <div class="flex justify-center">
            <a class="button button-golden-solid xs-sm:text-sm xs-sm:mt-8 md:mt-12 lg-xl:mt-16" href="{{ route('portfolio') }}">Все проекты</a>
        </div>

    </section>

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

    @include('frontend.sections.service-cards')

    <section class="pop-styles xs-sm:mt-12 md:mt-24 lg:mt-28 xl:mt-36">

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

    {{--
    <section class="container-fluid xs-sm:mt-12 md:mt-24 lg:mt-28 xl:mt-36 xs-md:py-8 lg:py-16 xl:py-20 bg-grey-20">
        <div class="container flex xs-md:flex-col flex-center">
            <h2 class="xs-sm:text-2xl md-lg:text-4xl xl:text-5xl xs-md:text-center">Полезные чек-листы для самостоятельного ремонта</h2>
            <a class="button button-golden-solid xs-md:mt-6 xs-sm:text-sm" href="#">Получить чек-листы</a>
        </div>
    </section>
    --}}

    @include('frontend.pages.home.team-people')

    <div class="container-fluid form_order-design webp">
        <div class="md-xl:container md-lg:py-20 xl:py-36">
            <div class="xs-sm:container md-lg:w-112 xl:w-136 md-xl:ml-auto py-16 bg-gradient-dark text-white text-center">
                <h2 class="font-Montserrat font-semibold xs-sm:text-3xl md-lg:text-4xl xl:text-5xl">Заказать дизайн интерьера</h2>
                <form class="flex flex-col flex-center sy-12 mt-12" action="{{ route('thanks') }}" method="post">
                    @csrf
                    <input type="hidden" name="form_name" value="Заказать дизайн интерьера">
                    <input class="input xs-sm:text-xl md-xl:text-2xl" type="text" name="name" placeholder="Ваше имя" required>
                    <input class="input xs-sm:text-xl md-xl:text-2xl" type="text" name="phone" placeholder="Телефон" required>
                    <button class="button button-golden-solid xs-sm:w-40 md-xl:w-60 md-xl:text-lg">Заказать</button>
                </form>
            </div>
        </div>
    </div>

@endsection
