<?php

use Illuminate\Database\Migrations\Migration;

class Registration extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('registration', function($table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('name');
			$table->integer('phone');
			$table->integer('cell');
            $table->string('fax');
			$table->string('address');
			$table->string('zip');
			$table->string('country');
			$table->string('roles');
			$table->boolean('agent');
			$table->boolean('terms');
			$table->boolean('newsletters');
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
		Schema::drop('registration');
	}

}