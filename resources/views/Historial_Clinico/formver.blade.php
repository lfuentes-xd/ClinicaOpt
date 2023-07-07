<div class="container lg:flex xl:flex md:flex sm:block mt-3">

    <div class="lg:w-1/2 xl:w-1/2 sm:block sm:w-full">

        <div class="relative mb-3">
            <input type="text" id="Vision" name="Vision" required class="caja"
                @if (isset($ver)) value="{{ $ver->Vista_borrosa }}" @endif>
            <label for="Vision" class="etiqueta">Vision</label>
        </div>

        <div class="relative mb-3">
            <input type="text" id="Fatiga" name="Fatiga" required class="caja"
                @if (isset($ver)) value="{{ $ver->Fatiga_Ocular }}" @endif>
            <label for="Fatiga" class="etiqueta">Fatiga</label>
        </div>

        <div class="relative mb-3">
            <input type="text" id="Cefalea" name="Cefalea" required class="caja"
                @if (isset($ver)) value="{{ $ver->Cefalea }}" @endif>
            <label for="Cefalea" class="etiqueta">Cefalea</label>
        </div>

        <div class="relative mb-3">
            <input type="text" id="Sintomas" name="Sintomas" required class="caja"
                @if (isset($ver)) value="{{ $ver->Sintomas_externos }}" @endif>
            <label for="Sintomas" class="etiqueta">Sintomas oculares externos</label>
        </div>

        <div class="relative mb-3">
            <input type="text" id="Alteraciones" name="Alteraciones" required class="caja"
                @if (isset($ver)) value="{{ $ver->Alteraciones }}" @endif>
            <label for="Alteraciones" class="etiqueta">Alteraciones de la vision</label>
        </div>

        <div class="relative mb-3">
            <input type="text" id="doble" name="doble" required class="caja"
                @if (isset($ver)) value="{{ $ver->Vision_doble }}" @endif>
            <label for="doble" class="etiqueta">vision doble</label>
        </div>

        <div class="relative mb-3">
            <input type="text" id="desviacion" name="desviacion" required class="caja"
                @if (isset($ver)) value="{{ $ver->Desviacion_Ocular }}" @endif>
            <label for="desviacion" class="etiqueta">desviacion ocular</label>
        </div>

        <div class="relative mb-3">
            <input type="text" id="problemas" name="problemas" required class="caja"
                @if (isset($ver)) value="{{ $ver->Problemas_lectura }}" @endif>
            <label for="problemas" class="etiqueta">problemas de lectura</label>
        </div>
    </div>

    <!--
    ----------------------------------------------------------------------------
    la otra parte
    ----------------------------------------------------------------------------
    -->

    <div class="lg:w-1/2 xl:w-1/2 sm:block sm:w-full">

        <div class="relative mb-3">
            <input type="text" id="Historia" name="Historia" required class="caja"
                @if (isset($ver)) value="{{ $ver->Historial_oc }}" @endif>
            <label for="Historia" class="etiqueta">Historia ocular</label>
        </div>

        <div class="relative mb-3">
            <input type="text" id="salud" name="salud" required class="caja"
                @if (isset($ver)) value="{{ $ver->Salud_general }}" @endif>
            <label for="salud" class="etiqueta">salud general</label>
        </div>

        <div class="relative mb-3">
            <input type="text" id="medicacion" name="medicacion" required class="caja"
                @if (isset($ver)) value="{{ $ver->medicamentos }}" @endif>
            <label for="medicacion" class="etiqueta">medicacion</label>
        </div>

        <div class="relative mb-3">
            <input type="text" id="Alergias" name="Alergias" required class="caja"
                @if (isset($ver)) value="{{ $ver->alergias }}" @endif>
            <label for="Alergias" class="etiqueta">Alergias</label>
        </div>

        <div class="relative mb-3">
            <input type="text" id="ocular" name="ocular" required class="caja"
                @if (isset($ver)) value="{{ $ver->ocular }}" @endif>
            <label for="ocular" class="etiqueta">ocular</label>
        </div>

        <div class="relative mb-3">
            <input type="text" id="medica" name="medica" required class="caja"
                @if (isset($ver)) value="{{ $ver->medica }}" @endif>
            <label for="medica" class="etiqueta">medica</label>
        </div>

        <div class="relative mb-3">
            <input type="text" id="Impresion" name="Impresion" required class="caja"
                @if (isset($ver)) value="{{ $ver->impresion_diag }}" @endif>
            <label for="Impresion" class="etiqueta">Impresion diagnostica</label>
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
