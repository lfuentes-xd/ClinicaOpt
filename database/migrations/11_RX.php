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
        Schema::create('rx', function (Blueprint $table) {
            $table->id();

            $table->String('nombrePac');
            $table->String('apellidosPac');

            $table->integer('Esfera');
            $table->integer('Cilindro');
            $table->integer('Eje');
            $table->integer('Add');
            $table->integer('DI');
            $table->integer('lejos');
            $table->integer('cerca');

            $table->integer('Esferai');
            $table->integer('Cilindroi');
            $table->integer('Ejei');
            $table->integer('Addi');
            $table->integer('DIi');
            $table->integer('lejosi');
            $table->integer('cercai');

            $table->integer('EsferaC');
            $table->integer('CilindroC');
            $table->integer('EjeC');
            $table->integer('AddC');
            $table->integer('DIC');
            $table->integer('lejosC');
            $table->integer('cercaC');

            $table->integer('EsferaCI');
            $table->integer('CilindroCI');
            $table->integer('EjeCI');
            $table->integer('AddCI');
            $table->integer('DICI');
            $table->integer('lejosCI');
            $table->integer('cercaCI');

            $table->string('Tipo');
            $table->string('Material');
            $table->string('Color');

            $table->string('RefractivoOD');
            $table->string('RefractivoOI');
            $table->string('VisionBinocular');
            $table->string('SaludOcular');

            $table->string('I');
            $table->string('II');
            $table->string('III');

            $table->string('Observaciones');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rx');
    }
};
