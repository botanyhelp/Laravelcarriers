<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCarriersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('carriers', function($table){
            $table->increments('id');
            $table->string('name');
            $table->string('service');
            $table->string('pennant');
            $table->string('class');
            $table->string('type');
            $table->string('servicePeriod');
            $table->string('notes');
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
		//
        Schema::drop('carriers');
	}

}
