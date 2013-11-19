<?php

use Illuminate\Database\Migrations\Migration;

class UserSerached extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_searched', function($table) {
            $table->increments('id');
            $table->integer('user_id');
			$table->string('search_terms');
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
		Schema::drop('user_searched');
	}

}