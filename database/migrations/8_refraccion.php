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
        Schema::create('refraccion', function (Blueprint $table) {

            $table->id();
            //datos del paciente
            $table->String('nombrePac');
            $table->String('apellidosPac');
            //keratometria
            $table->String('OD');
            $table->String('OI');
            $table->String('ODI');
            $table->String('OII');

            //Retinoscopia
            $table->String('ODer');
            $table->String('OIzq');
            $table->String('ODav');
            $table->String('OIav');

            //Retinoscopia
            $table->String('oir');
            $table->String('odr');

            //torcidad
            $table->String('Tod');
            $table->String('Toi');

            //Miras
            $table->String('Mod');
            $table->String('Moi');

            //dosificacion
            $table->String('ODerd');
            $table->String('OIzqd');
            $table->String('ODavd');
            $table->String('OIavd');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('refraccion');
    }
};
