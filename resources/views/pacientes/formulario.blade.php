<div class="lg:flex xl:flex md:block">
    <div class="lg:w-1/2 xl:w-1/2 sm:w-full md:w-full">
        <div class="relative mb-3">
            <input type="text" id="Nombre" name="Nombre" required class="caja"
                @if (isset($pacientes)) value="{{ $pacientes->nombre }}" @endif>
            <label for="Nombre" class="etiqueta">Nombre</label>
        </div>

        <div class="relative mb-3">
            <input type="text" id="Apellidos" name="Apellidos" required class="caja"
                @if (isset($pacientes)) value="{{ $pacientes->apellidos }}" @endif>
            <label for="Apellidos" class="etiqueta">Apellidos</label>
        </div>

        <div class="relative mb-3">
            <input type="date" id="Fecha" name="Fecha" required class="caja"
                @if (isset($pacientes)) value="{{ $pacientes->fecha_nac }}" @endif>
            <label for="Fecha" class="etiqueta">Fecha de
                nacimiento</label>
        </div>

        <div class="relative mb-3">
            <input type="text" id="ocupacion" name="ocupacion" required class="caja"
                @if (isset($pacientes)) value="{{ $pacientes->ocupacion }}" @endif>
            <label for="ocupacion" class="etiqueta">ocupacion</label>
        </div>

        <div class="relative mb-3">
            <input type="text" id="calle" name="calle" required class="caja"
                @if (isset($pacientes)) value="{{ $pacientes->calle }}" @endif>
            <label for="calle" class="etiqueta">calle</label>
        </div>

        <div class="relative mb-3">
            <input type="number" id="numero" name="numero" required class="caja"
                @if (isset($pacientes)) value="{{ $pacientes->numero }}" @endif>
            <label for="numero" class="etiqueta">numero</label>
        </div>

    </div>

    <div class="lg:w-1/2 xl:w-1/2 sm:w-full md:w-full ">

        <div class="relative mb-3">
            <input type="text" id="estado" name="estado" required class="caja"
                @if (isset($pacientes)) value="{{ $pacientes->estado }}" @endif>
            <label for="estado" class="etiqueta">estado</label>
        </div>

        <div class="relative mb-3">
            <input type="number" id="CP" name="CP" required class="caja"
                @if (isset($pacientes)) value="{{ $pacientes->CP }}" @endif>
            <label for="CP" class="etiqueta">CP</label>
        </div>

        <div class="relative mb-3">
            <input type="text" id="ciudad" name="ciudad" required class="caja"
                @if (isset($pacientes)) value="{{ $pacientes->ciudad }}" @endif>
            <label for="ciudad" class="etiqueta">ciudad</label>
        </div>

        <div class="relative mb-3">
            <input type="text" id="colonia" name="colonia" required class=" caja"
                @if (isset($pacientes)) value="{{ $pacientes->colonia }}" @endif>
            <label for="colonia" class="etiqueta">colonia</label>
        </div>

        <div class="relative mb-3">
            <input type="email" id="correo" name="correo" required class=" caja"
                @if (isset($pacientes)) value="{{ $pacientes->Correo }}" @endif>
            <label for="correo" class="etiqueta">correo</label>
        </div>

        <div class="relative mb-3">
            <input type="text" id="observaciones" name="observaciones" required class=" caja"
                @if (isset($pacientes)) value="{{ $pacientes->observaciones }}" @endif>
            <label for="observaciones" class="etiqueta">observaciones</label>
        </div>

        <div class="relative mb-3">
            <input type="number" id="telefono" name="telefono" required class=" caja"
                @if (isset($pacientes)) value="{{ $pacientes->Telefono }}" @endif>
            <label for="telefono" class="etiqueta">telefono</label>
        </div>
    </div>
</div>
<div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8 text-center">
    <a class="btnR tran"
        href="{{ url('Pacientes') }}" role="button">
        <i class="fi fi-rr-cross-circle"></i>
        Cancelar</a>

    <button type="submit"
        class="prim tran">
        <i class="fi fi-rr-check"></i>
        Guardar Registro
    </button>
</div>
