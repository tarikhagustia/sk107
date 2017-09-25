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
            $table->string('login')->nullable();
      			$table->string('name')->nullable();
      			$table->string('email')->nullable();
        		$table->string('password')->nullable();
        		$table->string('group')->nullable();
      			$table->enum('is_real', ['no', 'yes'])->nullable();
      			$table->enum('is_active', ['no', 'yes'])->nullable();
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
