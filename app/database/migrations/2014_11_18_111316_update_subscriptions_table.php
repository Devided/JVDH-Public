<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateSubscriptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('subscriptions', function(Blueprint $table)
		{
			$table->string('user_id');
            $table->integer("partid");

            $table->string("opmerking");
            $table->string("club");

            $table->string('telefoon');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('subscriptions', function(Blueprint $table)
		{
			$table->dropColumn('user_id');
            $table->dropColumn("partid");

            $table->dropColumn("opmerking");
            $table->dropColumn("club");

            $table->dropColumn('telefoon');
		});
	}

}
