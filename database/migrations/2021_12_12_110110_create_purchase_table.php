<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase', function (Blueprint $table) {
            $table->increments('purchase_id');
            $table->dateTime('claim_date')->nullable();
            $table->enum('claim_confirm', ['Unclaimed', 'Claimed'])->default('Unclaimed');
            $table->decimal('price', 10, 2);
            $table->integer('user_id', false, true)->length(10);
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase');
    }
}
