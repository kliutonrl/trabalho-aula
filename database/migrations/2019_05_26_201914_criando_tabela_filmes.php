<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriandoTabelaFilmes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filmes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('video')->default('');
            $table->string('capa')->default('');
            $table->integer('ano');
            $table->integer('duracao');
            $table->string('classificacao');
            $table->string('categoria');
            $table->text('resumo');
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
        Schema::dropIfExists('filmes');
    }
}
