<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddAgencyidToAgencystaff extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('agencystaff', function(Blueprint $table) {
			$table->integer('agency_id')->after('id')->unsigned('');
			
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
			$table->dropColumn('agency_id');
			
		});
	}

}
