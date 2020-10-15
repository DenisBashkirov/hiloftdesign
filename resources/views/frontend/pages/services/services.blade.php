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

                    @component('frontend.components.cards.pricing-card', ['title'=>'Базовый', 'price'=>'1490', 'bg'=>'basic', 'data_modal'=>'pricing_basic'])
                        @slot('options')
                            <li>Обмеры</li>
                            <li>Планировочное решение</li>
                            <li>Строительные чертежи</li>
                            <li class="op-50">3D визуализации</li>
                            <li class="op-50">Подбор материалов</li>
                            <li class="op-50">Ссылки на материалы</li>
                            <li class="op-50">Проведение тендера</li>
                            <li class="op-50">Контакты поставщиков</li>
                            <li class="op-50">Авторский надзор</li>
                            <li class="op-50">Ссылки на мебель</li>
                            <li class="op-50">Ссылки на свет и сантехнику</li>
                        @endslot
                    @endcomponent

                    @component('frontend.components.cards.pricing-card', ['title'=>'Комфорт', 'price'=>'2590', 'bg'=>'comfort', 'data_modal'=>'pricing_comfort'])
                            @slot('options')
                                <li>Обмеры</li>
                                <li>Планировочное решение</li>
                                <li>Строительные чертежи</li>
                                <li>3D визуализации</li>
                                <li>Подбор материалов</li>
                                <li>Ссылки на материалы</li>
                                <li>Проведение тендера</li>
                                <li>Контакты поставщиков</li>
                                <li class="op-50">Авторский надзор</li>
                                <li class="op-50">Ссылки на мебель</li>
                                <li class="op-50">Ссылки на свет и сантехнику</li>
                            @endslot
                    @endcomponent

                    @component('frontend.components.cards.pricing-card', ['title'=>'Премиум', 'price'=>'3900', 'bg'=>'premium', 'data_modal'=>'pricing_premium'])
                            @slot('options')
                                <li>Обмеры</li>
                                <li>Планировочное решение</li>
                                <li>Строительные чертежи</li>
                                <li>3D визуализации</li>
                                <li>Подбор материалов</li>
                                <li>Ссылки на материалы</li>
                                <li>Проведение тендера</li>
                                <li>Контакты поставщиков</li>
                                <li>Авторский надзор</li>
                                <li>Ссылки на мебель</li>
                                <li>Ссылки на свет и сантехнику</li>
                            @endslot
                    @endcomponent

                </div>
            </div>
        </div>

    </section>

    <section class="special-offers xs-sm:pb-12 md:pb-24 lg:pb-28 xl:pb-36" id="special-offers">

        <div class="container">
            <h2 class="text-golden">Спецпредложения</h2>
        </div>

        <div class="xl:container xs-sm:mt-6 md-lg:mt-12 xl:mt-20">
            <div class="special-offers-swiper swiper-container flex flex-wrap pb-1 xl:px-1">
                <div class="swiper-wrapper">

                    @component('frontend.components.cards.special-offer-card', [
                        'title'=>'Тест-драйв',
                        'price'=>'2900',
                        'options_list'=>[
                            'заполняем техническое задание по видеосвязи на разработку дизайн-проекта',
                            'подключаем вас к рабочему чату с дизайнером, архитектором, проектировщиком и комплектатором',
                            'разрабатываем 3 планировочных решения для вашего сценария жизни',
                            'выбираем один из них и доводим до 100% результата'
                        ],
                       'modal_name'=>'special_offer_test-drive'
                        ])
                    @endcomponent

                    @component('frontend.components.cards.special-offer-card', [
                       'title'=>'Трейд-ин',
                       'price'=>'2900',
                       'options_list'=>[
                           'исправим или доведём до конца сторонний незавершённый проект'
                       ],
                       'modal_name'=>'special_offer_trade-in'
                       ])
                    @endcomponent

                    @component('frontend.components.cards.special-offer-card', [
                       'title'=>'Онлайн консультация',
                       'price'=>'2900',
                       'options_list'=>[
                           'архитектор подготавливает несоклько вариантов идей',
                           'часовая онлайн-встреча с обсуждением уже подготовленных идей',
                           'итоговые наброски и ссылки отправляются на почту'
                       ],
                       'modal_name'=>'special_offer_online-consult'
                       ])
                    @endcomponent

                    @component('frontend.components.cards.special-offer-card', [
                       'title'=>'Аудит и доработка',
                       'price'=>'2900',
                       'options_list'=>[
                           'смета с нуля по вашей визуализации',
                           'доработка сметы: проверим наличие, цены и скидки по базе проверенных поставщиков',
                           'организация закупки и доставки персональным менеджером'
                       ],
                       'modal_name'=>'special_offer_audit'
                       ])
                    @endcomponent

                </div>
            </div>
        </div>

    </section>

@endsection

@section('page_modals')

    @component('frontend.components.modals.modal', ['headline'=>'Тариф Базовый', 'modal_name'=>'pricing_basic'])
    @endcomponent

    @component('frontend.components.modals.modal', ['headline'=>'Тариф Комфорт', 'modal_name'=>'pricing_comfort'])
    @endcomponent

    @component('frontend.components.modals.modal', ['headline'=>'Тариф Премиум', 'modal_name'=>'pricing_premium'])
    @endcomponent

    @component('frontend.components.modals.modal', ['headline'=>'Тест-драйв', 'modal_name'=>'special_offer_test-drive'])
    @endcomponent

    @component('frontend.components.modals.modal', ['headline'=>'Трейд-ин', 'modal_name'=>'special_offer_trade-in'])
    @endcomponent

    @component('frontend.components.modals.modal', ['headline'=>'Онлайн консультация', 'modal_name'=>'special_offer_online-consult'])
    @endcomponent

    @component('frontend.components.modals.modal', ['headline'=>'Аудит и доработка', 'modal_name'=>'special_offer_audit'])
    @endcomponent

@endsection
