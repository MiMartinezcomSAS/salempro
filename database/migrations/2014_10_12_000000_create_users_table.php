<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('last_name');
			$table->string('email')->unique();
			$table->string('password', 60);
            $table->string('address');
            $table->string('location')->nullable();
            $table->string('document');
            $table->string('document_type');
            $table->string('mobile')->nullable();
            $table->string('phone')->nullable();
			$table->rememberToken();
            $table->timestamps();

            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('roles');
		});
	}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
