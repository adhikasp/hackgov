<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUkmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ukms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('founder_id');
            $table->string('name');
            $table->string('category');
            $table->string('address');
            $table->string('profile_picture')->nullable();
            $table->string('short_description');
            $table->string('long_description');
            $table->string('follower_number');

            $table->float('lat');
            $table->float('lng');

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
        Schema::drop('ukms');
    }
}
