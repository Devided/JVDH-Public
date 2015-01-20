<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCampsubscriptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('campsubscriptions', function(Blueprint $table)
		{
			$table->increments('id');

            $table->string('club');
            $table->string('naam');
            $table->string('leeftijd');
            $table->string('geslacht');
            $table->string('emailadres');
            $table->string('telefoon');

			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('campsubscriptions');
	}

}
