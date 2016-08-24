<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('cash_register_id')->unsigned();
            $table->foreign('cash_register_id')->references('id')->on('cash_registers');
            $table->dateTime('date');
            $table->decimal('amount', 5, 2);
            $table->decimal('balance', 5, 2);
            $table->boolean('active');
            $table->timestamp('saved_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('courts');
    }
}
