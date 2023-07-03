<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('Grupo');
            $table->string('Marca');
            $table->string('Descripcion');
            $table->integer('Precio_vta');
            $table->date('Fecha_alta');
            $table->string('Existencia');
            $table->unsignedBigInteger('claveMarca');
            $table->unsignedBigInteger('claveGrupo');

            $table->foreign('claveMarca')->references('id')->on('marcas');
            $table->foreign('claveGrupo')->references('id')->on('grupos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
