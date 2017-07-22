<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Models\Setting;
<<<<<<< HEAD

=======
use Illuminate\Support\Facades\Schema;
>>>>>>> fb283b50d1d96dc98bd8972a0fb076907d741f46
class SettingsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
<<<<<<< HEAD
      if (Schema::hasTable('users')) {
        config()->set('settings', Setting::pluck('value', 'name')->all());
      }
=======
        if (Schema::hasTable('settings')) {

            
            config()->set('settings', Setting::pluck('value', 'name')->all());
        }

        
>>>>>>> fb283b50d1d96dc98bd8972a0fb076907d741f46
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
