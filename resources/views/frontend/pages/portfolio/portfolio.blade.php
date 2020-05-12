@extends('frontend.layouts.main')


@section('main_content')

    <div class="xs-sm:container-fluid xs-sm:mt-6 md-lg:mt-12 xl:mt-20">
        @component('frontend.components.portfolio.portfolio_items', ['swiper'=>false])
        @endcomponent
    </div>

    @include('frontend.sections.service-cards')

@endsection
