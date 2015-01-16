<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdatePartsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('parts', function(Blueprint $table)
		{
			$table->boolean("active");
            $table->string('clubid');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('parts', function(Blueprint $table)
		{
			$table->dropColumn("active");
            $table->dropColumn('clubid');
		});
	}

}
