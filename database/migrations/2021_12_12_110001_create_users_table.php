<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('name', 100);
            $table->string('username', 100)->unique();
            $table->string('email', 100)->unique();
            $table->string('password', 100);
            $table->string('image')->default('user.png');
            $table->char('phone', 11)->nullable();
            $table->enum('auth_level', ['Admin', 'Store', 'User'])->default('User');
            $table->integer('store_id', false, true)->length(10)->nullable();
            $table->foreign('store_id')->references('store_id')->on('store');
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
        Schema::dropIfExists('users');
    }
}
