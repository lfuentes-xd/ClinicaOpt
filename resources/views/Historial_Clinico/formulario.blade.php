<div class="relative mb-3 text-center">
    <select class="border rounded w-1/4" aria-label="pacientes"
     id="paciente" name="paciente" required>
        <option>paciente...</option>
        @foreach ($pacientes as $pa)
            <option value="{{ $pa->nombre }}-{{ $pa->apellidos}}">
                {{$pa->nombre}} {{$pa->apellidos}}</option>
        @endforeach
    </select>
</div>

<div class="container lg:flex xl:flex md:flex sm:block mt-3">

    <div class="lg:w-1/2 xl:w-1/2 sm:block sm:w-full">

        <div class="relative mb-3">
            <input type="text" id="Vision" name="Vision" required class="caja">
            <label for="Vision" class="etiqueta">Vision</label>
        </div>

        <div class="relative mb-3">
            <input type="text" id="Fatiga" name="Fatiga" required class="caja">
            <label for="Fatiga" class="etiqueta">Fatiga</label>
        </div>

        <div class="relative mb-3">
            <input type="text" id="Cefalea" name="Cefalea" required class="caja">
            <label for="Cefalea" class="etiqueta">Cefalea</label>
        </div>

        <div class="relative mb-3">
            <input type="text" id="Sintomas" name="Sintomas" required class="caja">
            <label for="Sintomas" class="etiqueta">Sintomas oculares externos</label>
        </div>

        <div class="relative mb-3">
            <input type="text" id="Alteraciones" name="Alteraciones" required class="caja">
            <label for="Alteraciones" class="etiqueta">Alteraciones de la vision</label>
        </div>

        <div class="relative mb-3">
            <input type="text" id="doble" name="doble" required class="caja">
            <label for="doble" class="etiqueta">vision doble</label>
        </div>

        <div class="relative mb-3">
            <input type="text" id="desviacion" name="desviacion" required class="caja">
            <label for="desviacion" class="etiqueta">desviacion ocular</label>
        </div>

        <div class="relative mb-3">
            <input type="text" id="problemas" name="problemas" required class="caja">
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
            <input type="text" id="Historia" name="Historia" required class="caja">
            <label for="Historia" class="etiqueta">Historia ocular</label>
        </div>

        <div class="relative mb-3">
            <input type="text" id="salud" name="salud" required class="caja">
            <label for="salud" class="etiqueta">salud general</label>
        </div>

        <div class="relative mb-3">
            <input type="text" id="medicacion" name="medicacion" required class="caja">
            <label for="medicacion" class="etiqueta">medicacion</label>
        </div>

        <div class="relative mb-3">
            <input type="text" id="Alergias" name="Alergias" required class="caja">
            <label for="Alergias" class="etiqueta">Alergias</label>
        </div>

        <div class="relative mb-3">
            <input type="text" id="ocular" name="ocular" required class="caja">
            <label for="ocular" class="etiqueta">ocular</label>
        </div>

        <div class="relative mb-3">
            <input type="text" id="medica" name="medica" required class="caja">
            <label for="medica" class="etiqueta">medica</label>
        </div>

        <div class="relative mb-3">
            <input type="text" id="Impresion" name="Impresion" required class="caja">
            <label for="Impresion" class="etiqueta">Impresion diagnostica</label>
        </div>
    </div>
</div>
<div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8 text-center">
    <a class="btnR tran"
        href="{{ url('historial') }}" role="button">
        <i class="fi fi-rr-cross-circle"></i>
        Cancelar</a>

    <button type="submit"
        class="prim tran">
        Siguiente
        <i class="fi fi-rr-angle-right"></i>
    </button>
</div>
