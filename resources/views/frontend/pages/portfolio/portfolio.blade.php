@extends('frontend.layouts.main')


@section('main_content')

    @component('frontend.sections.title-screen', ['page_h1'=>'Портфолио'])
    @endcomponent

    <div class="xs-sm:container-fluid">
        @component('frontend.components.portfolio.portfolio_items', ['swiper'=>false])
        @endcomponent
    </div>

    @include('frontend.sections.service-cards')

@endsection
