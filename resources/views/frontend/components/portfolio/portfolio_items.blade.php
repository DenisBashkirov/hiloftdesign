@if($swiper)

    <div class="portfolio-items-swiper swiper-container flex flex-center">
        <div class="swiper-wrapper xl:flex xl:flex-wrap xl:justify-between">
            @foreach($portfolio_items as $portfolio_item)
                @component('frontend.components.cards.portfolio-item-card', ['swiper_slide'=>true, 'img_name'=>$portfolio_item['img_name']])
                @endcomponent
            @endforeach
        </div>
        <div class="swiper-navigation xl:hidden absolute z-5 w-full">
            <div class="swiper-button swiper-button-prev"><i class="icon-arrow"></i></div>
            <div class="swiper-button swiper-button-next"><i class="icon-arrow"></i></div>
        </div>
    </div>
    <div class="swiper-pagination portfolio-items-swiper-pagination xl:hidden sx-1 xs-sm:mt-6 md:mt-8 lg:mt-6 xl:mt-16"></div>

@else

    <div class="flex flex-center">
        <div class="md-xl:flex md-xl:flex-wrap md-lg:justify-around xl:justify-between">
            @foreach($portfolio_items as $portfolio_item)
                @component('frontend.components.cards.portfolio-item-card', ['swiper_slide'=>false, 'img_name'=>$portfolio_item['img_name']])
                @endcomponent
            @endforeach
        </div>
    </div>

@endif
