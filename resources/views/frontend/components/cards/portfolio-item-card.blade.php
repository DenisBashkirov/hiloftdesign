@if ($swiper_slide)

    <div class="portfolio-item-card--slide swiper-slide">
        <picture>

            <source data-srcset="{{ asset('img/portfolio/sample.webp') }}" media="(min-width: 768px)" type="image/webp">
            <source data-srcset="{{ asset('img/portfolio/sample.jpg') }}" media="(min-width: 768px)">

            <source data-srcset="{{ asset('img/portfolio/sample_sm@1.webp') }}" media="(min-width: 375px) and (-webkit-device-pixel-ratio: 1)" type="image/webp">
            <source data-srcset="{{ asset('img/portfolio/sample_sm@1.jpg') }}" media="(min-width: 375px) and (-webkit-device-pixel-ratio: 1)">

            <source data-srcset="{{ asset('img/portfolio/sample_xs@2.webp') }}" media="(-webkit-min-device-pixel-ratio: 2)" type="image/webp">
            <source data-srcset="{{ asset('img/portfolio/sample_xs@1.webp') }}" media="(-webkit-device-pixel-ratio: 1)" type="image/webp">
            <source data-srcset="{{ asset('img/portfolio/sample_xs@2.jpg') }}" media="(-webkit-min-device-pixel-ratio: 2)">
            <img class="lazyload mt-2" data-srcset="{{ asset('img/portfolio/sample_xs@1.jpg') }}" alt="">

        </picture>
    </div>

@else

    <div class="portfolio-item-card md-lg:w-cols-6">
        <picture>

            <source data-srcset="{{ asset('img/portfolio/sample.webp') }}" media="(min-width: 768px)" type="image/webp">
            <source data-srcset="{{ asset('img/portfolio/sample.jpg') }}" media="(min-width: 768px)">

            <source data-srcset="{{ asset('img/portfolio/sample_sm@1.webp') }}" media="(min-width: 375px) and (-webkit-device-pixel-ratio: 1)" type="image/webp">
            <source data-srcset="{{ asset('img/portfolio/sample_sm@1.jpg') }}" media="(min-width: 375px) and (-webkit-device-pixel-ratio: 1)">

            <source data-srcset="{{ asset('img/portfolio/sample_xs@2.webp') }}" media="(-webkit-min-device-pixel-ratio: 2)" type="image/webp">
            <source data-srcset="{{ asset('img/portfolio/sample_xs@1.webp') }}" media="(-webkit-device-pixel-ratio: 1)" type="image/webp">
            <source data-srcset="{{ asset('img/portfolio/sample_xs@2.jpg') }}" media="(-webkit-min-device-pixel-ratio: 2)">
            <img class="lazyload mt-2" data-srcset="{{ asset('img/portfolio/sample_xs@1.jpg') }}" alt="">

        </picture>
    </div>

@endif
