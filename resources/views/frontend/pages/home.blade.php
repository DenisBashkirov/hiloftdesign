@extends('frontend.layouts.main')

@section('main_content')

    @include('frontend.sections.title-screen')

    <section class="xs-sm:mt-12 md:mt-24 lg:mt-28 xl:mt-36">

        <div class="container">
            <h2 class="text-golden">Популярные стили</h2>
        </div>

        <div class="xs-sm:container-fluid xs-sm:mt-6 md-lg:mt-12 xl:mt-20">
            <div class="swiper-container flex flex-center">
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
            <div class="swiper-pagination sx-1 xs-sm:mt-6 md:mt-8 lg:mt-6 xl:mt-16"></div>
        </div>

        <div class="flex justify-center">
            <a class="button button-golden-solid xs-sm:text-sm xs-sm:mt-8 md:mt-12 lg-xl:mt-16" href="#">Каталог стилей</a>
        </div>

    </section>

    <section class="container-fluid xs-sm:mt-12 md:mt-24 lg:mt-28 xl:mt-36 xs-md:py-8 lg:py-16 xl:py-20 bg:grey-20">
        <div class="container flex xs-md:flex-col flex-center">
            <h2 class="xs-sm:text-2xl md-lg:text-4xl xl:text-5xl xs-md:text-center">Полезные чек-листы для самостоятельного ремонта</h2>
            <a class="button button-golden-solid xs-md:mt-6 xs-sm:text-sm" href="#">Получить чек-листы</a>
        </div>
    </section>

    <section class="xs-sm:mt-12 md:mt-24 lg:mt-28 xl:mt-36">

        <div class="container">
            <h2 class="text-golden">Наша команда</h2>
        </div>

        <div class="xs-sm:container-fluid xs-sm:mt-6 md-lg:mt-12 xl:mt-20">
            <div class="swiper-container flex flex-center">
                <div class="swiper-wrapper xl:flex xl:justify-between">

                </div>
                <div class="swiper-navigation xl:hidden absolute z-5 w-full">
                    <div class="swiper-button swiper-button-prev"><i class="icon-arrow"></i></div>
                    <div class="swiper-button swiper-button-next"><i class="icon-arrow"></i></div>
                </div>
            </div>
            <div class="swiper-pagination sx-1 xs-sm:mt-6 md:mt-8 lg:mt-6 xl:mt-16"></div>
        </div>

    </section>

@endsection
