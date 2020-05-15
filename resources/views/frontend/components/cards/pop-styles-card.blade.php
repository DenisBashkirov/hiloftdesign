<div class="pop-styles-card swiper-slide">
    <picture>

        <source data-srcset="{{ asset('img/design-styles/' . $style_name_slug . '/' . $style_name_slug . '_xl@1.webp') }}" media="(min-width: 768px)" type="image/webp">
        <source data-srcset="{{ asset('img/design-styles/' . $style_name_slug . '/' . $style_name_slug . '_xl@1.jpg') }}" media="(min-width: 768px)">
        <source data-srcset="{{ asset('img/design-styles/' . $style_name_slug . '/' . $style_name_slug . '_xl@2.webp') }}" media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 2)" type="image/webp">
        <source data-srcset="{{ asset('img/design-styles/' . $style_name_slug . '/' . $style_name_slug . '_xl@2.jpg') }}" media="(min-width: 768px) and (-webkit-min-device-pixel-ratio: 2)">

        <source data-srcset="{{ asset('img/design-styles/' . $style_name_slug . '/' . $style_name_slug . '_xs@2.webp') }}" media="(-webkit-min-device-pixel-ratio: 2)" type="image/webp">
        <source data-srcset="{{ asset('img/design-styles/' . $style_name_slug . '/' . $style_name_slug . '_xs@1.webp') }}" media="(-webkit-device-pixel-ratio: 1)" type="image/webp">
        <source data-srcset="{{ asset('img/design-styles/' . $style_name_slug . '/' . $style_name_slug . '_xs@2.jpg') }}" media="(-webkit-min-device-pixel-ratio: 2)">
        <img class="lazyload" data-srcset="{{ asset('img/design-styles/' . $style_name_slug . '/' . $style_name_slug . '__xs@1.jpg') }}" alt="">

    </picture>
    <div class="pop-styles-card__overlay overlay xs-lg:hidden flex flex-center justify-center">
        <p class="text-white font-Montserrat font-bold xl:text-lg">{{ $style_name }}</p>
        <a class="button button-white-solid absolute bottom-4 text-sm" href="#">Подробнее</a>
    </div>
</div>
