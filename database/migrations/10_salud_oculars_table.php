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
        Schema::create('salud_oculars', function (Blueprint $table) {
            $table->id();

            //personales
            $table->String('nombrePac');
            $table->String('apellidosPac');

            $table->string('Anexos');
            $table->string('Conjuntiva');
            $table->string('Escalera');
            $table->string('Cornea');
            $table->string('TRL');
            $table->string('VonHerickT');
            $table->string('VonHerickN');
            $table->string('CamaraAnterior');
            $table->string('Iris');
            $table->string('Cristalino');

            $table->string('AnexosI');
            $table->string('ConjuntivaI');
            $table->string('EscaleraI');
            $table->string('CorneaI');
            $table->string('TRLI');
            $table->string('VonHerickTI');
            $table->string('VonHerickNI');
            $table->string('CamaraAnteriorI');
            $table->string('IrisI');
            $table->string('CristalinoI');

            $table->string('Presionintra');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salud_oculars');
    }
};
