<?php

use Illuminate\Database\Migrations\Migration;

class Agent extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agent', function($table) {
            $table->increments('id');
            $table->integer('agent_id');
			$table->string('city');
			$table->string('agency_name');
            $table->string('description');
			$table->integer('company_phone');
			$table->string('company_mobile');
			$table->string('company_fax');
			$table->string('company_address');
			$table->string('company_email');
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
		Schema::drop('agent');
	}

}