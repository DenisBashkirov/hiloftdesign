<?php

use Illuminate\Database\Seeder;

class NavMenuItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nav_menu = [
            ['uri'=>'/', 'route'=>'home', 'text'=>'Главная'],
            ['uri'=>'/portfolio', 'route'=>'portfolio', 'text'=>'Портфолио'],
            ['uri'=>'/articles', 'route'=>'articles', 'text'=>'Полезное'],
            ['uri'=>'/contacts', 'route'=>'contacts', 'text'=>'Контакты'],
        ];
        DB::table('nav_menu_items')->insert($nav_menu);
    }
}
