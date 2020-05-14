@extends('frontend.layouts.main')

@section('main_content')

    @component('frontend.sections.title-screen', ['page_h1'=>'Контакты', 'title_screen_bg'=>'contacts'])
    @endcomponent

    <div class="container xl:py-36 xl:sy-12">

        <address class="flex xl:flex-row xl:justify-between xl:flex-wrap">

            <div class="xl:w-cols-6 flex flex-col sy-3 xl:text-2xl">
                <span class="font-medium">Отдел по работе с клиентами</span>
                <span class="labeled font-light">
                <i class="icon-mail"></i>
                <a href="mailto:infot@hiloftdesign.ru">info@hiloftdesign.ru</a>
            </span>
            </div>

            <div class="xl:w-cols-6 xl:text-4xl text-right">
            <span class="labeled font-bold">
                <i class="icon-phone"></i>
                <a class="" href="tel:{{ phone_to_int($phone) }}">{{ $phone }}</a>
            </span>
            </div>

            <div class="xl:w-cols-6 flex xl:mt-12 flex-col sy-3 xl:text-2xl">
                <span class="xl:text-2xl font-medium">Режим работы</span>
                <span class="font-light">ПН-ПТ: 09<sup>00</sup>-18<sup>00</sup></span>
            </div>

            <span class="xl:w-cols-6 xl:mt-12 xl:text-xl font-medium text-right">119002, г. Москва, ул. Арбат, 12, стр. 1</span>

        </address>

        <button class="button button-golden-solid">Онлайн-чат</button>

    </div>

    <div class="map xl:py-16 bg-grey-20">

        <div class="ymap xl:h-100" id="ymap">

        </div>

    </div>

@endsection
