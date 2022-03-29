<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hackers', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->date('fecha_nacimiento');
            $table->string('sexo');
            $table->string('estado_civil');
            $table->longText('descripcion');
            $table->string('estatus');
            $table->longText('imagen');
            $table->unsignedBigInteger('tipohacker_id');
            $table->foreign('tipohacker_id')->references('id')->on('tipohackers')->onDelate('cascade');
            $table->unsignedBigInteger('grupo_hacker_id');
            $table->foreign('grupo_hacker_id')->references('id')->on('grupo_hackers')->onDelate('cascade');
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
        Schema::dropIfExists('hackers');
    }
};
