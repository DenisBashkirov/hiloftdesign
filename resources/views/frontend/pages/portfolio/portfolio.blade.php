@extends('frontend.layouts.main')


@section('main_content')

    @component('frontend.sections.title-screen', ['title_screen_bg'=>'portfolio'])
    @endcomponent

    <div class="xs-sm:container-fluid">
        @component('frontend.components.portfolio.portfolio_items', ['swiper'=>false, 'portfolio_items'=>$portfolio_items])
        @endcomponent
    </div>

    @include('frontend.sections.service-cards')

@endsection
