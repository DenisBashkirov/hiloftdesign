<a class="header-nav-item xl:hover-translate-up" href="{{ route('home') }}">Главная</a>
<a class="header-nav-item xl:hover-translate-up" href="{{ route('portfolio') }}">Портфолио</a>
<span class="js-header-nav-dropdown">
    <span class="cursor-pointer">Услуги и цены</span>
    <div class="hidden header-nav-dropdown-wrapper xl:absolute xl:left-0">
        <div class="header-nav-dropdown-menu flex flex-col sy-3 xl:py-6 xs-lg:pl-2 xl:px-3 xs-sm:font-light xl:white-space-nowrap b-radius-2 xl:bg-grey-80">
        <a class="header-nav-dropdown-item xl:hover-translate-up" href="{{ route('services', ['service' => 'dizayn-kvartir']) }}">Дизайн квартир</a>
        <a class="header-nav-dropdown-item xl:hover-translate-up" href="{{ route('services', ['service' => 'dizayn-domov']) }}">Дизайн домов и коттеджей</a>
    </div>
    </div>
</span>
<a class="header-nav-item xl:hover-translate-up" href="{{ route('contacts') }}">Контакты</a>
