<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ware', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('beschreibung');
            $table->string('Kategorie');
            $table->double('preis');
            $table->string('bild');

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
        Schema::drop('ware');
    }
}
