<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farms_activies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_farm')->unsigned();
            $table->foreign('id_farm')->references('id')->on('farms');
            $table->integer('id_activity')->unsigned();
            $table->foreign('id_activity')->references('id')->on('activities');
            $table->integer('deleted')->unsigned()->default(0);
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
        Schema::dropIfExists('farms_activies');
    }
};
