<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitServicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicit_servico', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('chat')->nullable();
            $table->string('validacao', 20);
            $table->string('status', 20);
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('tecnico_id');
            $table->float('avaliação');
            $table->unsignedBigInteger('servico_id');
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('tecnico_id')->references('id')->on('tecnicos');
            $table->foreign('servico_id')->references('id')->on('servicos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicit_servico');
    }
}
