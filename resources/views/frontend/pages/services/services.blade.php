@extends('frontend.layouts.main')

@section('main_content')

    @component('frontend.sections.title-screen', ['page_h1'=>'Дизайн квартир', 'title_screen_bg'=>$service_name])
    @endcomponent

@endsection
