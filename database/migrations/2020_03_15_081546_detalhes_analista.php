<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalhesAnalista extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analistas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('nome');
            $table->time('inicio_turno');
            $table->time('fim_turno');
            $table->text('detalhe');

        };
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
