@extends('frontend.layouts.main')

@section('main_content')

    @component('frontend.sections.title-screen', ['page_h1'=>'Контакты', 'title_screen_bg'=>'contacts'])
    @endcomponent

    <div class="container">
        <address>

            <div>
                <div>Отдел по работе с клиентами</div>
                <div class="labeled">
                    <i class="icon-mail"></i>
                    <a href="mailto:infot@hiloftdesign.ru">info@hiloftdesign.ru</a>
                </div>
            </div>

            <div>
                <div class="labeled">
                    <i class="icon-phone"></i>
                    <a class="" href="tel:{{ phone_to_int($phone) }}">{{ $phone }}</a>
                </div>
            </div>

            <div>
                <div>Режим работы</div>
                <div>ПН-ПТ: 09<sup>00</sup>-18<sup>00</sup></div>
            </div>

            <div>119002, г. Москва, ул. Арбат, 12, стр. 1</div>

        </address>
    </div>

@endsection
