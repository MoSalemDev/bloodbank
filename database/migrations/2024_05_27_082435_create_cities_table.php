<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	public function up()
	{
		Schema::create('cities', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('governorate_id')->unsigned();
			$table->string('governorate_name');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('cities');
	}
};