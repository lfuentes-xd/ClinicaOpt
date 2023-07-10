<h2 class="titulos ">Pruebas Funcionales</h2>
<h2 class="subt">Pruebas funcionales binoculares</h2>

<div class="container lg:flex xl:flex md:flex sm:block mt-3">
    <!-- awelo -->

    <div class="lg:w-1/2 xl:w-1/2 lg:flex xl:flex sm:block sm:w-full">
        <!-- padre 1-->
        <div class="lg:w-1/2 xl:w-1/2 sm:w-full">
            <!-- hijo-->

            <h2 class="titulos">Ojo derecho</h2>

            <div class="relative mb-3 w-full mt-2">
                <input type="text" id="ANEXOS" name="ANEXOS" required class="caja"
                    @if (isset($salud)) value="{{ $salud->Anexos }}" @endif>
                <label for="ANEXOS" class="etiqueta">ANEXOS</label>
            </div>

            <div class="relative mb-3 w-full">
                <input type="text" id="Conjuntiva" name="Conjuntiva" required
                    class="caja"@if (isset($salud)) value="{{ $salud->Conjuntiva }}" @endif>
                <label for="Conjuntiva" class="etiqueta">Conjuntiva</label>
            </div>

            <div class="relative mb-3 w-full">
                <input type="text" id="Esclera" name="Esclera" required class="caja"
                    @if (isset($salud)) value="{{ $salud->Escalera }}" @endif>
                <label for="Esclera" class="etiqueta">Esclera</label>
            </div>

            <div class="relative mb-3 w-full">
                <input type="text" id="Cornea" name="Cornea" required class="caja"
                    @if (isset($salud)) value="{{ $salud->Cornea }}" @endif>
                <label for="Cornea" class="etiqueta">Cornea</label>
            </div>

            <div class="relative mb-3 w-full">
                <input type="text" id="TLR" name="TLR" required class="caja"
                    @if (isset($salud)) value="{{ $salud->TRL }}" @endif>
                <label for="TLR" class="etiqueta">TLR</label>
            </div>

            <div class="md:w-full lg:flex xl:flex sm:block">

                <div class="relative mb-3 w-full">
                    <input type="text" id="TD" name="TD" required class="caja"
                        @if (isset($salud)) value="{{ $salud->VonHerickT }}" @endif>
                    <label for="TD" class="etiqueta">T</label>
                </div>

                <div class="relative mb-3 w-full">
                    <input type="text" id="ND" name="ND" required class="caja"
                        @if (isset($salud)) value="{{ $salud->VonHerickT }}" @endif>
                    <label for="ND" class="etiqueta">N</label>
                </div>

            </div>

            <div class="relative mb-3 w-full">
                <input type="text" id="camD" name="camD" required class="caja"
                    @if (isset($salud)) value="{{ $salud->CamaraAnterior }}" @endif>
                <label for="camD" class="etiqueta">Camara anterior</label>
            </div>

            <div class="relative mb-3 w-full">
                <input type="text" id="Iris" name="Iris" required class="caja"
                    @if (isset($salud)) value="{{ $salud->Iris }}" @endif>
                <label for="Iris" class="etiqueta">Iris</label>
            </div>

            <div class="relative mb-3 w-full">
                <input type="text" id="Cristalino" name="Cristalino" required class="caja"
                    @if (isset($salud)) value="{{ $salud->Cristalino }}" @endif>
                <label for="Cristalino" class="etiqueta">Cristalino</label>
            </div>

        </div>

        <div class="lg:w-1/2 xl:w-1/2 sm:w-full">
            <!-- hijo-->

            <h2 class="titulos">Ojo Izquierdo</h2>

            <div class="relative mb-3 w-full mt-2">
                <input type="text" id="ANEXOSi" name="ANEXOSi" required class="caja"
                    @if (isset($salud)) value="{{ $salud->AnexosI }}" @endif>
                <label for="ANEXOSi" class="etiqueta">ANEXOS</label>
            </div>

            <div class="relative mb-3 w-full">
                <input type="text" id="Conjuntivai" name="Conjuntivai" required class="caja"
                    @if (isset($salud)) value="{{ $salud->ConjuntivaI }}" @endif>
                <label for="Conjuntivai" class="etiqueta">Conjuntiva</label>
            </div>

            <div class="relative mb-3 w-full">
                <input type="text" id="Esclerai" name="Esclerai" required class="caja"
                    @if (isset($salud)) value="{{ $salud->EscaleraI }}" @endif>
                <label for="Esclerai" class="etiqueta">Esclera</label>
            </div>

            <div class="relative mb-3 w-full">
                <input type="text" id="Corneai" name="Corneai" required class="caja"
                    @if (isset($salud)) value="{{ $salud->CorneaI }}" @endif>
                <label for="Corneai" class="etiqueta">Cornea</label>
            </div>

            <div class="relative mb-3 w-full">
                <input type="text" id="TLRi" name="TLRi" required class="caja"
                    @if (isset($salud)) value="{{ $salud->TRLI }}" @endif>
                <label for="TLRi" class="etiqueta">TLR</label>
            </div>

            <div class="md:w-full lg:flex xl:flex sm:block">

                <div class="relative mb-3 w-full">
                    <input type="text" id="TDi" name="TDi" required class="caja"
                        @if (isset($salud)) value="{{ $salud->VonHerickTI }}" @endif>
                    <label for="TDi" class="etiqueta">T</label>
                </div>

                <div class="relative mb-3 w-full">
                    <input type="text" id="NDi" name="NDi" required class="caja"
                        @if (isset($salud)) value="{{ $salud->VonHerickNI }}" @endif>
                    <label for="NDi" class="etiqueta">N</label>
                </div>

            </div>

            <div class="relative mb-3 w-full">
                <input type="text" id="cami" name="cami" required class="caja"
                    @if (isset($salud)) value="{{ $salud->CamaraAnteriorI }}" @endif>
                <label for="cami" class="etiqueta">Camara anterior</label>
            </div>

            <div class="relative mb-3 w-full">
                <input type="text" id="Irisi" name="Irisi" required class="caja"
                    @if (isset($salud)) value="{{ $salud->IrisI }}" @endif>
                <label for="Irisi" class="etiqueta">Iris</label>
            </div>

            <div class="relative mb-3 w-full">
                <input type="text" id="Cristalinoi" name="Cristalinoi" required class="caja"
                    @if (isset($salud)) value="{{ $salud->CristalinoI }}" @endif>
                <label for="Cristalinoi" class="etiqueta">Cristalino</label>
            </div>

        </div>
    </div>

    <!--
-----------------------------------------------------

M I T A D

------------------------------------------------------

-->

    <div class="lg:w-1/2 xl:w-1/2 lg:flex xl:flex sm:block sm:w-full">
        <!-- padre 2-->

        <div class="sm:w-full">
            <!-- hijo-->

            <h2 class="titulos">Pruebas suplementarias</h2>

            <div class="relative mb-3 w-full mt-2">
                <input type="text" id="presion" name="presion" required class="caja"
                    @if (isset($salud)) value="{{ $salud->Presionintra }}" @endif>
                <label for="presion" class="etiqueta">Presion intraocular</label>
            </div>

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
