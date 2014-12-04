<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table) {

        # Auto-Incrementing field.
        $table->increments('id');

        # Generates `created_at` and `updated_at` columns to keep track of changes to a row
        $table->timestamps();

        # The rest of the fields...
        $table->string('name');
        $table->string('address');
        $table->string('email')->unique();
        $table->string('remember_token',100); 
        $table->string('password');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}


