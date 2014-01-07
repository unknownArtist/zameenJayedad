<?php

use Illuminate\Database\Migrations\Migration;

class AdminLogin extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admin_login', function($table) {
			$table->increments('id');
			$table->string('email',1500);
			$table->string('password');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('admin_login');
	}

}