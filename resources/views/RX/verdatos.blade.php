<h2 class="titulos">RX Anterior y Diagnosticos</h2>

<div class="container lg:flex xl:flex md:flex sm:block mt-3">
    <!-- mero mero-->
    <div class="lg:w-1/2 xl:w-1/2 sm:block sm:w-full">
        <!-- Padre -->
        <div class="lg:w-full xl:w-full sm:w-full lg:flex mt-6">
            <!-- hijo-->
            <h2 class="subt">Ojo derecho</h2>

            <div class="relative mb-3 w-full mt-2">
                <input type="text" id="Esfera" name="Esfera" required class="caja"
                    @if (isset($rx)) value="{{ $rx->Esfera }}" @endif>
                <label for="Esfera" class="etiqueta">Esfera</label>
            </div>

            <div class="relative mb-3 w-full mt-2">
                <input type="text" id="cilindro" name="cilindro" required class="caja"
                    @if (isset($rx)) value="{{ $rx->Cilindro }}" @endif>
                <label for="cilindro" class="etiqueta">cilindro</label>
            </div>

            <div class="relative mb-3 w-full mt-2">
                <input type="text" id="Eje" name="Eje" required class="caja"
                    @if (isset($rx)) value="{{ $rx->Eje }}" @endif>
                <label for="Eje" class="etiqueta">Eje</label>
            </div>

            <div class="relative mb-3 w-full mt-2">
                <input type="text" id="Add" name="Add" required class="caja"
                    @if (isset($rx)) value="{{ $rx->Add }}" @endif>
                <label for="Add" class="etiqueta">Add</label>
            </div>

            <div class="relative mb-3 w-full mt-2">
                <input type="text" id="DI" name="DI" required class="caja"
                    @if (isset($rx)) value="{{ $rx->DI }}" @endif>
                <label for="DI" class="etiqueta">D.I</label>
            </div>

            <div class="relative mb-3 w-full mt-2">
                <input type="text" id="lejos" name="lejos" required class="caja"
                    @if (isset($rx)) value="{{ $rx->lejos }}" @endif>
                <label for="lejos" class="etiqueta">lejos</label>
            </div>

            <div class="relative mb-3 w-full mt-2">
                <input type="text" id="cerca" name="cerca" required class="caja"
                    @if (isset($rx)) value="{{ $rx->cerca }}" @endif>
                <label for="cerca" class="etiqueta">cerca</label>
            </div>
        </div>

        <div class="lg:w-full xl:w-full sm:w-full lg:flex">
            <!-- hijo-->

            <h2 class="subt">Ojo izquierdo</h2>

            <div class="relative mb-3 w-full mt-2">
                <input type="text" id="Esferai" name="Esferai" required class="caja"
                    @if (isset($rx)) value="{{ $rx->Esferai }}" @endif>
                <label for="Esferai" class="etiqueta">Esfera</label>
            </div>

            <div class="relative mb-3 w-full mt-2">
                <input type="text" id="cilindroi" name="cilindroi" required class="caja"
                    @if (isset($rx)) value="{{ $rx->Cilindroi }}" @endif>
                <label for="cilindroi" class="etiqueta">cilindro</label>
            </div>

            <div class="relative mb-3 w-full mt-2">
                <input type="text" id="Ejei" name="Ejei" required class="caja"
                    @if (isset($rx)) value="{{ $rx->Ejei }}" @endif>
                <label for="Ejei" class="etiqueta">Eje</label>
            </div>

            <div class="relative mb-3 w-full mt-2">
                <input type="text" id="Addi" name="Addi" required class="caja"
                    @if (isset($rx)) value="{{ $rx->Addi }}" @endif>
                <label for="Addi" class="etiqueta">Add</label>
            </div>

            <div class="relative mb-3 w-full mt-2">
                <input type="text" id="DIi" name="DIi" required class="caja"
                    @if (isset($rx)) value="{{ $rx->DIi }}" @endif>
                <label for="DIi" class="etiqueta">D.I</label>
            </div>

            <div class="relative mb-3 w-full mt-2">
                <input type="text" id="lejosi" name="lejosi" required class="caja"
                    @if (isset($rx)) value="{{ $rx->lejosi }}" @endif>
                <label for="lejosi" class="etiqueta">lejos</label>
            </div>

            <div class="relative mb-3 w-full mt-2">
                <input type="text" id="cercai" name="cercai" required class="caja"
                    @if (isset($rx)) value="{{ $rx->cercai }}" @endif>
                <label for="cercai" class="etiqueta">cerca</label>
            </div>

        </div>


        <!--
        -----------------------------------------------
        -->
        <h2 class="titulos mt-3">Con correccion</h2>

        <div class="lg:w-full xl:w-full sm:w-full lg:flex mt-6">
            <!-- hijo-->
            <h2 class="subt">Ojo derecho</h2>

            <div class="relative mb-3 w-full mt-2">
                <input type="text" id="EsferaC" name="EsferaC" required class="caja"
                    @if (isset($rx)) value="{{ $rx->EsferaC }}" @endif>
                <label for="EsferaC" class="etiqueta">Esfera</label>
            </div>

            <div class="relative mb-3 w-full mt-2">
                <input type="text" id="cilindroC" name="cilindroC" required class="caja"
                    @if (isset($rx)) value="{{ $rx->CilindroC }}" @endif>
                <label for="cilindroC" class="etiqueta">cilindro</label>
            </div>

            <div class="relative mb-3 w-full mt-2">
                <input type="text" id="EjeC" name="EjeC" required class="caja"
                    @if (isset($rx)) value="{{ $rx->EjeC }}" @endif>
                <label for="EjeC" class="etiqueta">Eje</label>
            </div>

            <div class="relative mb-3 w-full mt-2">
                <input type="text" id="AddC" name="AddC" required class="caja"
                    @if (isset($rx)) value="{{ $rx->AddC }}" @endif>
                <label for="AddC" class="etiqueta">Add</label>
            </div>

            <div class="relative mb-3 w-full mt-2">
                <input type="text" id="DIC" name="DIC" required class="caja"
                    @if (isset($rx)) value="{{ $rx->DIC }}" @endif>
                <label for="DIC" class="etiqueta">D.I</label>
            </div>

            <div class="relative mb-3 w-full mt-2">
                <input type="text" id="lejosC" name="lejosC" required class="caja"
                    @if (isset($rx)) value="{{ $rx->lejosC }}" @endif>
                <label for="lejosC" class="etiqueta">lejos</label>
            </div>

            <div class="relative mb-3 w-full mt-2">
                <input type="text" id="cercaC" name="cercaC" required class="caja"
                    @if (isset($rx)) value="{{ $rx->cercaC }}" @endif>
                <label for="cercaC" class="etiqueta">cerca</label>
            </div>
        </div>

        <div class="lg:w-full xl:w-full sm:w-full lg:flex mt-6">
            <!-- hijo-->
            <h2 class="subt">Ojo derecho</h2>

            <div class="relative mb-3 w-full mt-2">
                <input type="text" id="EsferaCI" name="EsferaCI" required class="caja"
                    @if (isset($rx)) value="{{ $rx->EsferaCI }}" @endif>
                <label for="EsferaCI" class="etiqueta">Esfera</label>
            </div>

            <div class="relative mb-3 w-full mt-2">
                <input type="text" id="cilindroCI" name="cilindroCI" required class="caja"
                    @if (isset($rx)) value="{{ $rx->CilindroCI }}" @endif>
                <label for="cilindroCI" class="etiqueta">cilindro</label>
            </div>

            <div class="relative mb-3 w-full mt-2">
                <input type="text" id="EjeCI" name="EjeCI" required class="caja"
                    @if (isset($rx)) value="{{ $rx->EjeCI }}" @endif>
                <label for="EjeCI" class="etiqueta">Eje</label>
            </div>

            <div class="relative mb-3 w-full mt-2">
                <input type="text" id="AddCI" name="AddCI" required class="caja"
                    @if (isset($rx)) value="{{ $rx->AddCI }}" @endif>
                <label for="AddCI" class="etiqueta">Add</label>
            </div>

            <div class="relative mb-3 w-full mt-2">
                <input type="text" id="DICI" name="DICI" required class="caja"
                    @if (isset($rx)) value="{{ $rx->DICI }}" @endif>
                <label for="DICI" class="etiqueta">D.I</label>
            </div>

            <div class="relative mb-3 w-full mt-2">
                <input type="text" id="lejosCI" name="lejosCI" required class="caja"
                    @if (isset($rx)) value="{{ $rx->lejosCI }}" @endif>
                <label for="lejosCI" class="etiqueta">lejos</label>
            </div>

            <div class="relative mb-3 w-full mt-2">
                <input type="text" id="cercaCI" name="cercaCI" required class="caja"
                    @if (isset($rx)) value="{{ $rx->cercaCI }}" @endif>
                <label for="cercaCI" class="etiqueta">cerca</label>
            </div>
        </div>




        <div class="relative mb-3 w-full mt-5">
            <input type="text" id="Tipo" name="Tipo" required class="caja"
                @if (isset($rx)) value="{{ $rx->Tipo }}" @endif>
            <label for="Tipo" class="etiqueta">Tipo</label>
        </div>
        <div class="relative mb-3 w-full">
            <input type="text" id="Material" name="Material" required class="caja"
                @if (isset($rx)) value="{{ $rx->Material }}" @endif>
            <label for="Material" class="etiqueta">Material</label>
        </div>
        <div class="relative mb-3 w-full">
            <input type="text" id="Color" name="Color" required class="caja"
                @if (isset($rx)) value="{{ $rx->Color }}" @endif>
            <label for="Color" class="etiqueta">Color</label>
        </div>

    </div>


    <div class="lg:w-1/2 xl:w-1/2 sm:block sm:w-full">
        <!-- Padre -->
        <h2 class="subt"> RX anterior</h2>
        <div class="lg:w-full xl:w-full sm:w-full lg:flex mt-2">
            <!-- hijo-->
            <div class="relative mb-3 w-full">
                <input type="text" id="RefractivoD" name="RefractivoD" required class="caja"
                    @if (isset($rx)) value="{{ $rx->RefractivoOD }}" @endif>
                <label for="RefractivoD" class="etiqueta">Refractivo O.D</label>
            </div>
            <div class="relative mb-3 w-full">
                <input type="text" id="RefractivoI" name="RefractivoI" required class="caja"
                    @if (isset($rx)) value="{{ $rx->RefractivoOI }}" @endif>
                <label for="RefractivoI" class="etiqueta">Refractivo O.I</label>
            </div>

        </div>

        <div class="relative mb-3 w-full">
            <input type="text" id="binocular" name="binocular" required class="caja"
                @if (isset($rx)) value="{{ $rx->VisionBinocular }}" @endif>
            <label for="binocular" class="etiqueta">Vision binocular</label>
        </div>
        <div class="relative mb-3 w-full">
            <input type="text" id="SaludOcular" name="SaludOcular" required class="caja"
                @if (isset($rx)) value="{{ $rx->SaludOcular }}" @endif>
            <label for="SaludOcular" class="etiqueta">Salud ocular</label>
        </div>

        <h2 class="subt">Plan de manejo</h2>
        <div class="relative mb-3 w-full">
            <input type="text" id="I" name="I" required class="caja"
                @if (isset($rx)) value="{{ $rx->I }}" @endif>
            <label for="I" class="etiqueta">I</label>
        </div>
        <div class="relative mb-3 w-full">
            <input type="text" id="II" name="II" required class="caja"
                @if (isset($rx)) value="{{ $rx->II }}" @endif>
            <label for="II" class="etiqueta">II</label>
        </div>
        <div class="relative mb-3 w-full">
            <input type="text" id="III" name="III" required class="caja"
                @if (isset($rx)) value="{{ $rx->III }}" @endif>
            <label for="III" class="etiqueta">III</label>
        </div>

        <h2 class="subt">Observaciones</h2>
        <div class="relative mb-3 w-full">
            <label for="Observaciones" class="etiqueta">Observaciones</label>
            <textarea name="Observaciones" id="Observaciones" class="caja" cols="30" rows="5">{{ trim($rx->Observaciones) }}</textarea>
        </div>
    </div>
</div>

<div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8 text-center">
    <a class="prim tran" href="{{ url('historial') }}" role="button">
        <i class="fi fi-rr-angle-left"></i>
        regresar</a>

    <button type="submit" class="btnY tran">
        Modificar
        <i class="fi fi-rr-edit"></i>
    </button>
</div>
