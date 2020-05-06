<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TeamPeopleSeeder extends Seeder
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
                'name' => 'Александра Багрицевич',
                'role' => 'дизайнер'
            ],
            [
                'name' => 'Виктория Григорович',
                'role' => 'дизайнер'
            ],
            [
                'name' => 'Виталий Шепард',
                'role' => 'арт-директор'
            ],
            [
                'name' => 'Анастасия Крит',
                'role' => 'руководитель студии'
            ],
            [
                'name' => 'Наталия Найсова',
                'role' => 'координатор проектов'
            ],
        ];

        foreach ($data as $key=>$item) {
            $data[$key]['name_slug'] = Str::slug($item['name']);
        }

        DB::table('team_people')->insert($data);
    }
}
