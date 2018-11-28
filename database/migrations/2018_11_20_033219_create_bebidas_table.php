<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBebidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bebidas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('precio');
            $table->string('estado');
            $table->integer('restaurante_id')->unsigned();
            $table->timestamps();
            $table->foreign('restaurante_id', 'bebidas_restaurante_id_foreign')->references('user_id')->on('restaurantes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bebidas');
    }
}
