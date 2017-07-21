<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMt4UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('mt4_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('login');
      			$table->string('password');
      			$table->string('group');
            $table->boolean('is_real')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
		Schema::dropIfExists('mt4_users');
    }
}
