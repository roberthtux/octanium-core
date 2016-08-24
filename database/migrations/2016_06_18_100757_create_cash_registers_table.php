<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCashRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_registers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('locked_user_id')->unsigned();
            $table->foreign('locked_user_id')->references('id')->on('users');
            $table->integer('accounting_account_id')->unsigned();
            $table->foreign('accounting_account_id')->references('id')->on('accounting_accounts');
            $table->integer('cost_center_id')->unsigned();
            $table->foreign('cost_center_id')->references('id')->on('cost_centers');
            $table->string('description');
            $table->boolean('active');
            $table->boolean('locked');
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
        Schema::drop('cash_registers');
    }
}
