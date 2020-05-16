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
                'img_name' => 'taunhauz_firsanovka_life_gostinaya',
            ],
            [
                'img_name' => 'taunhauz_firsanovka_life_spalnya',
            ],
            [
                'img_name' => 'jk_zilart_spalnya',
            ],
            [
                'img_name' => 'jk_kutuzovskiy_gostinaya',
            ],
            [
                'img_name' => 'jk_zilart_gostinaya_kuhnya',
            ],
            [
                'img_name' => 'jk_malaya_ordynka_spalnya',
            ],
            [
                'img_name' => 'otel_na_baikale_nomer',
            ],
            [
                'img_name' => 'jk_layner_sanuzel',
            ],
            [
                'img_name' => 'jk_layner_spalnya',
            ],
            [
                'img_name' => 'jk_litsa_gostinaya',
            ],

            [
                'img_name' => 'jk_litsa_kuhnya',
            ],
            [
                'img_name' => 'jk_mosfilmovskiy_gostinaya',
            ],
            [
                'img_name' => 'jk_mosfilmovskiy_koridor',
            ],
            [
                'img_name' => 'jk_mosfilmovskiy_koridor_spalnya',
            ],
            [
                'img_name' => 'jk_mosfilmovskiy_koridor_vannaya',
            ],
            [
                'img_name' => 'kalyannaya_v_moskve_bar',
            ],
            [
                'img_name' => 'kalyannaya_v_moskve_sanuzel',
            ],
            [
                'img_name' => 'kalyannaya_v_moskve_zal',
            ],
            [
                'img_name' => 'kp_losiniy_ostrov_spalnya',
            ],
            [
                'img_name' => 'kp_losiniy_ostrov_vannaya',
            ],

            [
                'img_name' => 'otel_hiloft_kuhnya',
            ],
            [
                'img_name' => 'otel_hiloft_nomer',
            ],
            [
                'img_name' => 'otel_na_baikale_gostinaya',
            ],
            [
                'img_name' => 'otel_na_baikale_kuhnya',
            ],
        ];

        DB::table('portfolio_items')->insert($data);
    }
}
