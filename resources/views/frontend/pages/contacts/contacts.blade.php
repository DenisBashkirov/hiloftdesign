@extends('frontend.layouts.main')

@section('main_content')

    @component('frontend.sections.title-screen', ['title_screen_bg'=>'contacts'])
    @endcomponent

    <div class="container xs-sm:py-12 md-lg:py-24 xl:py-36 xs-md:sy-8 lg-xl:sy-12">

        <address class="flex xs-sm:flex-col md-xl:flex-row md-xl:justify-between md-xl:flex-wrap xs-sm:sy-8">

            <div class="md-xl:w-cols-6 flex flex-col xs-md:sy-2 lg-xl:sy-3 xs-md:text-xl lg-xl:text-2xl">
                <span class="font-medium">Отдел по работе с клиентами</span>
                <a href="mailto:infot@hiloftdesign.ru" class="labeled font-light">
                    <i class="icon-mail"></i>
                    <span>info@hiloftdesign.ru</span>
                </a>
            </div>

            <div class="md-xl:w-cols-6 xs-md:text-2xl lg-xl:text-4xl lg-xl:text-right">
            <a class="labeled font-bold" href="tel:{{ phone_to_int($phone) }}">
                <i class="icon-phone"></i>
                <span>{{ $phone }}</span>
            </a>
            </div>

            <div class="md-xl:w-cols-6 flex flex-col md:mt-8 lg-xl:mt-12 xs-md:sy-2 lg-xl:sy-3 xs-md:text-xl lg-xl:text-2xl">
                <span class="xl:text-2xl font-medium">Режим работы</span>
                <span class="font-light">ПН-ПТ: 09<sup>00</sup>-18<sup>00</sup></span>
            </div>

            <span class="md-xl:w-cols-6 md:mt-8 lg-xl:mt-12 lg-xl:text-xl font-medium lg-xl:text-right">119002, г. Москва, ул. Арбат, 12, стр. 1</span>

        </address>

        <button class="button button-golden-solid">Онлайн-чат</button>

    </div>

    <div class="map lg-xl:py-16 bg-grey-20">
        <div class="lg-xl:container">
            <div class="ymap xs-md:h-76 lg-xl:h-100 b-radius-2 shadow-sm bg-grey-30" id="ymap"></div>
        </div>
    </div>

@endsection

@section('page_scripts')
    @include('frontend.sources.ymap')
@endsection
