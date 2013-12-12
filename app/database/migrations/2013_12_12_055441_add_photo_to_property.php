<?php

use Illuminate\Database\Migrations\Migration;

class AddPhotoToProperty extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('property', function($table) {
			$table->string('photo')->after('location')->unsigned('');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('property', function($table) {
			$table->dropColumn('photo');
		});
	}

}