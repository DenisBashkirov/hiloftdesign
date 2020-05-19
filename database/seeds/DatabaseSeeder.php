<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(NavMenuItemsSeeder::class);
        $this->call(TeamPeopleSeeder::class);
        $this->call(ConfigSeeder::class);
        $this->call(PagesSeeder::class);
        $this->call(PortfolioItemsSeeder::class);
    }
}
