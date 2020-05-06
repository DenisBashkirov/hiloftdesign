<figure class="team-person-card swiper-slide">
    <picture>
        <source srcset="{{ asset('img/team_people/' . $person->name_slug . '.webp') }}" type="image/webp">
        <img src="{{ asset('img/team_people/' . $person->name_slug . '.jpg') }}" alt="{{ $person->name }} - {{ $person->role }}">
    </picture>
    <figcaption class="flex flex-col mt-2 xs-lg:text-sm xl:text-base text-center font-semibold">
        <span >{{ $person->name }}</span>
        <span class="mt-1 op-75">{{ $person->role }}</span>
    </figcaption>
</figure>
