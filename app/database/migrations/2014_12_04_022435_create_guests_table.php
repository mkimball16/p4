<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('guests', function($table) {

        # Auto-Incrementing field.
        $table->increments('id');

        # Generates `created_at` and `updated_at` columns to keep track of changes to a row
        $table->timestamps();

        # The rest of the fields...
        $table->string('name');
        $table->string('address');
        $table->string('email');
        $table->string('event');
        $table->string('rsvp');

		});
}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('guests');
	}

}