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
        Schema::create('pruebas_funcionales', function (Blueprint $table) {
            $table->id();

             //datos del paciente
            $table->String('nombrePac');
            $table->String('apellidosPac');

            $table->String('FLL');
            $table->String('FVL');
            $table->string('VLL');
            $table->string('BNL');
            $table->string('BTL');
            $table->string('CCF');
            $table->string('ARN');
            $table->string('ARP');
            $table->string('ADDO');
            $table->string('FLC');
            $table->string('FLC100');
            $table->string('ACA');
            $table->string('FVC');
            $table->string('VVC');
            $table->string('BNC');
            $table->string('BNT');

            $table->String('AO');
            $table->String('ODER');
            $table->String('OIZ');


            $table->string('PPCNA');
            $table->string('AAODER');
            $table->string('PPCA');
            $table->string('OIZQ');



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pruebas_funcionales');
    }
};
