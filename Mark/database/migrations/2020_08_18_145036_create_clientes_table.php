<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
             $table->id();
            $table->foreignId('idEmpresa');
            $table->bigInteger('dpi')->unique();
            $table->integer('primerNombre');
            $table->integer('segundoNombre');
            $table->integer('tercerNombre')->nullable();
            $table->integer('primerApellido');
            $table->integer('segundoApellido')->nullable();
            $table->integer('apellidoCasado')->nullable();
            $table->date('fechaNacimiento');

            $table->foreign('idEmpresa')->references('id')->on('empresas');
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
        Schema::dropIfExists('clientes');
    }
}
