<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('user_type_id')->unsigned();
            $table->foreign('user_type_id')->references('id')->on('user_types');
            $table->integer('turn_id')->unsigned();
            $table->foreign('turn_id')->references('id')->on('turns');
            $table->string('name',50);
            $table->string('first_lastname',50);
            $table->string('second_lastname',50);
            $table->string('login',30);
            $table->string('password',30);
            $table->string('email',50);
            $table->string('api_token',60);
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
        Schema::drop('users');
    }
}
