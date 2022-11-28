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
        Schema::create('producers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 120);
            $table->string('phone', 14);
            $table->string('email', 120);
            $table->string('document', 25)->unique();
            $table->enum('type_document', ['cpf', 'cnpj'])->default('cpf');
            $table->date('birthday')->nullable();
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
        Schema::dropIfExists('producers');
    }
};
