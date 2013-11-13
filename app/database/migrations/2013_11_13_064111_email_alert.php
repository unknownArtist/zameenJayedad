<?php

use Illuminate\Database\Migrations\Migration;

class EmailAlert extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('email_alert', function($table) {
            $table->increments('id');
            $table->integer('user_id');
			$table->string('receive_alert');
			$table->string('Property_Type');
            $table->string('purpose');
			$table->integer('price');
			$table->string('beds');
			$table->string('location');
			$table->string('keyword');
			$table->string('covered_area');
			$table->string('baths');
			$table->string('estate_agent');
			$table->string('finance_available');
			$table->string('occupanc_status');
			$table->string('ownership_status');
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
		Schema::drop('email_alert');
	}

}