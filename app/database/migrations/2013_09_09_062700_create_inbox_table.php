<?php

use Illuminate\Database\Migrations\Migration;

class CreateInboxTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inbox', function($table){
			$table->increments('id');
			$table->integer('from_user');
			$table->integer('to_user');
			$table->string('subject')->nullable();
			$table->text('body')->nullable();
			$table->integer('read_status')->nullable()->default(1);
			$table->integer('to_user_delete_status');
			$table->integer('from_user_delete_status');
			$table->string('attachment',255)->nullable();
			$table->timestamp('created_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inbox');
	}

}