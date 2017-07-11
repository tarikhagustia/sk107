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
		  'phone' => '1234567890',
          'sex' => 'male',
          'password' => bcrypt(1234),
          'role' => 'admin'
        ]);
    }
}
