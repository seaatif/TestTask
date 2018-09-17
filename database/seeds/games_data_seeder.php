<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class games_data_seeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//
		DB::table('games')->insert([
			'name'         => str_random(10),
			'description'  => str_random(50),
			'json_options' => json_encode(array('slot_cash' => 50, 'win_occurrence' => 30)),
		]);
		DB::table('games')->insert([
			'name'         => str_random(10),
			'description'  => str_random(50),
			'json_options' => json_encode(array('slot_cash' => 50, 'win_occurrence' => 30)),
		]);
		DB::table('games')->insert([
			'name'         => str_random(10),
			'description'  => str_random(50),
			'json_options' => json_encode(array('slot_cash' => 50, 'win_occurrence' => 30)),
		]);
		DB::table('games')->insert([
			'name'         => str_random(10),
			'description'  => str_random(50),
			'json_options' => json_encode(array('slot_cash' => 50, 'win_occurrence' => 30)),
		]);
		DB::table('games')->insert([
			'name'         => str_random(10),
			'description'  => str_random(50),
			'json_options' => json_encode(array('slot_cash' => 50, 'win_occurrence' => 30)),
		]);
	}
}
