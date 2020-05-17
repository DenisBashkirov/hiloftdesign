<?php

use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
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
                'name'=>'Домен Bitrix24',
                'slug'=>'bitrix24_domain',
                'value'=>'hiloftdesign'
            ],
            [
                'name'=>'Bitrix24 webhook key',
                'bitrix24_webhook_key',
                'value'=>'mzir85ya0p6y121i'
            ],
        ];

        DB::table('configs')->insert($data);
    }
}
