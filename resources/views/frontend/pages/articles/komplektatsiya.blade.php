@extends('frontend.layouts.main')

@section('page_title')
    Article
@endsection

@section('main_content')

    <section class="title-screen xs-sm:h-64 md-xl:h-84 xl:h-96 text-white xs-sm:pt-12">
        <div class="overlay bg-gradient-dark"></div>
        <div class="overlay webp op-40" style="background: url({{ asset('img/articles/avtorskiy-nadzor/background.jpg') }})"></div>
        <div class="xs-lg:container xl:container-fluid xl:pl-8 relative flex flex-col justify-center xs-sm:flex-start xl:flex-start h-full">

            <div class="container">
                <div class="xs-md:flex xs-md:flex-col xs-lg:flex-start sy-3">
                    <h1 class="font-bold xs-sm:text-3xl md-xl:text-5xl">Комплектация</h1>
                    <p class="xl:text-2xl">Зачем нужна и кому доверить</p>
                </div>
            </div>

        </div>
    </section>

    <div class="container">

        <article class="article mx-auto xs-sm:mt-10 md-xl:mt-20 xs-sm:mb-10 md-xl:mb-20">



        </article>

    </div>

@endsection

@section('page_scripts')
    @include('frontend.sources.ymap')
@endsection
