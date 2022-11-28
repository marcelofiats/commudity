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
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->double('quantity', 15, 3);
            $table->integer('year')->nullable();
            $table->double('area', 15, 2);
            $table->integer('deleted')->unsigned()->default(0);
            $table->integer('id_culture')->unsigned()->nullable();
            $table->foreign('id_culture')->references('id')->on('cultures');
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
        Schema::dropIfExists('activities');
    }
};
