<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mark_id')->unsigned();
            $table->foreign('mark_id')->references('id')->on('marks');
            $table->string('concept');
            $table->decimal('unit_price', 5, 2);
            $table->string('barcode');
            $table->string('type');
            $table->boolean('active');
            $table->decimal('discount_price', 5, 2);
            $table->decimal('cost_price', 5, 2);
            $table->boolean('price_included_IVA');
            $table->boolean('price_control');
            $table->boolean('stock_minimum');
            $table->boolean('stock_maximum');
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
        Schema::drop('products');
    }
}
