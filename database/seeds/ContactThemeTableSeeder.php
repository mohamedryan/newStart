<?php

use Illuminate\Database\Seeder;

class ContactThemeTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {

		DB::table('contact_themes')->delete();

		DB::table('contact_themes')->insert([
			'name' => 'layout 1',
			'img' => 'card1.jpg',
			'component_order' => '1,2,3',
			'width_order' => '12,6,6',
			'selected' => 1,
		]);

		DB::table('contact_themes')->insert([
			'name' => 'layout 2',
			'img' => 'card1.jpg',
			'component_order' => '2,3,1',
			'width_order' => '6,6,12',
			'selected' => 0,
		]);

		DB::table('contact_themes')->insert([
			'name' => 'layout 3',
			'img' => 'card1.jpg',
			'component_order' => '3,2,1',
			'width_order' => '12,6,6',
			'selected' => 0,
		]);
	}
}
