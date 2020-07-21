<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contacts', function (Blueprint $table) {
			$table->id();
			$table->string("first_name");
			$table->string("last_name");
			$table->string("middle_name")->nullable();
			$table->string("addr");
			$table->string("city");
			$table->string("state");
			$table->string("zipcode");
			$table->string("email")->unique();
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
		Schema::dropIfExists('contacts');
	}
}
