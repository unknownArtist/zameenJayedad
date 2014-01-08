<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddColumnToProperty extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('property', function(Blueprint $table) {
			$table->integer('date_at')->after('longitude')->unsigned('');
			$table->integer('time_at')->after('website')->unsigned('');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('property', function(Blueprint $table) {
			$table->dropColumn('date_at');
			$table->dropColumn('time_at');
		});
	}

}
