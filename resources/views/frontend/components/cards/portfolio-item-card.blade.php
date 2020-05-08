<div class="swiper-slide portfolio-item-card">
    <picture>

        <source srcset="{{ asset('img/portfolio/sample.webp') }}" media="(min-width: 768px)" type="image/webp">
        <source srcset="{{ asset('img/portfolio/sample.jpg') }}" media="(min-width: 768px)">

        <source srcset="{{ asset('img/portfolio/sample_sm@1.webp') }}" media="(min-width: 375px) and (-webkit-device-pixel-ratio: 1)" type="image/webp">
        <source srcset="{{ asset('img/portfolio/sample_sm@1.jpg') }}" media="(min-width: 375px) and (-webkit-device-pixel-ratio: 1)">

        <source srcset="{{ asset('img/portfolio/sample_xs@2.webp') }}" media="(-webkit-min-device-pixel-ratio: 2)" type="image/webp">
        <source srcset="{{ asset('img/portfolio/sample_xs@1.webp') }}" media="(-webkit-device-pixel-ratio: 1)" type="image/webp">
        <source srcset="{{ asset('img/portfolio/sample_xs@2.jpg') }}" media="(-webkit-min-device-pixel-ratio: 2)">
        <img class="lazyload mt-2" data-srcset="{{ asset('img/portfolio/sample_xs@1.jpg') }}" alt="">

    </picture>
</div>
