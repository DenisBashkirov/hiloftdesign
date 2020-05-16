<?php

use Illuminate\Database\Seeder;

class PortfolioItemsSeeder extends Seeder
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
                'img_name' => 'taunhauz-firsanovka-life-gostinaya',
            ],
            [
                'img_name' => 'taunhauz-firsanovka-life-spalnya',
            ],
            [
                'img_name' => 'jk-zilart-spalnya',
            ],
            [
                'img_name' => 'jk-kutuzovskiy-gostinaya',
            ],
            [
                'img_name' => 'jk-zilart-gostinaya-kuhnya',
            ],
            [
                'img_name' => 'jk-malaya-ordynka-spalnya',
            ],
            [
                'img_name' => 'otel-na-baikale-nomer',
            ],
            [
                'img_name' => 'jk-layner-sanuzel',
            ],
            [
                'img_name' => 'jk-layner-spalnya',
            ],
            [
                'img_name' => 'jk-litsa-gostinaya',
            ],

            [
                'img_name' => 'jk-litsa-kuhnya',
            ],
            [
                'img_name' => 'jk-mosfilmovskiy-gostinaya',
            ],
            [
                'img_name' => 'jk-mosfilmovskiy-koridor',
            ],
            [
                'img_name' => 'jk-mosfilmovskiy-spalnya',
            ],
            [
                'img_name' => 'jk-mosfilmovskiy-vannaya',
            ],
            [
                'img_name' => 'kalyannaya-v-moskve-bar',
            ],
            [
                'img_name' => 'kalyannaya-v-moskve-sanuzel',
            ],
            [
                'img_name' => 'kalyannaya-v-moskve-zal',
            ],
            [
                'img_name' => 'kp-losiniy-ostrov-spalnya',
            ],
            [
                'img_name' => 'kp-losiniy-ostrov-vannaya',
            ],

            [
                'img_name' => 'otel-hiloft-kuhnya',
            ],
            [
                'img_name' => 'otel-hiloft-nomer',
            ],
            [
                'img_name' => 'otel-na-baikale-gostinaya',
            ],
            [
                'img_name' => 'otel-na-baikale-kuhnya',
            ],
        ];

        DB::table('portfolio_items')->insert($data);
    }
}
