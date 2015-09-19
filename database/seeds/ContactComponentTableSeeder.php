<?php

use Illuminate\Database\Seeder;

class ContactComponentTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('contact_components')->truncate();

		DB::table('contact_components')->insert([
			'component' => 'map',
		]);

		DB::table('contact_components')->insert([
			'component' => 'info',
		]);

		DB::table('contact_components')->insert([
			'component' => 'form',
		]);
	}
}
