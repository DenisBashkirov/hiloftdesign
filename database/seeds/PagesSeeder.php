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
                'route' => 'home',
                'urn' => '/',
                'h1' => 'Студия современного дизайна интерьеров',
                'title' => 'Студия дизайна интерьеров в Москве | Элитный дизайн интерьеров',
                'meta_description' => '',
            ],
            [
                'route' => 'portfolio',
                'urn' => '/portfolio',
                'h1' => 'Портфолио',
                'title' => 'Примеры готовых проектов дизайна интерьера',
                'meta_description' => '',
            ],
            [
                'route' => 'services/{service}',
                'urn' => '/services/dizayn-kvartir',
                'h1' => 'Дизайн квартир',
                'title' => 'Заказать дизайн-проект квартиры в Москве. Цены за квадратный метр',
                'meta_description' => '',
            ],
            [
                'route' => 'services/{service}',
                'urn' => '/services/dizayn-domov',
                'h1' => 'Дизайн домов и коттеджей',
                'title' => 'Заказать дизайн-проект загородного дома, коттеджа',
                'meta_description' => '',
            ],
            [
                'route' => 'contacts',
                'urn' => '/contacts',
                'h1' => 'Контакты',
                'title' => 'Контактные данные и способы связи | Студия дизайна интерьеров',
                'meta_description' => '',
            ],
            [
                'route' => 'thanks',
                'urn' => '/thanks',
                'h1' => 'Спасибо!',
                'title' => 'Спасибо за заявку | Студия дизайна интерьеров',
                'meta_description' => '',
            ],
        ];

        DB::table('pages')->insert($data);
    }
}
