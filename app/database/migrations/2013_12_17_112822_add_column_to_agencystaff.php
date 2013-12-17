<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddColumnToAgencystaff extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('agencies', function(Blueprint $table) {
			$table->string('name')->after('user_id')->unsigned('');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('agencies', function(Blueprint $table) {
			$table->dropColumn('name');
			
		});
	}

}
