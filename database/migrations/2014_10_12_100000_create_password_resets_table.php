<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasswordResetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('password_resets', function(Blueprint $table)
		{
			$table->string('email')->index();
			$table->string('token')->index();
			$table->timestamp('created_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return voidº
	 */
	public function down()
	{
		Schema::drop('password_resets');
	}

}
