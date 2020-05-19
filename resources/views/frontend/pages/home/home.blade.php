@extends('frontend.layouts.main')

@section('main_content')

    @include('frontend.pages.home.title-screen')

    <section class="xs-sm:my-12 md:my-24 lg:my-28 xl:my-32">

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

    @include('frontend.pages.home.eshl')

    @include('frontend.sections.service-cards')

    @include('frontend.pages.home.pop-styles')

    @include('frontend.pages.home.team-people')

    {{--
    <section class="container-fluid xs-sm:mt-12 md:mt-24 lg:mt-28 xl:mt-36 xs-md:py-8 lg:py-16 xl:py-20 bg-grey-20">
        <div class="container flex xs-md:flex-col flex-center">
            <h2 class="xs-sm:text-2xl md-lg:text-4xl xl:text-5xl xs-md:text-center">Полезные чек-листы для самостоятельного ремонта</h2>
            <a class="button button-golden-solid xs-md:mt-6 xs-sm:text-sm" href="#">Получить чек-листы</a>
        </div>
    </section>
    --}}

    @include('frontend.pages.home.form_order-design')

@endsection
