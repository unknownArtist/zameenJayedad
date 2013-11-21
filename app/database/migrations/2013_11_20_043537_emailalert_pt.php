<?php

use Illuminate\Database\Migrations\Migration;

class EmailalertPt extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Emailalert_pt', function($table) {
            $table->increments('id');
            $table->integer('email_alert_id');
			$table->string('Emailalert_pt');
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
		Schema::drop('Emailalert_pt');
	}

}