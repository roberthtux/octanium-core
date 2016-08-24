<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountingAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounting_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account');
            $table->boolean('active');
            $table->string('description');
            $table->enum('type',['ACUMULATIVA','DETALLE']);
            $table->enum('nature',['DEUDORA', 'ACREEDORA']);
            $table->integer('father')->unsigned();
            $table->integer('item_id')->unsigned();
            $table->foreign('item_id')->references('id')->on('items');
            $table->softDeletes();
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
        Schema::drop('accounting_accounts');
    }
}
