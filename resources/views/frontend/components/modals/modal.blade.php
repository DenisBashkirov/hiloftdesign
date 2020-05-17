<div class="modal hidden container-fluid fixed h-screen top-0" data-modal-name="{{ $modal_name }}">
    <div class="overlay bg-grey-20 op-90"></div>
    <div class="modal-container container flex h-full flex-center justify-center">
        <div class="modal-body py-20 px-10 bg-gradient-dark text-white b-radius-2 shadow">

            <p class="modal-headline font-bold xs-sm:text-3xl md:text-5xl lg-xl:text-4xl text-center">{{ $headline }}</p>

            <form class="flex flex-col flex-center sy-12 mt-12" action="{{ route('thanks') }}" method="post">
                <input class="input xs-sm:text-xl md-xl:text-2xl" type="text" placeholder="Ваше имя">
                <input class="input xs-sm:text-xl md-xl:text-2xl" type="text" placeholder="Телефон">
                <button class="button button-golden-solid xs-sm:w-40 md-xl:w-60 md-xl:text-lg">Готово</button>
            </form>

        </div>
    </div>
</div>
