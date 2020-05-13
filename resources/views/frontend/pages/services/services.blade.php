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
                       <div class="pricing-card flex flex-col flex-center py-10 xs-md:px-4 sy-6 text-white bg-grey-80 b-radius-5 swiper-slide">
                           <div class="text-center">
                               <div class="pricing-card__headline xs-sm:text-3xl md-xl:text-4xl font-Montserrat font-semibold">Базовый</div>
                               <div class="pricing-card__pricing mt-3">
                                   <div class="pricing-card__price-value xs-sm:mt-1 font-bold xs-sm:text-3xl md-xl:text-4xl">1190 р</div>
                                   <div class="pricing-card__unit font-bold md-xl:text-lg">за кв. метр</div>
                               </div>
                           </div>
                           <ol class="pricing-card__options-list xs-sm:text-xs sy-3">
                               <li>Обмеры</li>
                               <li>Планировочное решение</li>
                               <li>Строительные чертежи</li>
                               <li>3D визуализации</li>
                               <li>Подбор материалов</li>
                               <li>Ссылки на материалы</li>
                               <li>Проведение тендера</li>
                               <li>Авторский надзор</li>
                           </ol>
                           <div class="button button-white-solid xs-sm:w-full text-sm">Выбрать</div>
                       </div>
                    @endfor
                </div>
            </div>
        </div>

    </section>

@endsection
