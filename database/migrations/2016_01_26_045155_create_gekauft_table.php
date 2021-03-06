<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGekauftTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gekauft', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('userid')->unsigned();
            $table->foreign('userid')->references('id')->on('users');

            $table->integer('wareid')->unsigned();
            $table->foreign('wareid')->references('id')->on('ware');

            $table->integer('menge');
            $table->date('datum');

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
        Schema::drop('gekauft');
    }
}
