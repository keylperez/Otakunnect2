<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreferenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preference', function (Blueprint $table) {
            $table->increments('cart_id');
            $table->integer('user_id', false, true)->length(10);
            $table->integer('anime_id', false, true)->length(10)->nullable();
            $table->integer('category_id', false, true)->nullable();
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('anime_id')->references('anime_id')->on('anime');
            $table->foreign('category_id')->references('category_id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preference');
    }
}
