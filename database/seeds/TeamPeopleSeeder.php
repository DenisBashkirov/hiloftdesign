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
                'role' => 'дизайнер',
                'active' => 0,
                'order' => 1
            ],
            [
                'name' => 'Виктория Григорович',
                'role' => 'дизайнер',
                'active' => 0,
                'order' => 2
            ],
            [
                'name' => 'Виталий Шепард',
                'role' => 'арт-директор',
                'active' => 1,
                'order' => 3
            ],
            [
                'name' => 'Анастасия Крит',
                'role' => 'руководитель студии',
                'active' => 1,
                'order' => 4
            ],
            [
                'name' => 'Наталия Найсова',
                'role' => 'координатор проектов',
                'active' => 1,
                'order' => 5
            ],
            [
                'name' => 'Мария Степаненко',
                'role' => 'комплектатор',
                'active' => 1,
                'order' => 2
            ],
            [
                'name' => 'Татьяна Нахаенко',
                'role' => 'дизайнер интерьера',
                'active' => 1,
                'order' => 1
            ],
        ];

        foreach ($data as $key=>$item) {
            $data[$key]['name_slug'] = Str::slug($item['name']);
        }

        DB::table('team_people')->insert($data);
    }
}
