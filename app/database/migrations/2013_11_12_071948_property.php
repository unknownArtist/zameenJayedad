<?php

use Illuminate\Database\Migrations\Migration;

class Property extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('property', function($table) {
            $table->increments('id');
            $table->integer('agent_id');
			$table->string('property_type');
			$table->string('home_type');
            $table->string('purpose');
			$table->integer('Construction_status');
			$table->string('wanted');
			$table->string('city');
			$table->string('location');
			$table->string('w_title');
			$table->string('p_title');
			$table->string('Description',1500);
			$table->string('budget');
			$table->string('l_area');
			$table->string('unit');
			$table->string('bedroom');
			$table->string('bathroom');
			$table->string('expires');
			$table->string('contact_p');
			$table->string('phone');
			$table->string('cell');
			$table->string('fax');
			$table->string('email');
			$table->string('website');
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
		Schema::drop('property');
	}

}