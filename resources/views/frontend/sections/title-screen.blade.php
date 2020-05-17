<section class="title-screen bg-title-screen--{{ $title_screen_bg }} webp xs-sm:h-64 md-xl:h-84 xl:h-128 text-white xs-sm:pt-12">
    <div class="overlay bg-black-100 op-50"></div>
    <div class="xs-lg:container xl:container-fluid xl:pl-8 relative flex flex-col justify-center xs-sm:flex-start xl:flex-start h-full">

        <div class="xs-md:flex xs-md:flex-col xs-lg:flex-start sy-3">
            <div class="breadcrumbs flex flex-nowrap flex-center sx-2 font-light op-75">
                <a class="xs-sm:text-base hover-underline" href="{{ route('home') }}">
                    <i class="icon-home md-xl:hidden"></i>
                    <span class="xs-sm:hidden">Дизайн интерьера</span>
                </a>
                <span class="breadcrumbs-arrow icon-arrow-right"></span>
                <span>{{ $page->h1 }}</span>
            </div>
            <h1 class="font-bold xs-sm:text-3xl md-xl:text-5xl xs-md:text-center">{{ $page->h1 }}</h1>
        </div>

    </div>
</section>
