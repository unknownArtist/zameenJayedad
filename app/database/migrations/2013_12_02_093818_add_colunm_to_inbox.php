<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddColunmToInbox extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('inbox', function(Blueprint $table) {
			$table->integer('notification')->nullable()->default(1)->after('read_status');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('inbox', function(Blueprint $table) {
			$table->dropColumn('notification');
			
		});
	}

}
