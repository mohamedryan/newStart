<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contact_info');
    }
}
