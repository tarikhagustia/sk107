<?php

use Illuminate\Database\Seeder;
use App\User;
class CreateUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          'name' => 'Admin',
          'email' => 'admin@sk107.com',
          'password' => bcrypt(1234),
          'role' => 'admin'
        ]);
    }
}
