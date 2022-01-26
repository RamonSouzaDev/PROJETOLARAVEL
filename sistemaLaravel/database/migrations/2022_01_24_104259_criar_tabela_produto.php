<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaProduto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto', function (Blueprint $table) {
            $table->integer('idproduto');
            $table->integer('idcategoria')->references('idcategoria')->on('categoria');
            $table->string('codigo', 80);
            $table->integer('estoque', 80);
            $table->integer('descricao');
            $table->string('imagem', 80);
            $table->string('estado', 80);
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
        Schema::dropIfExists('produto');
    }
}
