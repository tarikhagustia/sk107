<?php

use Illuminate\Database\Seeder;
use App\Models\AccountType;
class AccountTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
          'account_name' => 'Mini',
          'account_type' => 'real',
          'account_login' => '1001',
          'account_host' => '127.0.0.1',
          'account_password' => 'password',
          'is_active' => true
        ];

        AccountType::create($data);
    }
}
