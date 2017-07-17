<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use Validator;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);

       /* old Password Validator */
       Validator::extend('old_password', function ($attribute, $value, $parameters, $validator) {
           return Hash::check($value, current($parameters));
       });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton("MetaService", function() {
            return new \App\Library\MetaService;
        });
    }
}
