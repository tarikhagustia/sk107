<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CreateTaskSeeder::class);
        $this->call(CreateUsersTableSeeder::class);
        $this->call(CreateCategorySeeder::class);
        $this->call(CreateSettingTableSeeder::class);
    }
}
