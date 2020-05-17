@extends('frontend.layouts.main')

@section('main_content')

    <main class="container-fluid flex-grow-1 flex flex-center xs-sm:pt-12 md:pt-24 lg:pt-28 xl:pt-36 text-white bg-gradient-dark">
        <div class="container flex flex-col justify-center flex-center xs-sm:h-screen md-xl:h-full text-center">

            <div>
                <h1 class="font-bold xs-sm:text-3xl md:text-5xl lg-xl:text-4xl xs-md:text-center">{{ $page->h1 }}</h1>
                <p class="xs-sm:mt-4 md-xl:mt-6 xs-sm:text-2xl md-xl:text-3xl">Ваша заявка получена</p>
            </div>

            <a class="button button-white-ghost w-40 mt-20" href="{{ url()->previous() }}">Назад</a>

        </div>
    </main>

@endsection
