<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 100);
            $table->string('email', 100);
            $table->string('senha', 100);
            $table->string('cpf', 14);
            $table->date('data_nasc');
            $table->string('celular', 15);
            $table->string('telefone', 14)->nullable();
            $table->unsignedBigInteger('endereco_id');
            $table->unsignedBigInteger('filtro_id')->nullable();
            $table->string('nivel', 20);
            $table->timestamps();

            $table->foreign('endereco_id')->references('id')->on('enderecos');
            $table->foreign('filtro_id')->references('id')->on('filtros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
