<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('schedule_id')->unsigned();
            $table->foreign('schedule_id')->references('id')->on('schedules');
            $table->integer('payment_form_id')->unsigned();
            $table->foreign('payment_form_id')->references('id')->on('payment_forms');
            $table->decimal('subtotal', 5, 2);
            $table->decimal('IEPS', 5, 2);
            $table->decimal('IVA', 5, 2);
            $table->decimal('total', 5, 2);
            $table->boolean('active');
            $table->boolean('invoiced');
            $table->string('barcode');
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
        Schema::drop('tickets');
    }
}
