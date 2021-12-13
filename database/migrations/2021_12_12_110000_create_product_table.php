<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('name', 50);
            $table->string('img', 100);
            $table->integer('price');
            $table->string('desc', 500)->nullable();
            $table->integer('category_id', false, true)->length(10)->nullable();
            $table->integer('anime_id', false, true)->length(10)->nullable();
            $table->integer('store_id', false, true)->length(10);
            $table->enum('deleted', ['Deleted', 'Not Deleted'])->default('Not Deleted');
            $table->foreign('category_id')->references('category_id')->on('category');
            $table->foreign('anime_id')->references('anime_id')->on('anime');
            $table->foreign('store_id')->references('store_id')->on('store');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
