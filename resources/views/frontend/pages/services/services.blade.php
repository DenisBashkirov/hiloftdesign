@extends('frontend.layouts.main')

@section('main_content')

    @component('frontend.sections.title-screen', ['page_h1'=>'Дизайн квартир', 'title_screen_bg'=>$service_name])
    @endcomponent

    <section class="xs-sm:my-12 md:my-24 lg:my-28 xl:my-36">

        <div class="container">
            <h2 class="text-golden">Тарифы на услуги дизайна</h2>
        </div>

        <div class="lg-xl:container xs-sm:mt-6 md-lg:mt-12 xl:mt-20">
            <div class="pricing-cards-swiper swiper-container">
                <div class="swiper-wrapper">
                    @for ($i = 0; $i < 3; $i++)

                    @endfor
                </div>
            </div>
        </div>

    </section>

@endsection
