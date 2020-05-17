@extends('frontend.layouts.main')

@section('main_content')

    @component('frontend.sections.title-screen', ['title_screen_bg'=>$service_name])
    @endcomponent

    <section class="pricing xs-sm:my-12 md:my-24 lg:my-28 xl:my-36">

        <div class="container">
            <h2 class="text-golden">Тарифы на услуги дизайна</h2>
        </div>

        <div class="lg-xl:container xs-sm:mt-6 md-lg:mt-12 xl:mt-20">
            <div class="pricing-cards-swiper swiper-container">
                <div class="swiper-wrapper">

                    @component('frontend.components.cards.pricing-card', ['title'=>'Базовый', 'price'=>'1190', 'bg'=>'basic'])
                    @endcomponent

                    @component('frontend.components.cards.pricing-card', ['title'=>'Комфорт', 'price'=>'2390', 'bg'=>'comfort'])
                    @endcomponent

                    @component('frontend.components.cards.pricing-card', ['title'=>'Премиум', 'price'=>'3190', 'bg'=>'premium'])
                    @endcomponent

                </div>
            </div>
        </div>

    </section>

    <section class="special-offers xs-sm:my-12 md:my-24 lg:my-28 xl:my-36">

        <div class="container">
            <h2 class="text-golden">Спецпредложения</h2>
        </div>

        <div class="xl:container xs-sm:mt-6 md-lg:mt-12 xl:mt-20">
            <div class="special-offers-swiper swiper-container flex flex-wrap py-1 xl:px-1">
                <div class="swiper-wrapper">

                    @component('frontend.components.cards.special-offer-card', [
                        'title'=>'Тест-драйв',
                        'price'=>'2900',
                        'options_list'=>[
                            'заполняем техническое задание по видеосвязи на разработку дизайн-проекта',
                            'подключаем вас к рабочему чату с дизайнером, архитектором, проектировщиком и комплектатором',
                            'разрабатываем 3 планировочных решения для вашего сценария жизни',
                            'выбираем один из них и доводим до 100% результата'
                        ]
                        ])
                    @endcomponent

                    @component('frontend.components.cards.special-offer-card', [
                       'title'=>'Трейд-ин',
                       'price'=>'2900',
                       'options_list'=>[
                           'исправим или доведём до конца сторонний незавершённый проект'
                       ]
                       ])
                    @endcomponent

                    @component('frontend.components.cards.special-offer-card', [
                       'title'=>'Онлайн консультация',
                       'price'=>'2900',
                       'options_list'=>[
                           'архитектор подготавливает несоклько вариантов идей',
                           'часовая онлайн-встреча с обсуждением уже подготовленных идей',
                           'итоговые наброски и ссылки отправляются на почту'
                       ]
                       ])
                    @endcomponent

                    @component('frontend.components.cards.special-offer-card', [
                       'title'=>'Аудит и доработка',
                       'price'=>'2900',
                       'options_list'=>[
                           'смета с нуля по вашей визуализации',
                           'доработка сметы: проверим наличие, цены и скидки по базе проверенных поставщиков',
                           'организация закупки и доставки персональным менеджером'
                       ]
                       ])
                    @endcomponent

                </div>
            </div>
        </div>

    </section>

@endsection

@section('page_modals')

    @component('frontend.components.modals.modal', ['headline'=>'Заявка', 'modal_name'=>'pricing_basic'])
    @endcomponent

    @component('frontend.components.modals.modal', ['headline'=>'Заявка', 'modal_name'=>'pricing_comfort'])
    @endcomponent

    @component('frontend.components.modals.modal', ['headline'=>'Заявка', 'modal_name'=>'pricing_premium'])
    @endcomponent

@endsection
