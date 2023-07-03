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
        Schema::create('historial_clinicos', function (Blueprint $table) {
            $table->id(); #<-- id del historial
            $table->String("nombrePac");
            $table->String("apellidoPac");
            //motivo de la consulta
            $table->String("Vista_borrosa");
            $table->String("Fatiga_Ocular");
            $table->String("Cefalea");
            $table->String("Sintomas_externos");
            $table->String("Alteraciones");
            $table->String("Vision_doble");
            $table->String("Desviacion_Ocular");
            $table->String("Problemas_lectura");
            //Historia ocular
            $table->String("Historial_oc");
            //historial de salud
            $table->String("Salud_general");
            $table->String("medicamentos");
            $table->String("alergias");
            //impresion diagnostica
            $table->String("ocular");
            $table->String("medica");
            $table->String("impresion_diag");


      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_clinicos');
    }
};
