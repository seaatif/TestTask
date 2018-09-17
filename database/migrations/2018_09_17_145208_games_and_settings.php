<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GamesAndSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
	{
		//
		Schema::create('games', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name', 50);
			$table->text('description');
			$table->text('json_options');
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
		Schema::drop('games');
    }
}
