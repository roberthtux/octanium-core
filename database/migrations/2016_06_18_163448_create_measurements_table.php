<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeasurementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('measurements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hose_id')->unsigned();
            $table->foreign('hose_id')->references('id')->on('hoses');
            $table->integer('court_id')->unsigned();
            $table->foreign('court_id')->references('id')->on('courts');
            $table->integer('schedule_id')->unsigned();
            $table->foreign('schedule_id')->references('id')->on('schedules');
            $table->decimal('initial_measurement', 5, 2);
            $table->decimal('end_measurement', 5, 2);
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
        Schema::drop('measurements');
    }
}
