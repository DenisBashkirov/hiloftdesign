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

    @include('frontend.sections.eshl')

    @include('frontend.sections.service-cards')

    @include('frontend.pages.home.pop-styles')

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
