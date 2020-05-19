<div class="container-fluid form_order-design webp">
    <div class="md-xl:container md-lg:py-20 xl:py-36">
        <div class="xs-sm:container md-lg:w-112 xl:w-136 md-xl:ml-auto py-16 bg-gradient-dark text-white text-center">
            <h2 class="font-Montserrat font-semibold xs-sm:text-3xl md-lg:text-4xl xl:text-5xl">Заказать дизайн интерьера</h2>
            <form class="flex flex-col flex-center sy-12 mt-12" action="{{ route('thanks') }}" method="post">
                @csrf
                <input type="hidden" name="form_name" value="Заказать дизайн интерьера">
                <input class="input xs-sm:text-xl md-xl:text-2xl" type="text" name="name" placeholder="Ваше имя" required>
                <input class="input xs-sm:text-xl md-xl:text-2xl" type="text" name="phone" placeholder="Телефон" required>
                <button class="button button-golden-solid xs-sm:w-40 md-xl:w-60 md-xl:text-lg">Заказать</button>
            </form>
        </div>
    </div>
</div>
