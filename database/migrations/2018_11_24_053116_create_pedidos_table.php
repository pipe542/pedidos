<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('plato_id')->unsigned();
            $table->integer('bebida_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('restaurante_id')->unsigned();

            //relacion
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('bebida_id')->references('id')->on('bebidas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('plato_id')->references('id')->on('platos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('restaurante_id')->references('user_id')->on('restaurantes')
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
        Schema::dropIfExists('pedidos');
    }
}
