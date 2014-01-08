<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class DropColumnFromproperty extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('property', function(Blueprint $table) {
			$table->dropColumn('created_at');
			$table->dropColumn('updated_at');
			
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
			
		});
	}

}
