<?php

use Illuminate\Database\Migrations\Migration;

class CreateMessageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alerts', function($table){
			$table->increments('id');
			$table->string('message_title',255)->default(NULL);
			$table->text('message_tease');
			$table->text('message_text');
			$table->string('message_icon', 255)->default(NULL);
			$table->timestamp('message_date_created');
			$table->timestamp('message_date_expires')->default('0000-00-00 00:00:00');
			$table->integer('message_role_client')->default(0);
			$table->integer('message_role_sales')->default(0);
			$table->integer('message_role_service')->default(0);
			$table->integer('message_role_company')->default(0);
			$table->integer('message_alert')->default(0);
			$table->integer('message_archived')->default(0);
			$table->string('identifier')->default(0);
			$table->integer('user_id')->foreign('user_id')->references('id')->on('users');
		});
		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('alerts');
	}

}