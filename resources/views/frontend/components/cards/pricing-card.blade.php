<div class="pricing-card flex flex-col flex-center py-10 xs-md:px-4 sy-6 text-white bg-pricing-card--{{ $bg }} b-radius-5 overflow-hidden swiper-slide" style="box-sizing: content-box;">
    <div class="overlay bg-grey-90 op-80"></div>
    <div class="text-center">
        <div class="pricing-card__headline xs-sm:text-3xl md-xl:text-4xl font-Montserrat font-semibold">{{ $title }}</div>
        <div class="pricing-card__pricing mt-3">
            <div class="pricing-card__price-value xs-sm:mt-1 font-bold xs-sm:text-3xl md-xl:text-4xl">{{ $price }} р</div>
            <div class="pricing-card__unit font-bold md-xl:text-lg">за кв. метр</div>
        </div>
    </div>
    <ol class="pricing-card__options-list xs-sm:text-xs sy-3">
        {{ $options }}
    </ol>
    <div class="button button-white-solid xs-sm:w-full text-sm js-modal-open" data-modal="{{ $data_modal }}">Выбрать</div>
</div>
