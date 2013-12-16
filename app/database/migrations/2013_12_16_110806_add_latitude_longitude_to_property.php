<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddLatitudeLongitudeToProperty extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('property', function(Blueprint $table) {
			
			$table->double('latitude', 15,8);
			$table->double('longitude',15,8);
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
				
			$table->dropColumn('latitude');
			$table->dropColumn('longitude');
		});
	}

}
