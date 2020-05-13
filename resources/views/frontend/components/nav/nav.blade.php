<a class="header-nav-item" href="{{ route('portfolio') }}">Портфолио</a>
<span class="js-header-nav-dropdown">
    <span class="cursor-pointer">Услуги и цены</span>
    <div class="header-nav-dropdown-wrapper hidden absolute left-0">
        <div class="header-nav-dropdown-menu flex flex-col sy-3 py-6 px-3 white-space-nowrap b-radius-2 bg-grey-80">
        <a class="header-nav-dropdown-item" href="{{ route('services', ['service_name' => 'dizayn-kvartir']) }}">Дизайн квартир</a>
        <a class="header-nav-dropdown-item" href="{{ route('services', ['service_name' => 'dizayn-domov']) }}">Дизайн домов и коттеджей</a>
    </div>
    </div>
</span>
<a class="header-nav-item" href="#">Блог</a>
<a class="header-nav-item" href="#">Чек-листы</a>
<a class="header-nav-item" href="#">Контакты</a>
