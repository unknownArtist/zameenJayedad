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
		Schema::table('agencystaff', function(Blueprint $table) {
			$table->integer('staff_id')->after('id')->unsigned('');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('agencystaff', function(Blueprint $table) {
			$table->dropColumn('staff_id');
		});
	}

}
