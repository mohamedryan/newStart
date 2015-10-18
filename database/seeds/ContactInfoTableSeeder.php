<?php

use Illuminate\Database\Seeder;

class ContactInfoTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('contact_info')->truncate();

		DB::table('contact_info')->insert([
			'key' => 'email',
			'value' => 'reyoryan@gmail.com',
		]);

		DB::table('contact_info')->insert([
			'key' => 'subject',
			'value' => 'New Start Web Site',
		]);

		DB::table('contact_info')->insert([
			'key' => 'brief',
		]);

		DB::table('contact_info')->insert([
			'key' => 'address',
			'value' => 'Egypt - Mansoura',
		]);

		DB::table('contact_info')->insert([
			'key' => 'emails',
			'value' => 'info@emagile.com,test@test.com',
		]);

		DB::table('contact_info')->insert([
			'key' => 'phones',
			'value' => '01012887015,05418585115',
		]);

		DB::table('contact_info')->insert([
			'key' => 'fb',
		]);

		DB::table('contact_info')->insert([
			'key' => 'tw',
		]);

		DB::table('contact_info')->insert([
			'key' => 'skype',
		]);

		DB::table('contact_info')->insert([
			'key' => 'youtube',
		]);

		DB::table('contact_info')->insert([
			'key' => 'google',
		]);

		DB::table('contact_info')->insert([
			'key' => 'pint',
		]);

		DB::table('contact_info')->insert([
			'key' => 'instagram',
		]);

		DB::table('contact_info')->insert([
			'key' => 'map',
			'value' => '31.030915, 31.372932',
		]);
	}
}
