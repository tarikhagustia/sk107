<?php

use Illuminate\Database\Seeder;
use App\Models\Setting;
class CreateSettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
          ['name' => 'website_url', 'value' => 'http://sk107.example.com'],
          ['name' => 'company_name', 'value' => 'PT. Naik Turun'],
          ['name' => 'company_address', 'value' => 'Your example long address'],
          ['name' => 'company_logo_location', 'value' => 'img/admin/logo.png'],
          ['name' => 'favicon', 'value' => 'Your example long address'],
          ['name' => 'demo_manual', 'value' => true],
    		  ['name' => 'mt4_host', 'value' => '202.59.167.52'],
    		  ['name' => 'mt4_port', 'value' => '443'],
    		  ['name' => 'master_pass', 'value' => 'MABMMB123!@#']
        ];

        foreach($settings as $key => $row):
          Setting::create($row);
        endforeach;
    }
}
