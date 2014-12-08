<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartyGuestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() 
	{
		Schema::create('party_guests', function($table) {

			# AI, PK
			# none needed

			# General data...
			$table->integer('party_id')->unsigned();
			$table->integer('guest_id')->unsigned();
			
			# Define foreign keys...
			$table->foreign('party_id')->references('id')->on('party');
			$table->foreign('guest_id')->references('id')->on('guests');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('party_guests');
	}

}
