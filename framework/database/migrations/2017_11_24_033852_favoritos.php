<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Favoritos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favoritos', function (Blueprint $table) {
            
            $table->integer('codigo_usuario')->unsigned();
            $table->foreign('codigo_usuario')->references('codigo_usuario')->on('usuarios');
            $table->integer('codigo_usuario_favorito')->unsigned();
            $table->foreign('codigo_usuario_favorito')->references('codigo_usuario')->on('usuarios');
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favoritos');
    }
}
