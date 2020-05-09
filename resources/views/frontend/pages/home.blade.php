@extends('frontend.layouts.main')

@section('main_content')

    @include('frontend.sections.title-screen')

    <section class="xs-sm:my-12 md:my-24 lg:my-28 xl:my-36">

        <div class="container">
            <h2 class="text-golden">Портфолио</h2>
        </div>

        <div class="xs-sm:container-fluid xs-sm:mt-6 md-lg:mt-12 xl:mt-20">
            <div class="portfolio-items-swiper swiper-container flex flex-center">
                <div class="swiper-wrapper xl:flex xl:flex-wrap xl:justify-between">
                    @for($i = 1; $i <=8; $i++)
                        @component('frontend.components.cards.portfolio-item-card')
                        @endcomponent
                    @endfor
                </div>
                <div class="swiper-navigation xl:hidden absolute z-5 w-full">
                    <div class="swiper-button swiper-button-prev"><i class="icon-arrow"></i></div>
                    <div class="swiper-button swiper-button-next"><i class="icon-arrow"></i></div>
                </div>
            </div>
            <div class="swiper-pagination portfolio-items-swiper-pagination xl:hidden sx-1 xs-sm:mt-6 md:mt-8 lg:mt-6 xl:mt-16"></div>
        </div>

        <div class="flex justify-center">
            <a class="button button-golden-solid xs-sm:text-sm xs-sm:mt-8 md:mt-12 lg-xl:mt-16" href="#">Все проекты</a>
        </div>

    </section>

    <section class="xs-sm:py-12 md-lg:py-20 xl:py-36 bg-grey-20">

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

    <section class="xs-sm:mt-12 md:mt-24 lg:mt-28 xl:mt-36">

        <div class="container">
            <h2 class="text-golden">Популярные стили</h2>
        </div>

        <div class="xs-sm:container-fluid xs-sm:mt-6 md-lg:mt-12 xl:mt-20">
            <div class="pop-styles-swiper swiper-container flex flex-center">
                <div class="swiper-wrapper xl:flex xl:justify-between">
                    @for($i = 1; $i <=5; $i++)
                        @component('frontend.components.cards.pop-styles-card')
                        @endcomponent
                    @endfor
                </div>
                <div class="swiper-navigation xl:hidden absolute z-5 w-full">
                    <div class="swiper-button swiper-button-prev"><i class="icon-arrow"></i></div>
                    <div class="swiper-button swiper-button-next"><i class="icon-arrow"></i></div>
                </div>
            </div>
            <div class="swiper-pagination pop-styles-swiper-pagination xl:hidden sx-1 xs-sm:mt-6 md:mt-8 lg:mt-6 xl:mt-16"></div>
        </div>

        <div class="flex justify-center">
            <a class="button button-golden-solid xs-sm:text-sm xs-sm:mt-8 md:mt-12 lg-xl:mt-16" href="#">Каталог стилей</a>
        </div>

    </section>

    <div class="container flex flex-wrap justify-between xs-sm:flex-col xs-sm:mt-12 md:mt-24 lg:mt-28 xl:mt-36 xs-sm:my-12 xs-sm:sy-8">
        @component('frontend.components.cards.services-card', ['headline'=>'Дизайн квартир', 'background'=>'apartments'])
        @endcomponent
        @component('frontend.components.cards.services-card', ['headline'=>'Дизайн домов и коттеджей', 'background'=>'houses'])
        @endcomponent
    </div>

    <section class="container-fluid xs-sm:mt-12 md:mt-24 lg:mt-28 xl:mt-36 xs-md:py-8 lg:py-16 xl:py-20 bg-grey-20">
        <div class="container flex xs-md:flex-col flex-center">
            <h2 class="xs-sm:text-2xl md-lg:text-4xl xl:text-5xl xs-md:text-center">Полезные чек-листы для самостоятельного ремонта</h2>
            <a class="button button-golden-solid xs-md:mt-6 xs-sm:text-sm" href="#">Получить чек-листы</a>
        </div>
    </section>

    <section class="xs-sm:my-12 md:my-24 lg:my-28 xl:my-36">

        <div class="container">
            <h2 class="text-golden">Наша команда</h2>
        </div>

        <div class="xs-sm:container-fluid lg-xl:container xs-sm:mt-6 md-lg:mt-12 xl:mt-20">
            <div class="team-people-swiper swiper-container flex flex-center">
                <div class="swiper-wrapper xl:flex xl:justify-between">
                    @foreach($team_people as $person)
                        @component('frontend.components.cards.team-person-card', ['person'=>$person])
                        @endcomponent
                    @endforeach
                </div>
                <div class="swiper-navigation lg-xl:hidden absolute z-5 w-full">
                    <div class="swiper-button swiper-button-prev"><i class="icon-arrow"></i></div>
                    <div class="swiper-button swiper-button-next"><i class="icon-arrow"></i></div>
                </div>
            </div>
            <div class="swiper-pagination team-people-swiper-pagination lg-xl:hidden sx-1 xs-sm:mt-6 md:mt-8 lg:mt-6 xl:mt-16"></div>
        </div>

    </section>

    <div class="container-fluid form_order-design webp">
        <div class="md-xl:container md-lg:py-20 xl:py-36">
            <div class="xs-sm:container md-lg:w-112 xl:w-136 md-xl:ml-auto py-16 bg-gradient-dark text-white text-center">
                <h2 class="font-Montserrat font-semibold xs-sm:text-3xl md-lg:text-4xl xl:text-5xl">Заказать дизайн интерьера</h2>
                <form class="flex flex-col flex-center sy-12 mt-12" action="#" method="post">
                    <input class="input xs-sm:text-xl md-xl:text-2xl" type="text" placeholder="Ваше имя">
                    <input class="input xs-sm:text-xl md-xl:text-2xl" type="text" placeholder="Телефон">
                    <button class="button button-golden-solid xs-sm:w-40 md-xl:w-60 md-xl:text-lg">Заказать</button>
                </form>
            </div>
        </div>
    </div>

@endsection
