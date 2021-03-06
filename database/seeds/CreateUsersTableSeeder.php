<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Task;
use App\Models\UserTask;
use App\Models\RequestAccount;
class CreateUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
          'name' => 'Admin',
          'email' => 'admin@sk107.com',
		      'phone' => '1234567890',
          'sex' => 'male',
          'password' => bcrypt(1234),
          'role' => 'admin'
        ]);

        $request = RequestAccount::create([
          'user_id' => $user->id,
          'account_type_id' => 1,
          'order_number' => Carbon::now()->timestamp,
          'account_number' => null,
          'status' => 'filling'
        ]);

        $tasks = Task::all();
        foreach($tasks as $row){
          UserTask::create([
            'user_id' => $user->id,
            'request_account_id' => $request->id,
            'task_id' => $row->id,
            'status' => 'disabled',
          ]);
        }
    }
}
