<div class="container lg:flex xl:flex md:flex sm:block mt-3">
    <!-- principal -->
    <div class="lg:w-1/2 xl:w-1/2 sm:block sm:w-full">
        <!-- Padre -->
        <div class="mb-5 sm:block sm:w-full">
            <div>
                <h1 class="font-semibold">Agudeza
                    <span class="font-extrabold">visual</span>
                </h1>

                <h3 class="mr-4 mt-3 font-bold text-center">sin corrección</h3>

                <div class="mt-4 flex w-2/3 ">

                    <h3 class="mr-4">ojo derecho</h3>
                    <div class="relative mb-3 w-full">
                        <input type="number" id="lejosD" name="lejosD" required class="caja"
                            @if (isset($pruebas)) value="{{ $pruebas->lejosOD }}" @endif>
                        <label for="lejosD" class="etiqueta">lejos</label>
                    </div>
                    <div class="relative mb-3 w-full">
                        <input type="number" id="capacidadvisualD" name="capacidadvisualD" required class="caja"
                            @if (isset($pruebas)) value="{{ $pruebas->capvisualOD }}" @endif>
                        <label for="capacidadvisualD" class="etiqueta">capacidad
                            visual</label>
                    </div>
                    <div class="relative mb-3 w-full">
                        <input type="number" id="cercaD" name="cercaD" required class="caja"
                            @if (isset($pruebas)) value="{{ $pruebas->cercaOD }}" @endif>
                        <label for="cercaD" class="etiqueta">cerca</label>
                    </div>
                </div>

                <div class="flex w-2/3">

                    <h3 class="mr-4">ojo izquierdo</h3>

                    <div class="relative mb-3 w-full">
                        <input type="number" id="lejosI" name="lejosI" required class="caja"
                            @if (isset($pruebas)) value="{{ $pruebas->lejosOI }}" @endif>
                        <label for="lejosI" class="etiqueta">lejos</label>
                    </div>
                    <div class="relative mb-3 w-full">
                        <input type="number" id="capacidadvisualI" name="capacidadvisualI" required class="caja"
                            @if (isset($pruebas)) value="{{ $pruebas->capvisualOI }}" @endif>
                        <label for="capacidad-visualI" class="etiqueta">capacidad
                            visual</label>
                    </div>
                    <div class="relative mb-3 w-full">
                        <input type="number" id="cercaI" name="cercaI" required class="caja"
                            @if (isset($pruebas)) value="{{ $pruebas->cercaOI }}" @endif>
                        <label for="cercaI" class="etiqueta">cerca</label>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <h3 class="mt-4 font-bold">con corrección</h3>
                <div class="mt-3 flex w-full">
                    <h3 class="mr-4">ojo derecho</h3>
                    <div class="relative mb-3">
                        <input type="number" id="lejosC" name="lejosC" required class="caja"
                            @if (isset($pruebas)) value="{{ $pruebas->lejosODC }}" @endif>
                        <label for="lejosC" class="etiqueta">lejos</label>
                    </div>
                    <div class="relative mb-3">
                        <input type="number" id="cercaC" name="cercaC" required class="caja"
                            @if (isset($pruebas)) value="{{ $pruebas->cercaODC}}" @endif>
                        <label for="cercaC" class="etiqueta">cerca</label>
                    </div>
                </div>


                <div class="flex w-full">
                    <h3 class="mr-2">ojo izquierdo</h3>
                    <div class="relative mb-3">
                        <input type="number" id="lejosCI" name="lejosCI" required class="caja"
                            @if (isset($pruebas)) value="{{ $pruebas->lejosOIC }}" @endif>
                        <label for="lejosCI" class="etiqueta">lejos</label>
                    </div>
                    <div class="relative mb-3">
                        <input type="number" id="cercaCI" name="cercaCI" required class="caja"
                            @if (isset($pruebas)) value="{{ $pruebas->cercaOIC }}" @endif>
                        <label for="cercaCI" class="etiqueta">cerca</label>
                    </div>
                </div>
            </div>
            <!--
                ----------------------------------------
                seccion 2
                ---------------------------------------
            -->
            <div class="mt-5">
                <div class="relative mb-3">
                    <input type="text" id="pupilas" name="pupilas" required class="caja"
                    @if (isset($pruebas)) value="{{ $pruebas->pupilas }}" @endif>
                    <label for="pupilas" class="etiqueta">pupilas</label>
                </div>

                <div class="relative mb-3">
                    <input type="text" id="DI" name="DI" required class="caja"
                    @if (isset($pruebas)) value="{{ $pruebas->DI }}" @endif>
                    <label for="DI" class="etiqueta">D.I</label>
                </div>
                <div class="relative mb-3">
                    <input type="text" id="MEO" name="MEO" required class="caja"
                    @if (isset($pruebas)) value="{{ $pruebas->MEO }}" @endif>
                    <label for="MEO" class="etiqueta">M.E.O</label>
                </div>

                <!--
                    ---------------------
                    seccion 3
                    ---------------------
                -->
                <h2 class="font-semibold text-center">campos visuales por confrontacion</h2>
                <div class="relative mb-3">
                    <input type="text" id="Heisenberg" name="Heisenberg" required class="caja"
                    @if (isset($pruebas)) value="{{ $pruebas->Hirschberg }}" @endif>
                    <label for="Heisenberg" class="etiqueta">Heisenberg</label>
                </div>

                <div class="flex">
                    <h3 class="mr-4">ojo izquierdo</h3>
                    <div class="relative mb-3">
                        <input type="number" id="izq" name="izq" required class="caja"
                        @if (isset($pruebas)) value="{{ $pruebas->Oizq }}" @endif>
                    </div>
                    <h3 class="mx-4">ojo derecho</h3>
                    <div class="relative mb-3">
                        <input type="number" id="der" name="der" required class="caja"
                        @if (isset($pruebas)) value="{{ $pruebas->Oder }}" @endif>
                    </div>
                </div>



                <div class="relative mb-3 mt-3">
                    <input type="text" id="test" name="test" required class="caja"
                    @if (isset($pruebas)) value="{{ $pruebas->CoverTLejos }}" @endif>
                    <label for="test" class="etiqueta">Cover-test</label>
                </div>
                <div class="relative mb-3">
                    <input type="text" id="cercaT" name="cercaT" required class="caja"
                    @if (isset($pruebas)) value="{{ $pruebas->cerca }}" @endif>
                    <label for="cercaT" class="etiqueta">cerca</label>
                </div>

            </div>
        </div>
    </div>
    <!--
        ----------------------------------------------------
        la otra mitad
        ---------------------------------------------------
    -->
    <div class="lg:w-1/2 xl:w-1/2 sm:block sm:w-full">
        <!-- Padre -->
        <h2 class="font-semibold text-center">Oftalmoscopia</h2>
        <div class="container flex">
            <div class="lg:w-1/2 xl:w-1/2 sm:w-full">
                <!-- hijo-->
                <h3 class="text-center">ojo Izquierdo</h3>
                <div class="relative mb-3 mt-5">
                    <input type="text" id="MediosI" name="MediosI" required class="caja"
                    @if (isset($pruebas)) value="{{ $pruebas->MEDIOSI }}" @endif>
                    <label for="MediosI" class="etiqueta">Medios</label>
                </div>
                <div class="relative mb-3">
                    <input type="text" id="EPI" name="EPI" required class="caja"
                    @if (isset($pruebas)) value="{{ $pruebas->EPI }}" @endif>
                    <label for="EPI" class="etiqueta">E/P</label>
                </div>
                <div class="relative mb-3">
                    <input type="text" id="ColorI" name="ColorI" required class="caja"
                    @if (isset($pruebas)) value="{{ $pruebas->COLORI }}" @endif>
                    <label for="ColorI" class="etiqueta">Color P</label>
                </div>
                <div class="relative mb-3">
                    <input type="text" id="MargenI" name="MargenI" required class="caja"
                    @if (isset($pruebas)) value="{{ $pruebas->MARGENI }}" @endif>
                    <label for="MargenI" class="etiqueta">Margen P</label>
                </div>
                <div class="relative mb-3">
                    <input type="text" id="VasosI" name="VasosI" required class="caja"
                    @if (isset($pruebas)) value="{{ $pruebas->VASOSI }}" @endif>
                    <label for="VasosI" class="etiqueta">Vasos</label>
                </div>
                <div class="relative mb-3">
                    <input type="text" id="MaculaI" name="MaculaI" required class="caja"
                    @if (isset($pruebas)) value="{{ $pruebas->MACULAI }}" @endif>
                    <label for="MaculaI" class="etiqueta">Macula</label>
                </div>
                <div class="relative mb-3">
                    <input type="text" id="FijacionI" name="FijacionI" required class="caja"
                    @if (isset($pruebas)) value="{{ $pruebas->FIJACIONI }}" @endif>
                    <label for="FijacionI" class="etiqueta">Fijacion</label>
                </div>
                <div class="relative mb-3">
                    <input type="text" id="RetinaI" name="RetinaI" required class="caja"
                    @if (isset($pruebas)) value="{{ $pruebas->RETINAI }}" @endif>
                    <label for="RetinaI" class="etiqueta">Retina Periferica</label>
                </div>
            </div>

            <div class="lg:w-1/2 xl:w-1/2 sm:w-full">
                <!-- hijo-->
                <h3 class="text-center">ojo derecho</h3>

                <div class="relative mb-3 mt-5">
                    <input type="text" id="MediosD" name="MediosD" required class="caja"
                    @if (isset($pruebas)) value="{{ $pruebas->MEDIOSD }}" @endif>
                    <label for="MediosD" class="etiqueta">Medios</label>
                </div>
                <div class="relative mb-3">
                    <input type="text" id="EPD" name="EPD" required class="caja"
                    @if (isset($pruebas)) value="{{ $pruebas->EPD }}" @endif>
                    <label for="EPD" class="etiqueta">E/P</label>
                </div>
                <div class="relative mb-3">
                    <input type="text" id="ColorD" name="ColorD" required class="caja"
                    @if (isset($pruebas)) value="{{ $pruebas->COLORD }}" @endif>
                    <label for="ColorD" class="etiqueta">Color P</label>
                </div>
                <div class="relative mb-3">
                    <input type="text" id="MargenD" name="MargenD" required class="caja"
                    @if (isset($pruebas)) value="{{ $pruebas->MARGEND }}" @endif>
                    <label for="MargenD" class="etiqueta">Margen P</label>
                </div>
                <div class="relative mb-3">
                    <input type="text" id="VasosD" name="VasosD" required class="caja"
                    @if (isset($pruebas)) value="{{ $pruebas->VASOSD }}" @endif>
                    <label for="VasosD" class="etiqueta">Vasos</label>
                </div>
                <div class="relative mb-3">
                    <input type="text" id="MaculaD" name="MaculaD" required class="caja"
                    @if (isset($pruebas)) value="{{ $pruebas->MACULAD }}" @endif>
                    <label for="MaculaD" class="etiqueta">Macula</label>
                </div>
                <div class="relative mb-3">
                    <input type="text" id="FijacionD" name="FijacionD" required class="caja"
                    @if (isset($pruebas)) value="{{ $pruebas->FIJACIOND }}" @endif>
                    <label for="FijacionD" class="etiqueta">Fijacion</label>
                </div>
                <div class="relative mb-3">
                    <input type="text" id="RetinaD" name="RetinaD" required class="caja"
                    @if (isset($pruebas)) value="{{ $pruebas->RETINAD }}" @endif>
                    <label for="RetinaD" class="etiqueta">Retina Periferica</label>
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
    </div>
</div>
