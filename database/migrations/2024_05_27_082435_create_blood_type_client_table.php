<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloodTypeClientTable extends Migration {

	public function up()
	{
		Schema::create('blood_type_client', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('client_id')->unsigned();
			$table->integer('blood_type_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('blood_type_client');
	}
}
