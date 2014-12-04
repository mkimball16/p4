<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartyTable extends Migration {

/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('party', function($table) {

        # Auto-Incrementing field.
        $table->increments('id');

        # Generates `created_at` and `updated_at` columns to keep track of changes to a row
        $table->timestamps();

        # The rest of the fields...
        $table->string('name_of_event');
        $table->string('type_of_event');
        $table->integer('month');
        $table->integer('day');
        $table->integer('year');
        $table->string('location');
        $table->integer('number_of_guests');


		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('party');
	}

}
