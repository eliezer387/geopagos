<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsuariosPagos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_pagos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo_pago')->unsigned();
            $table->foreign('codigo_pago')->references('codigo_pago')->on('pagos');
            $table->integer('codigo_usuario')->unsigned();
            $table->foreign('codigo_usuario')->references('codigo_usuario')->on('usuarios');
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios_pagos');
    }
}
