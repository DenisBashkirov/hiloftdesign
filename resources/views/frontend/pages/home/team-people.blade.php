<section class="xs-sm:my-12 md:my-24 lg:my-28 xl:my-36">

    <div class="container">
        <h2 class="text-golden">Наша команда</h2>
    </div>

    <div class="xs-sm:container-fluid lg-xl:container xs-sm:mt-6 md-lg:mt-12 xl:mt-20">
        <div class="team-people-swiper swiper-container flex flex-center">
            <div class="swiper-wrapper xl:flex xl:justify-between">
                @foreach($team_people as $person)
                    @component('frontend.components.cards.team-person-card', ['person'=>$person])
                    @endcomponent
                @endforeach
            </div>
            <div class="swiper-navigation lg-xl:hidden absolute z-5 w-full">
                <div class="swiper-button swiper-button-prev"><i class="icon-arrow"></i></div>
                <div class="swiper-button swiper-button-next"><i class="icon-arrow"></i></div>
            </div>
        </div>
        <div class="swiper-pagination team-people-swiper-pagination lg-xl:hidden sx-1 xs-sm:mt-6 md:mt-8 lg:mt-6 xl:mt-16"></div>
    </div>

</section>
