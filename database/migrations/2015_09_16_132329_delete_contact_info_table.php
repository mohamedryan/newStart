<?php

use Illuminate\Database\Migrations\Migration;

class DeleteContactInfoTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::drop('contact_info');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::create('contact_info', function (Blueprint $table) {
			$table->increments('id');
			$table->string('email');
			$table->string('subject');
			$table->text('brief')->nullable();
			$table->string('address');
			$table->string('emails');
			$table->string('phones')->nullable();
			$table->string('fb')->nullable();
			$table->string('tw')->nullable();
			$table->string('youtube')->nullable();
			$table->string('google')->nullable();
			$table->string('pint')->nullable();
			$table->string('instagram')->nullable();
			$table->string('map');
			$table->timestamps();
		});
	}
}
