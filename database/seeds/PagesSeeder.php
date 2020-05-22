<?php

use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'route_name' => 'home',
                'route_method' => 'get',
                'urn' => '/',
                'h1' => 'Студия современного дизайна интерьеров',
                'title' => 'Студия дизайна интерьеров в Москве | Элитный дизайн интерьеров',
                'meta_description' => '',
            ],
            [
                'route_name' => 'portfolio',
                'urn' => '/portfolio',
                'route_method' => 'get',
                'h1' => 'Портфолио',
                'title' => 'Примеры готовых проектов дизайна интерьера',
                'meta_description' => '',
            ],
            [
                'route_name' => 'services/{service}',
                'route_method' => 'get',
                'urn' => '/services/dizayn-kvartir',
                'h1' => 'Дизайн квартир',
                'title' => 'Заказать дизайн-проект квартиры в Москве. Цены за квадратный метр',
                'meta_description' => '',
            ],
            [
                'route_name' => 'services/{service}',
                'route_method' => 'get',
                'urn' => '/services/dizayn-domov',
                'h1' => 'Дизайн домов и коттеджей',
                'title' => 'Заказать дизайн-проект загородного дома, коттеджа',
                'meta_description' => '',
            ],
            [
                'route_name' => 'contacts',
                'route_method' => 'get',
                'urn' => '/contacts',
                'h1' => 'Контакты',
                'title' => 'Контактные данные и способы связи | Студия дизайна интерьеров',
                'meta_description' => '',
            ],
            [
                'route_name' => 'privacy_policy',
                'route_method' => 'get',
                'urn' => '/privacy_policy',
                'h1' => 'Политика конфиденциальности',
                'title' => 'Политика конфиденциальности | Студия дизайна интерьеров HL Studio',
                'meta_description' => '',
            ],
            [
                'route_name' => 'thanks',
                'route_method' => 'post',
                'urn' => '/thanks',
                'h1' => 'Спасибо!',
                'title' => 'Спасибо за заявку | Студия дизайна интерьеров',
                'meta_description' => '',
            ],
        ];

        DB::table('pages')->insert($data);
    }
}
