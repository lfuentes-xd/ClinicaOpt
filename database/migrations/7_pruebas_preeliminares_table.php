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
        Schema::create('Pruebas_preeliminares', function (Blueprint $table){
            $table->id(); //<-- aca se va a poner la llave foranea

            $table->String('nombrePac');
            $table->String('apellidosPac');

            //Sin correccion
            $table->integer('lejosOD');
            $table->integer('capvisualOD');
            $table->integer('cercaOD');
            $table->integer('lejosOI');
            $table->integer('capvisualOI');
            $table->integer('cercaOI');

            //con correccion
            $table->integer('lejosODC');
            $table->integer('cercaODC');
            $table->integer('lejosOIC');
            $table->integer('cercaOIC');

            //otro
            $table->String('pupilas');
            $table->String('DI');
            $table->String('MEO');

            //Campos visuales
            $table->String('Hirschberg');
            $table->String('Oizq');
            $table->String('Oder');
            $table->String('CoverTLejos');
            $table->String('cerca');

            //oftalmoscopia ojo Izquierdo
            $table->String('MEDIOSI');
            $table->String('EPI');
            $table->String('COLORI');
            $table->String('MARGENI');
            $table->String('VASOSI');
            $table->String('MACULAI');
            $table->String('FIJACIONI');
            $table->String('RETINAI');

            //oftalmoscopia ojo derecho
            $table->String('MEDIOSD');
            $table->String('EPD');
            $table->String('COLORD');
            $table->String('MARGEND');
            $table->String('VASOSD');
            $table->String('MACULAD');
            $table->String('FIJACIOND');
            $table->String('RETINAD');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Historial_clinicoP2');
    }
};
