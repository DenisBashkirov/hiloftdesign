<div class="
    @if($swiper_slide)
        portfolio-item-card--slide swiper-slide
    @else
        portfolio-item-card md-lg:w-cols-6
    @endif
">
    <a href="{{ asset('img/portfolio/' . $img_name . '.jpg') }}" data-fancybox="portfolio">
        <picture>
            <source data-srcset="{{ asset('img/portfolio/' . $img_name . '-thumb-xl@1.webp') }}" media="(min-width: 1200px) and (-webkit-device-pixel-ratio: 1)" type="image/webp">
            <source data-srcset="{{ asset('img/portfolio/' . $img_name . '-thumb-xl@1.jpg') }}" media="(min-width: 1200px) and (-webkit-device-pixel-ratio: 1)">
            <source data-srcset="{{ asset('img/portfolio/' . $img_name . '-thumb-xl@2.webp') }}" media="(min-width: 1200px) and (-webkit-min-device-pixel-ratio: 2)" type="image/webp">
            <source data-srcset="{{ asset('img/portfolio/' . $img_name . '-thumb-xl@2.jpg') }}" media="(min-width: 1200px) and (-webkit-min-device-pixel-ratio: 2)">

            <source data-srcset="{{ asset('img/portfolio/' . $img_name . '-thumb-sm@1.webp') }}" media="(min-width: 375px) and (-webkit-device-pixel-ratio: 1)" type="image/webp">
            <source data-srcset="{{ asset('img/portfolio/' . $img_name . '-thumb-sm@1.jpg') }}" media="(min-width: 375px) and (-webkit-device-pixel-ratio: 1)">
            <source data-srcset="{{ asset('img/portfolio/' . $img_name . '-thumb-sm@2.webp') }}" media="(min-width: 375px) and (-webkit-min-device-pixel-ratio: 2)" type="image/webp">
            <source data-srcset="{{ asset('img/portfolio/' . $img_name . '-thumb-sm@2.jpg') }}" media="(min-width: 375px) and (-webkit-min-device-pixel-ratio: 2)">

            <source data-srcset="{{ asset('img/portfolio/' . $img_name . '-thumb-xs@2.webp') }}" media="(-webkit-min-device-pixel-ratio: 2)" type="image/webp">
            <source data-srcset="{{ asset('img/portfolio/' . $img_name . '-thumb-xs@1.webp') }}" media="(-webkit-device-pixel-ratio: 1)" type="image/webp">
            <source data-srcset="{{ asset('img/portfolio/' . $img_name . '-thumb-xs@2.jpg') }}" media="(-webkit-min-device-pixel-ratio: 2)">
            <img class="lazyload" data-srcset="{{ asset('img/portfolio/' . $img_name . '-thumb-xs@1.jpg') }}" alt="">
        </picture>
    </a>

</div>
