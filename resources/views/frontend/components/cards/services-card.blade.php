<div class="flex flex-col justify-between xs-sm:w-full text-white xs-sm:w-cols-12 md-xl:w-cols-6 md-xl:w-cols-6 mt-5 px-4 xs-md:py-8 lg:py-10 xl:py-12 lg:py-10 xl:py-12 text-center services-card--{{ $background }} b-radius-base overflow-hidden">
    <div class="overlay bg-gradient-dark op-75"></div>
    <h3 class="xs-sm:text-3xl md-lg:text-3xl xl:text-4xl">{{ $headline }}</h3>
    <div class="flex flex-col xs-sm:w-56 md-xl:w-60 mx-auto xs-sm:mt-5 md-xl:mt-10 xs-sm:sy-4 md-xl:sy-8 text-sm">
        <a class="button button-white-ghost" href="{{ route('services', ['service'=>$service_name]) }}#special-offers">Спецпредложения</a>
        <a class="button button-white-solid" href="{{ route('services', ['service'=>$service_name]) }}#special-offers">Стоимость дизайна</a>
    </div>
</div>
