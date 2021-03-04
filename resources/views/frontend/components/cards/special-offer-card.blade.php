<div class="special-offer-card swiper-slide h-full" style="box-sizing: content-box;">
    <div class="w-full h-full xl:w-cols-3 flex flex-col flex-center flex-center py-8 px-4 b-radius-5 overflow-hidden bg-white shadow">
        <div class="special-offer-title text-xl font-bold">{{ $title }}</div>
        <ul class="special-offer-options-list sy-2 my-6 lh-125 text-sm op-70 sy-3">
            @foreach($options_list as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
        <div class="button button-white-ghost--inverse xs-sm:w-full mt-auto text-sm js-modal-open" data-modal="{{ $modal_name }}">Выбрать</div>
    </div>
</div>
