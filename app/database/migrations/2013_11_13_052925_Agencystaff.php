<?php

use Illuminate\Database\Migrations\Migration;

class Agencystaff extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Agencystaff', function($table) {
            $table->increments('id');
            $table->integer('agency_id');
			$table->string('email');
			$table->string('password');
            $table->string('name');
			$table->integer('phone');
			$table->string('cell');
			$table->string('fax');
			$table->string('address');
			$table->string('zip');
			$table->string('country');
			$table->string('listing_quota');
			$table->string('hot_quota');
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
		Schema::drop('Agencystaff');
	}

}